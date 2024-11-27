<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'prestashop\\module\\prestashopfacebook\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\prestashopfacebook\\adapter\\toolsadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookcategoryclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\accountsuspendedsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\apierrorsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\responselistener' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener',
            'prestashop\\module\\prestashopfacebook\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer',
            'prestashop\\module\\prestashopfacebook\\config\\env' => 'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env',
            'prestashop\\module\\prestashopfacebook\\dispatcher\\eventdispatcher' => 'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher',
            'prestashop\\module\\prestashopfacebook\\factory\\facebookessentialsapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\factory\\psapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\handler\\apiconversionhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\categorymatchhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\configurationhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\errorhandler\\errorhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\eventbusproducthandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\messengerhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\pixelhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\prevalidationscanrefreshhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler',
            'prestashop\\module\\prestashopfacebook\\manager\\fbefeaturemanager' => 'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager',
            'prestashop\\module\\prestashopfacebook\\presenter\\moduleupgradepresenter' => 'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter',
            'prestashop\\module\\prestashopfacebook\\provider\\accesstokenprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\eventdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\facebookdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbefeaturedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\multishopdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscancacheprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscandataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\productsyncreportprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider',
            'prestashop\\module\\prestashopfacebook\\repository\\googlecategoryrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\productrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\serverinformationrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\shoprepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\tabrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository',
            'prestashop\\module\\ps_facebook\\tracker\\segment' => 'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\deleteusershophandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\linkshophandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\migrateandlinkv4shophandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\unlinkshophandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\updateusershophandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\upgrademodulehandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler',
            'prestashop\\module\\psaccounts\\account\\commandhandler\\upgrademodulemultihandler' => 'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler',
            'prestashop\\module\\psaccounts\\account\\linkshop' => 'PrestaShop\\Module\\PsAccounts\\Account\\LinkShop',
            'prestashop\\module\\psaccounts\\account\\session\\firebase\\ownersession' => 'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession',
            'prestashop\\module\\psaccounts\\account\\session\\firebase\\shopsession' => 'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession',
            'prestashop\\module\\psaccounts\\account\\session\\shopsession' => 'PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession',
            'prestashop\\module\\psaccounts\\adapter\\configuration' => 'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration',
            'prestashop\\module\\psaccounts\\adapter\\link' => 'PrestaShop\\Module\\PsAccounts\\Adapter\\Link',
            'prestashop\\module\\psaccounts\\api\\client\\accountsclient' => 'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient',
            'prestashop\\module\\psaccounts\\api\\client\\servicesbillingclient' => 'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient',
            'prestashop\\module\\psaccounts\\context\\shopcontext' => 'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext',
            'prestashop\\module\\psaccounts\\cqrs\\commandbus' => 'PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus',
            'prestashop\\module\\psaccounts\\factory\\circuitbreakerfactory' => 'PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory',
            'prestashop\\module\\psaccounts\\installer\\installer' => 'PrestaShop\\Module\\PsAccounts\\Installer\\Installer',
            'prestashop\\module\\psaccounts\\middleware\\oauth2middleware' => 'PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware',
            'prestashop\\module\\psaccounts\\presenter\\psaccountspresenter' => 'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter',
            'prestashop\\module\\psaccounts\\provider\\oauth2\\oauth2client' => 'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client',
            'prestashop\\module\\psaccounts\\provider\\oauth2\\prestashopsession' => 'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession',
            'prestashop\\module\\psaccounts\\provider\\oauth2\\shopprovider' => 'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider',
            'prestashop\\module\\psaccounts\\provider\\rsakeysprovider' => 'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider',
            'prestashop\\module\\psaccounts\\provider\\shopprovider' => 'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider',
            'prestashop\\module\\psaccounts\\repository\\configurationrepository' => 'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository',
            'prestashop\\module\\psaccounts\\repository\\shoptokenrepository' => 'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository',
            'prestashop\\module\\psaccounts\\repository\\usertokenrepository' => 'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository',
            'prestashop\\module\\psaccounts\\service\\analyticsservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService',
            'prestashop\\module\\psaccounts\\service\\psaccountsservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService',
            'prestashop\\module\\psaccounts\\service\\psbillingservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService',
            'prestashop\\module\\psaccounts\\service\\sentryservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\SentryService',
            'prestashop\\module\\pseventbus\\api\\collectorapiclient' => 'PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient',
            'prestashop\\module\\pseventbus\\api\\livesyncapiclient' => 'PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient',
            'prestashop\\module\\pseventbus\\api\\syncapiclient' => 'PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient',
            'prestashop\\module\\pseventbus\\builder\\carrierbuilder' => 'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder',
            'prestashop\\module\\pseventbus\\decorator\\categorydecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator',
            'prestashop\\module\\pseventbus\\decorator\\currencydecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator',
            'prestashop\\module\\pseventbus\\decorator\\customerdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator',
            'prestashop\\module\\pseventbus\\decorator\\custompricedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator',
            'prestashop\\module\\pseventbus\\decorator\\employeedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator',
            'prestashop\\module\\pseventbus\\decorator\\imagedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator',
            'prestashop\\module\\pseventbus\\decorator\\imagetypedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator',
            'prestashop\\module\\pseventbus\\decorator\\languagedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator',
            'prestashop\\module\\pseventbus\\decorator\\manufacturerdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator',
            'prestashop\\module\\pseventbus\\decorator\\payloaddecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator',
            'prestashop\\module\\pseventbus\\decorator\\productdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator',
            'prestashop\\module\\pseventbus\\decorator\\productsupplierdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator',
            'prestashop\\module\\pseventbus\\decorator\\stockdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator',
            'prestashop\\module\\pseventbus\\decorator\\storedecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator',
            'prestashop\\module\\pseventbus\\decorator\\supplierdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator',
            'prestashop\\module\\pseventbus\\decorator\\translationdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator',
            'prestashop\\module\\pseventbus\\decorator\\wishlistdecorator' => 'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator',
            'prestashop\\module\\pseventbus\\formatter\\arrayformatter' => 'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter',
            'prestashop\\module\\pseventbus\\formatter\\jsonformatter' => 'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter',
            'prestashop\\module\\pseventbus\\handler\\errorhandler\\errorhandler' => 'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler',
            'prestashop\\module\\pseventbus\\handler\\errorhandler\\errorhandlerinterface' => 'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface',
            'prestashop\\module\\pseventbus\\provider\\carrierdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider',
            'prestashop\\module\\pseventbus\\provider\\cartdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider',
            'prestashop\\module\\pseventbus\\provider\\cartruledataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider',
            'prestashop\\module\\pseventbus\\provider\\categorydataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider',
            'prestashop\\module\\pseventbus\\provider\\currencydataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider',
            'prestashop\\module\\pseventbus\\provider\\customerdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider',
            'prestashop\\module\\pseventbus\\provider\\custompricedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider',
            'prestashop\\module\\pseventbus\\provider\\customproductcarrierdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider',
            'prestashop\\module\\pseventbus\\provider\\employeedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider',
            'prestashop\\module\\pseventbus\\provider\\googletaxonomydataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider',
            'prestashop\\module\\pseventbus\\provider\\imagedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider',
            'prestashop\\module\\pseventbus\\provider\\imagetypedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider',
            'prestashop\\module\\pseventbus\\provider\\languagedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider',
            'prestashop\\module\\pseventbus\\provider\\manufacturerdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider',
            'prestashop\\module\\pseventbus\\provider\\moduledataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider',
            'prestashop\\module\\pseventbus\\provider\\orderdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider',
            'prestashop\\module\\pseventbus\\provider\\productdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider',
            'prestashop\\module\\pseventbus\\provider\\productsupplierdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider',
            'prestashop\\module\\pseventbus\\provider\\stockdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider',
            'prestashop\\module\\pseventbus\\provider\\storedataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider',
            'prestashop\\module\\pseventbus\\provider\\supplierdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider',
            'prestashop\\module\\pseventbus\\provider\\translationdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider',
            'prestashop\\module\\pseventbus\\provider\\wishlistdataprovider' => 'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider',
            'prestashop\\module\\pseventbus\\repository\\bundlerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository',
            'prestashop\\module\\pseventbus\\repository\\carrierrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository',
            'prestashop\\module\\pseventbus\\repository\\cartproductrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository',
            'prestashop\\module\\pseventbus\\repository\\cartrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository',
            'prestashop\\module\\pseventbus\\repository\\cartrulerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository',
            'prestashop\\module\\pseventbus\\repository\\categoryrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository',
            'prestashop\\module\\pseventbus\\repository\\configurationrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository',
            'prestashop\\module\\pseventbus\\repository\\countryrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository',
            'prestashop\\module\\pseventbus\\repository\\currencyrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository',
            'prestashop\\module\\pseventbus\\repository\\customerrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository',
            'prestashop\\module\\pseventbus\\repository\\custompricerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository',
            'prestashop\\module\\pseventbus\\repository\\deletedobjectsrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository',
            'prestashop\\module\\pseventbus\\repository\\employeerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository',
            'prestashop\\module\\pseventbus\\repository\\eventbussyncrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository',
            'prestashop\\module\\pseventbus\\repository\\googletaxonomyrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository',
            'prestashop\\module\\pseventbus\\repository\\imagerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository',
            'prestashop\\module\\pseventbus\\repository\\imagetyperepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository',
            'prestashop\\module\\pseventbus\\repository\\incrementalsyncrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository',
            'prestashop\\module\\pseventbus\\repository\\languagerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository',
            'prestashop\\module\\pseventbus\\repository\\livesyncrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository',
            'prestashop\\module\\pseventbus\\repository\\manufacturerrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository',
            'prestashop\\module\\pseventbus\\repository\\modulerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository',
            'prestashop\\module\\pseventbus\\repository\\ordercartrulerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository',
            'prestashop\\module\\pseventbus\\repository\\orderdetailsrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository',
            'prestashop\\module\\pseventbus\\repository\\orderhistoryrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository',
            'prestashop\\module\\pseventbus\\repository\\orderrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository',
            'prestashop\\module\\pseventbus\\repository\\productcarrierrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository',
            'prestashop\\module\\pseventbus\\repository\\productrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository',
            'prestashop\\module\\pseventbus\\repository\\productsupplierrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository',
            'prestashop\\module\\pseventbus\\repository\\serverinformationrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository',
            'prestashop\\module\\pseventbus\\repository\\shoprepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository',
            'prestashop\\module\\pseventbus\\repository\\specificpricerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository',
            'prestashop\\module\\pseventbus\\repository\\staterepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository',
            'prestashop\\module\\pseventbus\\repository\\stockmvtrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository',
            'prestashop\\module\\pseventbus\\repository\\stockrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository',
            'prestashop\\module\\pseventbus\\repository\\storerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository',
            'prestashop\\module\\pseventbus\\repository\\supplierrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository',
            'prestashop\\module\\pseventbus\\repository\\taxrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository',
            'prestashop\\module\\pseventbus\\repository\\themerepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository',
            'prestashop\\module\\pseventbus\\repository\\translationrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository',
            'prestashop\\module\\pseventbus\\repository\\wishlistproductrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository',
            'prestashop\\module\\pseventbus\\repository\\wishlistrepository' => 'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository',
            'prestashop\\module\\pseventbus\\service\\apiauthorizationservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService',
            'prestashop\\module\\pseventbus\\service\\cacheservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\CacheService',
            'prestashop\\module\\pseventbus\\service\\compressionservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService',
            'prestashop\\module\\pseventbus\\service\\deletedobjectsservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService',
            'prestashop\\module\\pseventbus\\service\\presenterservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService',
            'prestashop\\module\\pseventbus\\service\\proxyservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService',
            'prestashop\\module\\pseventbus\\service\\psaccountsadapterservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService',
            'prestashop\\module\\pseventbus\\service\\specificpriceservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService',
            'prestashop\\module\\pseventbus\\service\\synchronizationservice' => 'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService',
            'prestashop\\module\\psxmarketingwithgoogle\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\psxmarketingwithgoogle\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer',
            'prestashop\\module\\psxmarketingwithgoogle\\config\\env' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\enhancedconversiontoggle' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\userdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\errorhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\remarketinghookhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\carteventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\pagevieweventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\productdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\purchaseeventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\verificationtagdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\attributesrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\carrierrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\categoryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\countryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\currencyrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\languagerepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\manufacturerrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\productrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\staterepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\tabrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\taxrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\verificationtagrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\tracker\\segment' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment',
            'prestashop\\modulelibguzzleadapter\\clientfactory' => 'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'prestashopbundle\\dependencyinjection\\runtimeconstenvvarprocessor' => 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor',
            'prestashopcorp\\billing\\presenter\\billingpresenter' => 'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter',
            'prestashopcorp\\billing\\services\\billingservice' => 'PrestaShopCorp\\Billing\\Services\\BillingService',
            'prestashopcorp\\billing\\wrappers\\billingcontextwrapper' => 'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper',
        ];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => 'getRuntimeConstEnvVarProcessorService',
            'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter' => 'getBillingPresenterService',
            'PrestaShopCorp\\Billing\\Services\\BillingService' => 'getBillingServiceService',
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => 'getBillingContextWrapperService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener' => 'getResponseListenerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler' => 'getDeleteUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler' => 'getLinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler' => 'getMigrateAndLinkV4ShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler' => 'getUnlinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler' => 'getUpdateUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler' => 'getUpgradeModuleHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler' => 'getUpgradeModuleMultiHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\LinkShop' => 'getLinkShopService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession' => 'getOwnerSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession' => 'getShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession' => 'getShopSession2Service',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Link' => 'getLinkService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient' => 'getAccountsClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient' => 'getServicesBillingClientService',
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus' => 'getCommandBusService',
            'PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory' => 'getCircuitBreakerFactoryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware' => 'getOauth2MiddlewareService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client' => 'getOauth2ClientService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProvider2Service',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\SentryService' => 'getSentryServiceService',
            'PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient' => 'getCollectorApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient' => 'getLiveSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient' => 'getSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator' => 'getCategoryDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator' => 'getCurrencyDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator' => 'getCustomPriceDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator' => 'getCustomerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator' => 'getEmployeeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator' => 'getImageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator' => 'getImageTypeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator' => 'getLanguageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator' => 'getManufacturerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator' => 'getPayloadDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator' => 'getProductDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator' => 'getProductSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator' => 'getStockDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator' => 'getStoreDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator' => 'getSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator' => 'getTranslationDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator' => 'getWishlistDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter' => 'getArrayFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter' => 'getJsonFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider' => 'getCartDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider' => 'getCartRuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider' => 'getCategoryDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider' => 'getCustomPriceDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider' => 'getCustomProductCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider' => 'getCustomerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider' => 'getEmployeeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider' => 'getGoogleTaxonomyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider' => 'getImageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider' => 'getImageTypeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider' => 'getLanguageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider' => 'getManufacturerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider' => 'getModuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider' => 'getOrderDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider' => 'getProductSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider' => 'getStockDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider' => 'getStoreDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider' => 'getSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider' => 'getTranslationDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider' => 'getWishlistDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository' => 'getBundleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository' => 'getCartProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository' => 'getCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository' => 'getConfigurationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository' => 'getCustomPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository' => 'getDeletedObjectsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository' => 'getEmployeeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository' => 'getEventbusSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository' => 'getGoogleTaxonomyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository' => 'getImageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository' => 'getImageTypeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository' => 'getIncrementalSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository' => 'getLiveSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository' => 'getModuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository' => 'getOrderCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository' => 'getOrderDetailsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository' => 'getProductCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository' => 'getProductSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository' => 'getServerInformationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository' => 'getShopRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository' => 'getSpecificPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository' => 'getStockMvtRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository' => 'getStockRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository' => 'getStoreRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository' => 'getSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository' => 'getThemeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository' => 'getTranslationRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository' => 'getWishlistProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository' => 'getWishlistRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService' => 'getApiAuthorizationServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CacheService' => 'getCacheServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService' => 'getCompressionServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService' => 'getDeletedObjectsServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService' => 'getPresenterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService' => 'getProxyServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService' => 'getPsAccountsAdapterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService' => 'getSpecificPriceServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService' => 'getSynchronizationServiceService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapter2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBuffer2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnv2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle' => 'getEnhancedConversionToggleService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider' => 'getUserDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProvider2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository' => 'getCategoryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository' => 'getManufacturerRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegment2Service',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => 'getClientFactoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.guzzle.cache_storage' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.helper.module' => 'getPsEventbus_Helper_ModuleService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.cart' => 'getPsxmarketingwithgoogle_CartService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.customer' => 'getPsxmarketingwithgoogle_CustomerService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
        ];
        $this->privates = [
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'shop' => true,
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => 'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\Bundle\\DoctrineBundle\\Registry' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\Common\\Persistence\\ObjectManager' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Bridge\\Doctrine\\RegistryInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'data_collector.doctrine' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.chain.default' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.metadata_factory' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'doctrine_cache.abstract.apc' => true,
            'doctrine_cache.abstract.apcu' => true,
            'doctrine_cache.abstract.array' => true,
            'doctrine_cache.abstract.chain' => true,
            'doctrine_cache.abstract.couchbase' => true,
            'doctrine_cache.abstract.file_system' => true,
            'doctrine_cache.abstract.memcache' => true,
            'doctrine_cache.abstract.memcached' => true,
            'doctrine_cache.abstract.mongodb' => true,
            'doctrine_cache.abstract.php_file' => true,
            'doctrine_cache.abstract.predis' => true,
            'doctrine_cache.abstract.redis' => true,
            'doctrine_cache.abstract.riak' => true,
            'doctrine_cache.abstract.sqlite3' => true,
            'doctrine_cache.abstract.void' => true,
            'doctrine_cache.abstract.wincache' => true,
            'doctrine_cache.abstract.xcache' => true,
            'doctrine_cache.abstract.zenddata' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'shop' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Presenter\BillingPresenter' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getBillingPresenterService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Presenter\\BillingPresenter'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Services\BillingService' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getBillingServiceService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Services\\BillingService'] = new \PrestaShopCorp\Billing\Services\BillingService(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] : $this->getFacebookEssentialsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] : $this->getAccessTokenProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] : $this->getConfigurationHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber
     */
    protected function getApiErrorSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\ResponseListener' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] = new \PrestaShop\Module\PrestashopFacebook\API\ResponseListener([0 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] : $this->getAccountSuspendedSubscriberService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] : $this->getApiErrorSubscriberService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] : $this->getApiConversionHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] : $this->getPixelHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] : $this->getEventDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory(${($_ = isset($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory']) ? $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] : ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory']) ? $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] : ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->getPsFacebook_LanguageService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.controller']) ? $this->services['ps_facebook.controller'] : $this->getPsFacebook_ControllerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] : $this->getGoogleCategoryProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.cache']) ? $this->services['ps_facebook.cache'] : $this->getPsFacebook_CacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler
     */
    protected function getDeleteUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] : ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->getShopSessionService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] : $this->getOwnerSessionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler
     */
    protected function getLinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] : $this->getLinkShopService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler
     */
    protected function getMigrateAndLinkV4ShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] : ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->getShopSessionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler
     */
    protected function getUnlinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] : $this->getLinkShopService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] : $this->getAnalyticsServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] : $this->getShopProvider2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler
     */
    protected function getUpdateUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] : ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->getShopSessionService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] : $this->getOwnerSessionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler
     */
    protected function getUpgradeModuleHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] : ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] : $this->getLinkShopService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->getShopSessionService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] : $this->getCommandBusService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler
     */
    protected function getUpgradeModuleMultiHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] : $this->getCommandBusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\LinkShop' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\LinkShop
     */
    protected function getLinkShopService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] = new \PrestaShop\Module\PsAccounts\Account\LinkShop(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession
     */
    protected function getOwnerSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] : $this->getShopSession2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession
     */
    protected function getShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] : $this->getShopSession2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\ShopSession
     */
    protected function getShopSession2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\ShopSession(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] : $this->getShopProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] : $this->getLinkShopService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] : $this->getCommandBusService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(${($_ = isset($this->services['ps_accounts.context']) ? $this->services['ps_accounts.context'] : $this->getPsAccounts_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\AccountsClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getAccountsClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getServicesBillingClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] : $this->getPsAccountsServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] : $this->getShopProvider2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.context']) ? $this->services['ps_accounts.context'] : $this->getPsAccounts_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Cqrs\CommandBus' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Cqrs\CommandBus
     */
    protected function getCommandBusService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] = new \PrestaShop\Module\PsAccounts\Cqrs\CommandBus(${($_ = isset($this->services['ps_accounts.module']) ? $this->services['ps_accounts.module'] : $this->getPsAccounts_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory
     */
    protected function getCircuitBreakerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory'] = new \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Installer\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware
     */
    protected function getOauth2MiddlewareService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware'] = new \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware(${($_ = isset($this->services['ps_accounts.module']) ? $this->services['ps_accounts.module'] : $this->getPsAccounts_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(${($_ = isset($this->services['ps_accounts.module']) ? $this->services['ps_accounts.module'] : $this->getPsAccounts_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client
     */
    protected function getOauth2ClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client'] = new \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession
     */
    protected function getPrestaShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession'] = \PrestaShop\Module\PsAccounts\Factory\PrestaShopSessionFactory::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] = \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getRsaKeysProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getShopProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getShopTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] : $this->getShopSessionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] : $this->getOwnerSessionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\AnalyticsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\AnalyticsService
     */
    protected function getAnalyticsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] = new \PrestaShop\Module\PsAccounts\Service\AnalyticsService('pEJGnRxw47CU01efFjMyl1S7YcxshLxl', ${($_ = isset($this->services['ps_accounts.logger']) ? $this->services['ps_accounts.logger'] : $this->getPsAccounts_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService(${($_ = isset($this->services['ps_accounts.module']) ? $this->services['ps_accounts.module'] : $this->getPsAccounts_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] : $this->getServicesBillingClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] : $this->getShopTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->getConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\SentryService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\SentryService
     */
    protected function getSentryServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\SentryService'] = new \PrestaShop\Module\PsAccounts\Service\SentryService('https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585', 'production', ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] : $this->getLinkShopService()) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.context']) ? $this->services['ps_accounts.context'] : $this->getPsAccounts_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\CollectorApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\CollectorApiClient
     */
    protected function getCollectorApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] = new \PrestaShop\Module\PsEventbus\Api\CollectorApiClient('https://eventbus-proxy.psessentials.net', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->getPsEventbusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->getPsAccountsAdapterServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient
     */
    protected function getLiveSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient('https://api.cloudsync.prestashop.com/live-sync/v1', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->getPsEventbusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->getPsAccountsAdapterServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\SyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\SyncApiClient
     */
    protected function getSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\SyncApiClient('https://eventbus-sync.psessentials.net', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->getPsEventbusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->getPsAccountsAdapterServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] : $this->getCarrierRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] : $this->getTaxRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getCategoryDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator
     */
    protected function getCurrencyDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator
     */
    protected function getCustomPriceDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] : $this->getSpecificPriceServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator
     */
    protected function getCustomerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator
     */
    protected function getEmployeeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator
     */
    protected function getImageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator
     */
    protected function getImageTypeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator
     */
    protected function getLanguageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator
     */
    protected function getManufacturerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPayloadDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getProductDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] : $this->getProductRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] : $this->getCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator
     */
    protected function getProductSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StockDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StockDecorator
     */
    protected function getStockDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StoreDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator
     */
    protected function getStoreDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator
     */
    protected function getSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator
     */
    protected function getTranslationDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator
     */
    protected function getWishlistDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getArrayFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\JsonFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler(${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->getPsEventbusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->getPsAccountsAdapterServiceService()) && false ?: '_'}, 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714', 'production');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] : $this->getCarrierBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] : $this->getCarrierRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getCartDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] : $this->getCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] : $this->getCartProductRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider
     */
    protected function getCartRuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getCategoryDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] : $this->getCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider
     */
    protected function getCustomPriceDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] : $this->getCustomPriceRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] : $this->getCustomPriceDecoratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider
     */
    protected function getCustomProductCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] : $this->getProductCarrierRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider
     */
    protected function getCustomerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] : $this->getCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider
     */
    protected function getEmployeeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] : $this->getEmployeeRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getGoogleTaxonomyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider
     */
    protected function getImageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider
     */
    protected function getImageTypeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider
     */
    protected function getLanguageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider
     */
    protected function getManufacturerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] : $this->getManufacturerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getModuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getOrderDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] : $this->getOrderDetailsRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] : $this->getProductRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] : $this->getProductDecoratorService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] : $this->getProductSupplierDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider
     */
    protected function getProductSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StockDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StockDataProvider
     */
    protected function getStockDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StockDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] : $this->getStockRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StoreDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider
     */
    protected function getStoreDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] : $this->getStoreRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider
     */
    protected function getSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] : $this->getSupplierRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider
     */
    protected function getTranslationDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] : $this->getTranslationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider
     */
    protected function getWishlistDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] : $this->getWishlistRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\BundleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\BundleRepository
     */
    protected function getBundleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getCartProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository
     */
    protected function getCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository
     */
    protected function getCustomPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomerRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getDeletedObjectsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandler2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EmployeeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository
     */
    protected function getEmployeeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getEventbusSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getGoogleTaxonomyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getImageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository
     */
    protected function getImageTypeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getIncrementalSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandler2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository
     */
    protected function getLiveSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getModuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository
     */
    protected function getOrderCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository
     */
    protected function getProductCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository
     */
    protected function getProductSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->getPsAccountsAdapterServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandler2Service()) && false ?: '_'}, 'https://eventbus-sync.psessentials.net', 'https://api.cloudsync.prestashop.com/live-sync/v1', 'https://eventbus-proxy.psessentials.net');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getShopRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository
     */
    protected function getSpecificPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockMvtRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository
     */
    protected function getStockMvtRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockRepository
     */
    protected function getStockRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StoreRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StoreRepository
     */
    protected function getStoreRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StoreRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SupplierRepository
     */
    protected function getSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SupplierRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ThemeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getThemeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TranslationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TranslationRepository
     */
    protected function getTranslationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TranslationRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository
     */
    protected function getWishlistProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistRepository
     */
    protected function getWishlistRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getApiAuthorizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] : $this->getEventbusSyncRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] : $this->getSyncApiClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CacheService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CacheService'] = new \PrestaShop\Module\PsEventbus\Service\CacheService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CompressionService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getCompressionServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CompressionService'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getDeletedObjectsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->getPsEventbus_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] : $this->getDeletedObjectsRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] : $this->getProxyServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PresenterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PresenterService
     */
    protected function getPresenterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PresenterService'] = new \PrestaShop\Module\PsEventbus\Service\PresenterService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ProxyService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getProxyServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] : $this->getCollectorApiClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandler2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService
     */
    protected function getPsAccountsAdapterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] = new \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService(${($_ = isset($this->services['ps_eventbus.helper.module']) ? $this->services['ps_eventbus.helper.module'] : ($this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SpecificPriceService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SpecificPriceService
     */
    protected function getSpecificPriceServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] = new \PrestaShop\Module\PsEventbus\Service\SpecificPriceService(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SynchronizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getSynchronizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService(${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->getPsEventbusService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] : $this->getEventbusSyncRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] : $this->getIncrementalSyncRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] : $this->getDeletedObjectsRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] : $this->getPayloadDecoratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapter2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBuffer2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnv2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle
     */
    protected function getEnhancedConversionToggleService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider
     */
    protected function getUserDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.customer']) ? $this->services['psxmarketingwithgoogle.customer'] : $this->getPsxmarketingwithgoogle_CustomerService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.cart']) ? $this->services['psxmarketingwithgoogle.cart'] : $this->getPsxmarketingwithgoogle_CartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] : ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle']) ? $this->services['psxmarketingwithgoogle'] : $this->getPsxmarketingwithgoogleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] : $this->getProductDataProvider2Service()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] : $this->getLanguageRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] : $this->getVerificationTagRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository
     */
    protected function getCategoryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.country']) ? $this->services['psxmarketingwithgoogle.country'] : $this->getPsxmarketingwithgoogle_CountryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(${($_ = isset($this->services['psxmarketingwithgoogle.currency']) ? $this->services['psxmarketingwithgoogle.currency'] : $this->getPsxmarketingwithgoogle_CurrencyService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegment2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
    }

    /**
     * Gets the public 'Prestashop\ModuleLibGuzzleAdapter\ClientFactory' shared service.
     *
     * @return \Prestashop\ModuleLibGuzzleAdapter\ClientFactory
     */
    protected function getClientFactoryService()
    {
        return $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['const' => function () {
            return ${($_ = isset($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor']) ? $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] : ($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor())) && false ?: '_'};
        }]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(NULL, NULL));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $a->setSQLLogger($b);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'db', 'port' => '3306', 'dbname' => 'prestashop', 'user' => 'root', 'password' => 'root', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader())) && false ?: '_'};
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/productcomments/src/Entity']);
        $d->addExcludePaths([0 => '/var/www/html/modules/productcomments/src/Entity/index.php']);
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/ps_accounts/src/Entity']);
        $e->addExcludePaths([0 => '/var/www/html/modules/ps_accounts/src/Entity/index.php']);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $b->addDriver($d, 'PrestaShop\\Module\\ProductComment\\Entity');
        $b->addDriver($e, 'PrestaShop\\Module\\PsAccounts\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()) && false ?: '_'});
        $a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()) && false ?: '_'});
        $a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()) && false ?: '_'});
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('/var/www/html/var/cache/dev//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))) && false ?: '_'});
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $a);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.context_state_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getPrestashop_Adapter_ContextStateManagerService()
    {
        return $this->services['prestashop.adapter.context_state_manager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Doctrine\Common\Cache\FilesystemCache((${($_ = isset($this->services['prestashop.adapter.environment']) ? $this->services['prestashop.adapter.environment'] : ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true))) && false ?: '_'}->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_storage' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheStorage
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] = new \GuzzleHttp\Subscriber\Cache\CacheStorage(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'}, 'circuit_breaker_', 86400);
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheSubscriber
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber'] = ${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] : ($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory())) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_storage']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] : $this->getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' shared service.
     *
     * @return \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(${($_ = isset($this->services['prestashop.core.localization.cldr.cache.adapter']) ? $this->services['prestashop.core.localization.cldr.cache.adapter'] : ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization'))) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_reference']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(${($_ = isset($this->services['prestashop.core.localization.cldr.reader']) ? $this->services['prestashop.core.localization.cldr.reader'] : ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_cache']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_data_source']) ? $this->services['prestashop.core.localization.cldr.locale_data_source'] : $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.cache']) ? $this->services['prestashop.core.localization.currency.middleware.cache'] : $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.middleware.installed']) ? $this->services['prestashop.core.localization.currency.middleware.installed'] : $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(${($_ = isset($this->services['prestashop.core.localization.cache.adapter']) ? $this->services['prestashop.core.localization.cache.adapter'] : ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.database']) ? $this->services['prestashop.core.localization.currency.middleware.database'] : $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.reference']) ? $this->services['prestashop.core.localization.currency.middleware.reference'] : $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(${($_ = isset($this->services['prestashop.core.localization.currency.datasource']) ? $this->services['prestashop.core.localization.currency.datasource'] : $this->getPrestashop_Core_Localization_Currency_DatasourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ${($_ = isset($this->services['prestashop.core.localization.locale.repository']) ? $this->services['prestashop.core.localization.locale.repository'] : $this->getPrestashop_Core_Localization_Locale_RepositoryService()) && false ?: '_'}->getLocale(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.repository']) ? $this->services['prestashop.core.localization.currency.repository'] : $this->getPrestashop_Core_Localization_Currency_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'ps_accounts.context' shared service.
     *
     * @return \Context
     */
    protected function getPsAccounts_ContextService()
    {
        return $this->services['ps_accounts.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'ps_accounts.logger' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Vendor\Monolog\Logger
     */
    protected function getPsAccounts_LoggerService()
    {
        return $this->services['ps_accounts.logger'] = \PrestaShop\Module\PsAccounts\Factory\PsAccountsLogger::create();
    }

    /**
     * Gets the public 'ps_accounts.module' shared service.
     *
     * @return \Ps_accounts
     */
    protected function getPsAccounts_ModuleService()
    {
        return $this->services['ps_accounts.module'] = \Module::getInstanceByName('ps_accounts');
    }

    /**
     * Gets the public 'ps_eventbus' shared service.
     *
     * @return \Ps_eventbus
     */
    protected function getPsEventbusService()
    {
        return $this->services['ps_eventbus'] = \Module::getInstanceByName('ps_eventbus');
    }

    /**
     * Gets the public 'ps_eventbus.context' shared service.
     *
     * @return \Context
     */
    protected function getPsEventbus_ContextService()
    {
        return $this->services['ps_eventbus.context'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_eventbus.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsEventbus_ControllerService()
    {
        return $this->services['ps_eventbus.controller'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_eventbus.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsEventbus_CookieService()
    {
        return $this->services['ps_eventbus.cookie'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_eventbus.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsEventbus_CurrencyService()
    {
        return $this->services['ps_eventbus.currency'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_eventbus.db' shared service.
     *
     * @return \Db
     */
    protected function getPsEventbus_DbService()
    {
        return $this->services['ps_eventbus.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_eventbus.helper.module' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Helper\ModuleHelper
     */
    protected function getPsEventbus_Helper_ModuleService()
    {
        return $this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper();
    }

    /**
     * Gets the public 'ps_eventbus.language' shared service.
     *
     * @return \Language
     */
    protected function getPsEventbus_LanguageService()
    {
        return $this->services['ps_eventbus.language'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_eventbus.link' shared service.
     *
     * @return \Link
     */
    protected function getPsEventbus_LinkService()
    {
        return $this->services['ps_eventbus.link'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_eventbus.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsEventbus_ShopService()
    {
        return $this->services['ps_eventbus.shop'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_eventbus.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsEventbus_SmartyService()
    {
        return $this->services['ps_eventbus.smarty'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the public 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the public 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cart' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CartService()
    {
        return $this->services['psxmarketingwithgoogle.cart'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCart();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.customer' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CustomerService()
    {
        return $this->services['psxmarketingwithgoogle.customer'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCustomer();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the private 'PrestaShopCorp\Billing\Wrappers\BillingContextWrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getBillingContextWrapperService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the private 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the private 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, []);
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.metadata']) ? $this->services['cache.doctrine.orm.default.metadata'] : ($this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.query']) ? $this->services['cache.doctrine.orm.default.query'] : ($this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.result']) ? $this->services['cache.doctrine.orm.default.result'] : ($this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the private 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the private 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the private 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the private 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the private 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(${($_ = isset($this->services['prestashop.core.filter.front_end_object.product_collection']) ? $this->services['prestashop.core.filter.front_end_object.product_collection'] : $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.cart']) ? $this->services['prestashop.core.filter.front_end_object.cart'] : $this->getPrestashop_Core_Filter_FrontEndObject_CartService()) && false ?: '_'}, 'customer' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.customer']) ? $this->services['prestashop.core.filter.front_end_object.customer'] : ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())) && false ?: '_'}, 'shop' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.shop']) ? $this->services['prestashop.core.filter.front_end_object.shop'] : ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())) && false ?: '_'}, 'configuration' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.configuration']) ? $this->services['prestashop.core.filter.front_end_object.configuration'] : ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter())) && false ?: '_'}]);
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.product']) ? $this->services['prestashop.core.filter.front_end_object.product'] : ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.search_result_product']) ? $this->services['prestashop.core.filter.front_end_object.search_result_product'] : ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the private 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the private 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(${($_ = isset($this->services['prestashop.adapter.module.repository.module_repository']) ? $this->services['prestashop.adapter.module.repository.module_repository'] : ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository())) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'database_host' => 'db',
            'database_port' => '3306',
            'database_name' => 'prestashop',
            'database_user' => 'root',
            'database_password' => 'root',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => '86ce8Wf6f1KkjgFLZ2Kf4C2qnvvTo3HNX1tyIqqU9GPN8BAY8zaOFNVZhXzBU8uC',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2024-11-10',
            'locale' => 'en-US',
            'use_debug_toolbar' => true,
            'cookie_key' => 'h3wWQdm0SD0o5Yi046fRvZwaNYZVXmgBwMUabzGm0DZuti0fhccFvVu0u16IdXKw',
            'cookie_iv' => 'DdNpGs8hBuW5CCGvKqjYOLRw2xQSWW5D',
            'new_cookie_key' => 'def00000e8c27fb7c7b2f067d8807e69ba020766c42a30d203be4d1c0f814376e6a8b7dfaffedc1631091bdeefafaec2b2e59a53795b019f9101a735a35544aaa4e8bd44',
            'cache.driver' => 'array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/var/www/html/app',
            'kernel.project_dir' => '/var/www/html',
            'kernel.name' => 'app',
            'kernel.debug' => true,
            'kernel.environment' => 'dev',
            'kernel.cache_dir' => '/var/www/html/var/cache/dev/',
            'kernel.active_modules' => [
                0 => 'blockwishlist',
                1 => 'contactform',
                2 => 'dashactivity',
                3 => 'dashtrends',
                4 => 'dashgoals',
                5 => 'dashproducts',
                6 => 'graphnvd3',
                7 => 'gridhtml',
                8 => 'gsitemap',
                9 => 'pagesnotfound',
                10 => 'productcomments',
                11 => 'ps_banner',
                12 => 'ps_categorytree',
                13 => 'ps_contactinfo',
                14 => 'ps_crossselling',
                15 => 'ps_currencyselector',
                16 => 'ps_customeraccountlinks',
                17 => 'ps_customersignin',
                18 => 'ps_customtext',
                19 => 'ps_dataprivacy',
                20 => 'ps_emailsubscription',
                21 => 'ps_faviconnotificationbo',
                22 => 'ps_featuredproducts',
                23 => 'ps_imageslider',
                24 => 'ps_languageselector',
                25 => 'ps_linklist',
                26 => 'ps_mainmenu',
                27 => 'ps_searchbar',
                28 => 'ps_sharebuttons',
                29 => 'ps_shoppingcart',
                30 => 'ps_socialfollow',
                31 => 'ps_themecusto',
                32 => 'ps_wirepayment',
                33 => 'statsbestcategories',
                34 => 'statsbestcustomers',
                35 => 'statsbestproducts',
                36 => 'statsbestsuppliers',
                37 => 'statsbestvouchers',
                38 => 'statscarrier',
                39 => 'statscatalog',
                40 => 'statscheckup',
                41 => 'statsdata',
                42 => 'statsforecast',
                43 => 'statsnewsletter',
                44 => 'statspersonalinfos',
                45 => 'statsproduct',
                46 => 'statsregistrations',
                47 => 'statssales',
                48 => 'statssearch',
                49 => 'statsstock',
                50 => 'welcome',
                51 => 'psgdpr',
                52 => 'ps_mbo',
                53 => 'ps_buybuttonlite',
                54 => 'ps_metrics',
                55 => 'ps_facebook',
                56 => 'psxmarketingwithgoogle',
                57 => 'blockreassurance',
                58 => 'ps_facetedsearch',
                59 => 'ps_accounts',
                60 => 'ps_eventbus',
                61 => 'dhlexpresscommerce',
                62 => 'paypal',
                63 => 'ps_cashondelivery',
            ],
            'ps_cache_dir' => '/var/www/html/var/cache/dev/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/var/www/html/var/cache/dev//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
            'ps_eventbus.live_sync_api_url' => 'https://api.cloudsync.prestashop.com/live-sync/v1',
            'ps_eventbus.sentry_dsn' => 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714',
            'ps_eventbus.sentry_env' => 'production',
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.indirect_channel_api_url' => 'https://indirect-channel-api.prestashop.net',
            'ps_accounts.sentry_credentials' => 'https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585',
            'ps_accounts.segment_write_key' => 'pEJGnRxw47CU01efFjMyl1S7YcxshLxl',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.accounts_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@5',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
            'ps_accounts.oauth2_url' => 'https://oauth.prestashop.com',
            'ps_accounts.testimonials_url' => 'https://assets.prestashop3.com/dst/accounts/assets/testimonials.json',
        ];
    }
}
