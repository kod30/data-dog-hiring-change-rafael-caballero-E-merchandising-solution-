<?php

abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxRule extends TaxRuleCore {};
class Tax extends TaxCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class Customization extends CustomizationCore {};
class Contact extends ContactCore {};
class CMSCategory extends CMSCategoryCore {};
class Upgrader extends UpgraderCore {};
abstract class Db extends DbCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperOptions extends HelperOptionsCore {};
class Helper extends HelperCore {};
class HelperForm extends HelperFormCore {};
class HelperShop extends HelperShopCore {};
class HelperView extends HelperViewCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperList extends HelperListCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperKpi extends HelperKpiCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class CustomerSession extends CustomerSessionCore {};
class ProductSupplier extends ProductSupplierCore {};
class CustomerAddress extends CustomerAddressCore {};
class Tag extends TagCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class State extends StateCore {};
class Configuration extends ConfigurationCore {};
class CMSRole extends CMSRoleCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class Stock extends StockCore {};
class StockMvt extends StockMvtCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class StockMvtReason extends StockMvtReasonCore {};
class Warehouse extends WarehouseCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrder extends SupplyOrderCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
abstract class ObjectModel extends ObjectModelCore {};
class CustomerMessage extends CustomerMessageCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CccReducer extends CccReducerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Supplier extends SupplierCore {};
class Alias extends AliasCore {};
class ImageManager extends ImageManagerCore {};
class SearchEngine extends SearchEngineCore {};
class Pack extends PackCore {};
class OrderMessage extends OrderMessageCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderSlip extends OrderSlipCore {};
class OrderCarrier extends OrderCarrierCore {};
class Order extends OrderCore {};
class OrderState extends OrderStateCore {};
class OrderDetail extends OrderDetailCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderReturn extends OrderReturnCore {};
class Mail extends MailCore {};
class Chart extends ChartCore {};
class Access extends AccessCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Cookie extends CookieCore {};
class Carrier extends CarrierCore {};
class FormField extends FormFieldCore {};
class CustomerFormatter extends CustomerFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Group extends GroupCore {};
class Gender extends GenderCore {};
class FileLogger extends FileLoggerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Search extends SearchCore {};
class Feature extends FeatureCore {};
class Notification extends NotificationCore {};
class CustomizationField extends CustomizationFieldCore {};
class Product extends ProductCore {};
class Customer extends CustomerCore {};
class Attribute extends AttributeCore {};
class GroupReduction extends GroupReductionCore {};
class CustomerThread extends CustomerThreadCore {};
class AttributeGroup extends AttributeGroupCore {};
class Dispatcher extends DispatcherCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class EmployeeSession extends EmployeeSessionCore {};
class FeatureValue extends FeatureValueCore {};
abstract class Cache extends CacheCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class AddressFormat extends AddressFormatCore {};
class Zone extends ZoneCore {};
class Page extends PageCore {};
class ProductSale extends ProductSaleCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Category extends CategoryCore {};
class Address extends AddressCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class Curve extends CurveCore {};
class Attachment extends AttachmentCore {};
class ImageType extends ImageTypeCore {};
class Context extends ContextCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustom extends SmartyCustomCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class GroupLang extends GroupLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class DataLang extends DataLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class TabLang extends TabLangCore {};
class FeatureLang extends FeatureLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class CategoryLang extends CategoryLangCore {};
class AttributeLang extends AttributeLangCore {};
class GenderLang extends GenderLangCore {};
class CarrierLang extends CarrierLangCore {};
class ContactLang extends ContactLangCore {};
class ProfileLang extends ProfileLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class RiskLang extends RiskLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class MetaLang extends MetaLangCore {};
class ThemeLang extends ThemeLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class Hook extends HookCore {};
class Referrer extends ReferrerCore {};
class Validate extends ValidateCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Connection extends ConnectionCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceKey extends WebserviceKeyCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Guest extends GuestCore {};
class Delivery extends DeliveryCore {};
class FileUploader extends FileUploaderCore {};
class Message extends MessageCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Image extends ImageCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class AddressValidator extends AddressValidatorCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CartChecksum extends CartChecksumCore {};
class Translate extends TranslateCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class CMS extends CMSCore {};
class Combination extends CombinationCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class Module extends ModuleCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class AddressChecksum extends AddressChecksumCore {};
class Cart extends CartCore {};
class Employee extends EmployeeCore {};
class Link extends LinkCore {};
class Uploader extends UploaderCore {};
class Profile extends ProfileCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class Controller extends ControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class Tab extends TabCore {};
class CartRule extends CartRuleCore {};
class Store extends StoreCore {};
class Windows extends WindowsCore {};
class Language extends LanguageCore {};
class LocalizationPack extends LocalizationPackCore {};
class RequestSql extends RequestSqlCore {};
class Tree extends TreeCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class SupplierAddress extends SupplierAddressCore {};
class CSV extends CSVCore {};
class LinkProxy extends LinkProxyCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Currency extends CurrencyCore {};
class Manufacturer extends ManufacturerCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Country extends CountryCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class ProductDownload extends ProductDownloadCore {};
class Tools extends ToolsCore {};
class Media extends MediaCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Meta extends MetaCore {};
class ProductAssembler extends ProductAssemblerCore {};
class DateRange extends DateRangeCore {};
class Risk extends RiskCore {};
class SpecificPrice extends SpecificPriceCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class QuickAccess extends QuickAccessCore {};
