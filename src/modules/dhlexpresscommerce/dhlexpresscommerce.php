<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    DHL Express
 *  @copyright DHL Express
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Dhlexpresscommerce extends CarrierModule
{
    protected $config_form = false;
    
    public $id_carrier;
    public $first_call = true;
    public $first_rate;
    public $processed_carriers = array();

    public function __construct()
    {
        $this->name          = 'dhlexpresscommerce';
        $this->tab           = 'shipping_logistics';
        $this->version       = '1.0.4';
        $this->author        = 'DHL Express';
        $this->need_instance = 0;
        
        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;
        
        parent::__construct();
        
        $this->displayName = $this->l('DHL Express Commerce');
        $this->description = $this->l('Provides live shipping rates and integration with DHL Express.');
        
        $this->ps_versions_compliancy = array(
            'min' => '1.6',
            'max' => _PS_VERSION_
        );
        
        $this->module_key = '7e8cb9fcaaa2ac4b6066555a7358cb01';
    }
    
    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (extension_loaded('curl') == false) {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }
        
        $this->installSQL();
        
        $carrierCounter = 1;
        foreach ($this->getCarriers() as $carrierDetails) {
            $carrier = $this->addCarrier($carrierDetails, $carrierCounter);
            $this->addZones($carrier);
            $this->addGroups($carrier);
            $this->addRanges($carrier);
            $carrierCounter++;
        }
        Configuration::updateValue('DHL_EXPRESS_COMMERCE_LIVE_MODE', false);
        
        return parent::install() &&
            $this->registerHook('actionCarrierUpdate');
    }
    
    public function uninstall()
    {
        Configuration::deleteByName('DHL_EXPRESS_COMMERCE_LIVE_MODE');
        $this->uninstallSQL();

        return parent::uninstall() &&
            $this->unregisterHook('actionCarrierUpdate');
    }
    
    /**
     * Create necessary entities in the database in order to make the module
     * to work.
     *
     * @return bool `true` if every entity gets created correctly.
     */
    private function installSQL()
    {
        $queries = include dirname(__FILE__) . '/sql/install.php';
        if (is_array($queries)) {
            return $this->performInstallQueries($queries);
        } else {
            return false;
        }
    }
    
    /**
     * Remove every module specific entities from the database.
     *
     * @return bool `true` if every entity is removed correctly.
     */
    private function uninstallSQL()
    {
        $queries = include dirname(__FILE__) . '/sql/uninstall.php';
        if (is_array($queries)) {
            return $this->performInstallQueries($queries);
        } else {
            return false;
        }
    }
    
    /**
     * Execute a collection of SQL queries of the install/uninstall procedures.
     *
     * @param  array $queries List of raw SQL queries to execute.
     * @return bool `true` if all queries were executed successfuly.
     */
    private function performInstallQueries(array $queries)
    {
        foreach ($queries as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        }
        return true;
    }
    
    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool) Tools::isSubmit('submitDECModule')) == true) {
            $this->postProcess();
        }
        
        $this->context->smarty->assign('module_dir', $this->_path);
        
        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');
        
        return $output . $this->renderForm();
    }
    
    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();
        
        $helper->show_toolbar             = false;
        $helper->table                    = $this->table;
        $helper->module                   = $this;
        $helper->default_form_language    = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);
        
        $helper->identifier    = $this->identifier;
        $helper->submit_action = 'submitDECModule';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false) . 
        '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token         = Tools::getAdminTokenLite('AdminModules');
        
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        
        return $helper->generateForm(array(
            $this->getConfigForm()
        ));
    }
    
    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Active'),
                        'name' => 'DHL_EXPRESS_COMMERCE_LIVE_MODE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        )
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-key"></i>',
                        'name' => 'DHL_EXPRESS_COMMERCE_API_KEY',
                        'label' => $this->l('API key')
                    ),
                    array(
                        'col' => 2,
                        'type' => 'text',
                        'name' => 'DHL_EXPRESS_COMMERCE_API_SOURCE',
                        'label' => $this->l('API source'),
                    )
                ),
                'submit' => array(
                    'title' => $this->l('Save')
                )
            )
        );
    }
    
    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'DHL_EXPRESS_COMMERCE_LIVE_MODE' => Configuration::get('DHL_EXPRESS_COMMERCE_LIVE_MODE'),
            'DHL_EXPRESS_COMMERCE_API_KEY' => Configuration::get('DHL_EXPRESS_COMMERCE_API_KEY', ''),
            'DHL_EXPRESS_COMMERCE_API_SOURCE' => Configuration::get('DHL_EXPRESS_COMMERCE_API_SOURCE', 'DHL')
        );
    }
    
    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();
        
        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
        
        if (Configuration::get('DHL_EXPRESS_COMMERCE_LIVE_MODE')) {
            if (Configuration::get('DHL_EXPRESS_COMMERCE_API_KEY', '') == "") {
                $this->context->controller->errors[] = $this->l("API key is missing.");
            } else {
                $this->context->controller->confirmations[] = $this->l("Settings saved successfully.");
            }
        } else {
            $this->context->controller->confirmations[] = $this->l("Settings saved successfully.");
        }
    }

    public function getOrderShippingCost($params, $shipping_cost)
    {
        if ($this->first_call)
        {
            $this->first_call = false;

            if (!$this->active || !$params->id_address_delivery) {
                return false;
            }
            if (!Configuration::get('DHL_EXPRESS_COMMERCE_LIVE_MODE') 
            || !Configuration::get('DHL_EXPRESS_COMMERCE_API_KEY')) {
                return false;
            }
                    
            $id_address_delivery = Context::getContext()->cart->id_address_delivery;
            $address             = new Address($id_address_delivery);
            $api_carrier_id = 2;

            try {
                $apiKey         = Configuration::get('DHL_EXPRESS_COMMERCE_API_KEY', '');
                $apiSource      = Configuration::get('DHL_EXPRESS_COMMERCE_API_SOURCE', '');
                if ($apiSource == "") {
                    $apiSource  = 'DHL';
                }
                $destCountry    = Country::getIsoById($address->id_country);
                $destRegionCode = State::getNameById($address->id_state);
                $destStreet     = json_encode($address->address1);
                $destSuburb     = json_encode($address->address2);
                $destCity       = json_encode($address->city);
                $destPostcode   = json_encode($address->postcode);
                $packageValue   = Context::getContext()->cart->getOrderTotal(false, Cart::ONLY_PRODUCTS);
                $packageWeight  = Context::getContext()->cart->getTotalWeight() * 1000;
            
                $url       = 'https://api.starshipit.com/api/rates/shopify?apiKey=';
                $url       = $url . $apiKey . '&integration_type=prestashop&source=' . $apiSource;

                $post_data = '{
                      "rate": {
                        "destination":{  
                          "country": "' . $destCountry . '",
                          "postal_code": ' . $destPostcode . ',
                          "province": "' . $destRegionCode . '",
                          "city": ' . $destCity . ',
                          "name": null,
                          "address1": ' . $destStreet . ',
                          "address2": ' . $destSuburb . ',
                          "address3": null,
                          "phone": null,
                          "fax": null,
                          "address_type": null,
                          "company_name": null
                        },
                        "items":[
                          {
                            "name": "Total Items",
                            "sku": null,
                            "quantity": 1,
                            "grams": ' . $packageWeight . ' ,
                            "price": ' . $packageValue . ',
                            "vendor": null,
                            "requires_shipping": true,
                            "taxable": true,
                            "fulfillment_service": "manual"
                          }
                        ],
                        "carrierId": ' . $api_carrier_id . '
                      }
                    }';
            
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json'
                ));
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
                $response = curl_exec($ch);
                curl_close($ch);

                $json_obj    = json_decode($response);
                $rates_obj   = $json_obj->{'rates'};
                $rates_count = count($rates_obj);
                if ($rates_count > 0) 
                {
                    $serviceQuery = 'SELECT id_carrier, product_content_code FROM `' . _DB_PREFIX_ . 'dhlexpresscommerce_service`';

                    if ($serviceResults = Db::getInstance()->executeS($serviceQuery))
                    {
                        foreach ($serviceResults as $row)
                        {
                            foreach ($rates_obj as $rate) 
                            {
                                if (is_object($rate)) 
                                {
                                    if ($row['product_content_code'] == $rate->{'service_code'})
                                    {
                                        $this->processed_carriers[$row["id_carrier"]] = $rate->{'total_price'};
                                    }
                                }
                            }
                        }
                    }
                }

                if (!isset($this->processed_carriers[$this->id_carrier]))
                {
                    return false;
                }
                else 
                {
                    return $this->processed_carriers[$this->id_carrier];
                }
            } catch (Exception $e) {
                //$this->_logger->debug("DHL Express Commerce Rates Exception");
                //$this->_logger->debug($e);
            }
        }
        else 
        {
            if (!isset($this->processed_carriers[$this->id_carrier]))
            {
                return false;
            }
            else 
            {
                return $this->processed_carriers[$this->id_carrier];
            }
        }
    }
    
    public function getOrderShippingCostExternal($params)
    {
        return $this->getOrderShippingCost($params, null);
    }

    public function getCarriers() 
    {
        return array(
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Delivered by 9AM',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => 'I',
                                'global_product_name' => 'DOMESTIC EXPRESS 9:00',
                                'product_content_code' => 'DOK',
                            ),
                            array(
                                'global_product_code' => 'K',
                                'global_product_name' => 'EXPRESS 9:00',
                                'product_content_code' => 'TDK',
                            ),
                            array(
                                'global_product_code' => 'E',
                                'global_product_name' => 'EXPRESS 9:00',
                                'product_content_code' => 'TDE',
                            ),
                        ),
                    ),
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Delivered by 10:30AM',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => 'O',
                                'global_product_name' => 'DOMESTIC EXPRESS 10:30',
                                'product_content_code' => 'DOL',
                            ),
                            array(
                                'global_product_code' => 'L',
                                'global_product_name' => 'EXPRESS 10:30',
                                'product_content_code' => 'TDL',
                            ),
                            array(
                                'global_product_code' => 'M',
                                'global_product_name' => 'EXPRESS 10:30',
                                'product_content_code' => 'TDM',
                            ),
                        ),
                    ),
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Delivered by 12PM',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => '1',
                                'global_product_name' => 'DOMESTIC EXPRESS 12:00',
                                'product_content_code' => 'DOT',
                            ),
                            array(
                                'global_product_code' => 'T',
                                'global_product_name' => 'EXPRESS 12:00',
                                'product_content_code' => 'TDT',
                            ),
                            array(
                                'global_product_code' => 'Y',
                                'global_product_name' => 'EXPRESS 12:00',
                                'product_content_code' => 'TDY',
                            ),
                        ),
                    ),
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Delivered by 6PM',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => 'N',
                                'global_product_name' => 'DOMESTIC EXPRESS',
                                'product_content_code' => 'DOM',
                            ),
                            array(
                                'global_product_code' => 'U',
                                'global_product_name' => 'EXPRESS WORLDWIDE',
                                'product_content_code' => 'ECX',
                            ),
                            array(
                                'global_product_code' => 'P',
                                'global_product_name' => 'EXPRESS WORLDWIDE',
                                'product_content_code' => 'WPX',
                            ),
                        ),
                    ),
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Economy Delivery',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => 'H',
                                'global_product_name' => 'ECONOMY SELECT',
                                'product_content_code' => 'ESI',
                            ),
                            array(
                                'global_product_code' => 'W',
                                'global_product_name' => 'ECONOMY SELECT',
                                'product_content_code' => 'ESU',
                            ),
                        ),
                    ),
                    array(
                        'name' => 'DHL Express',
                        'delays' => array(
                            'en' => 'Flat Rate',
                        ),
                        'values' => array(
                            'code' => 'dhlexpress',
                            'url' => 'http://www.dhl.com/cgi-bin/tracking.pl?AWB=@'
                        ),
                        'services' => array(
                            array(
                                'global_product_code' => '',
                                'global_product_name' => 'Flat Rate',
                                'product_content_code' => 'FAIL-OVER',
                            ),
                        ),
                    ),
                );
    }

    protected function addCarrier($carrierDetails, $carrierCounter)
    {
        $carrier = new Carrier();
        
        $carrier->name                 = $this->l($carrierDetails['name']);
        $carrier->is_module            = true;
        $carrier->active               = 1;
        $carrier->range_behavior       = 1;
        $carrier->need_range           = 1;
        $carrier->shipping_external    = true;
        $carrier->range_behavior       = 0;
        $carrier->external_module_name = $this->name;
        $carrier->shipping_method      = 2;
        $carrier->url                  = $carrierDetails['values']['url'];

        foreach (Language::getLanguages() as $lang) {
            // set the service description based on the language 'iso_code' but there is only 'en' at the moment but can add more to the list
            $carrier->delay[$lang['id_lang']] = isset($carrierDetails['delays'][$lang['iso_code']]) 
                                                    ? $carrierDetails['delays'][$lang['iso_code']] : $carrierDetails['delays']['en'];
        }
        
        if ($carrier->add() == true) {
            Configuration::updateValue('SHIPPINGMODULE_CARRIER' . $carrierCounter . '_ID', (int) $carrier->id);

            if (Tools::version_compare(_PS_VERSION_, '1.7', '>=')) {
                $logoPath = _PS_MODULE_DIR_.$this->name.'/views/img/dhl_carrier_17.png';
            } else {
                $logoPath = _PS_MODULE_DIR_.$this->name.'/views/img/dhl_carrier.png';
            }
            $this->setLogo($logoPath, $this->context->language->id, $carrier->id);

            Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ .
            'dhlexpresscommerce` (`id_carrier`, `carrier_code`) VALUES ("' . 
            (int) $carrier->id . '", "' . pSQL($carrierDetails['values']['code']) . '")');

            foreach ($carrierDetails['services'] as $service) {
                Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'dhlexpresscommerce_service` (`id_carrier`, `global_product_code`, `global_product_name`, `product_content_code`) 
                    VALUES ("' . (int) $carrier->id . '", "' . $service['global_product_code'] . '", "' . $service['global_product_name'] . '", "' . $service['product_content_code'] . '")');
            }

            return $carrier;
        }
        
        return false;
    }
    
    protected function addGroups($carrier)
    {
        $groups_ids = array();
        $groups     = Group::getGroups(Context::getContext()->language->id);
        foreach ($groups as $group) {
            $groups_ids[] = $group['id_group'];
        }
        
        $carrier->setGroups($groups_ids);
    }
    
    protected function addRanges($carrier)
    {
        $range_price             = new RangePrice();
        $range_price->id_carrier = $carrier->id;
        $range_price->delimiter1 = '0';
        $range_price->delimiter2 = '10000';
        $range_price->add();
        
        $range_weight             = new RangeWeight();
        $range_weight->id_carrier = $carrier->id;
        $range_weight->delimiter1 = '0';
        $range_weight->delimiter2 = '10000';
        $range_weight->add();
    }
    
    protected function addZones($carrier)
    {
        $zones = Zone::getZones();
        
        foreach ($zones as $zone) {
            $carrier->addZone($zone['id_zone']);
        }
    }

     /**
     * @param string $logoPath
     * @param int    $idLang
     * @param int    $idCarrier
     */
    public function setLogo($logoPath, $idLang, $idCarrier)
    {
        require_once(dirname(__FILE__).'/classes/Utils.php');

        Utils::copyLogo($logoPath, _PS_SHIP_IMG_DIR_.(int) $idCarrier.'.jpg');
        Utils::copyLogo($logoPath, _PS_TMP_IMG_DIR_.'carrier_mini_'.(int) $idCarrier.'_'.$idLang.'.png');
    }

    /*
    ** Hook update carrier
    */
    public function hookActionCarrierUpdate($params) 
    {
        if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER1_ID'))
            || (int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER2_ID'))
            || (int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER3_ID'))
            || (int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER4_ID'))
            || (int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER5_ID')))
        {
            $query = "UPDATE `"._DB_PREFIX_."dhlexpresscommerce_service` ds SET id_carrier=". $params['carrier']->id . " WHERE ds.id_carrier=" . $params['id_carrier'] . ";";
            Db::getInstance()->Execute($query);

            if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER1_ID')))
                Configuration::updateValue('SHIPPINGMODULE_CARRIER1_ID', $params['carrier']->id);

            if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER2_ID')))
                Configuration::updateValue('SHIPPINGMODULE_CARRIER2_ID', $params['carrier']->id);

            if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER3_ID')))
                Configuration::updateValue('SHIPPINGMODULE_CARRIER3_ID', $params['carrier']->id);

            if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER4_ID')))
                Configuration::updateValue('SHIPPINGMODULE_CARRIER4_ID', $params['carrier']->id);

            if ((int)($params['id_carrier']) == (int)(Configuration::get('SHIPPINGMODULE_CARRIER5_ID')))
                Configuration::updateValue('SHIPPINGMODULE_CARRIER5_ID', $params['carrier']->id);
        }
    }
}
