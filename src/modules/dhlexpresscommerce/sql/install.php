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
 *  @author    Starshipit <support@starshipit.com>
 *  @copyright Starshipit
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)

 */

if (!defined('_PS_VERSION_')) {
    exit;
}

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'dhlexpresscommerce` (
    `id_dhlexpresscommerce` int(11) NOT NULL AUTO_INCREMENT,
    `id_carrier` int(10) DEFAULT NULL,
    `carrier_code` varchar(30) DEFAULT NULL,
    PRIMARY KEY  (`id_dhlexpresscommerce`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'dhlexpresscommerce_service` (
    `id_dhlexpresscommerce_service` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_carrier` INT(10) UNSIGNED NULL DEFAULT NULL,
    `global_product_code` VARCHAR(1) NOT NULL,
    `global_product_name` VARCHAR(35) NOT NULL,
    `product_content_code` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id_dhlexpresscommerce_service`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

return $sql;
