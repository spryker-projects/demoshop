<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReaderConfigurationTransfer;
use Spryker\Zed\DataImport\DataImportConfig as SprykerDataImportConfig;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class DataImportConfig extends SprykerDataImportConfig
{
    const IMPORT_TYPE_CATEGORY_TEMPLATE = 'category-template';
    const IMPORT_TYPE_CATEGORY = 'category';
    const IMPORT_TYPE_CUSTOMER = 'customer';
    const IMPORT_TYPE_GLOSSARY = 'glossary';
    const IMPORT_TYPE_NAVIGATION = 'navigation';
    const IMPORT_TYPE_NAVIGATION_NODE = 'navigation-node';
    const IMPORT_TYPE_PRODUCT_PRICE = 'product-price';
    const IMPORT_TYPE_PRODUCT_STOCK = 'product-stock';
    const IMPORT_TYPE_PRODUCT_ABSTRACT = 'product-abstract';
    const IMPORT_TYPE_PRODUCT_ABSTRACT_STORE = 'product-abstract-store';
    const IMPORT_TYPE_PRODUCT_CONCRETE = 'product-concrete';
    const IMPORT_TYPE_PRODUCT_ATTRIBUTE_KEY = 'product-attribute-key';
    const IMPORT_TYPE_PRODUCT_MANAGEMENT_ATTRIBUTE = 'product-management-attribute';
    const IMPORT_TYPE_PRODUCT_RELATION = 'product-relation';
    const IMPORT_TYPE_PRODUCT_REVIEW = 'product-review';
    const IMPORT_TYPE_PRODUCT_LABEL = 'product-label';
    const IMPORT_TYPE_PRODUCT_SET = 'product-set';
    const IMPORT_TYPE_PRODUCT_GROUP = 'product-group';
    const IMPORT_TYPE_PRODUCT_OPTION = 'product-option';
    const IMPORT_TYPE_PRODUCT_OPTION_PRICE = 'product-option-price';
    const IMPORT_TYPE_PRODUCT_IMAGE = 'product-image';
    const IMPORT_TYPE_PRODUCT_SEARCH_ATTRIBUTE_MAP = 'product-search-attribute-map';
    const IMPORT_TYPE_PRODUCT_SEARCH_ATTRIBUTE = 'product-search-attribute';
    const IMPORT_TYPE_PRODUCT_CUSTOMER_PERMISSION = 'product-customer-permission';
    const IMPORT_TYPE_PRODUCT_MEASUREMENT_UNIT = 'product-measurement-unit';
    const IMPORT_TYPE_PRODUCT_MEASUREMENT_BASE_UNIT = 'product-measurement-base-unit';
    const IMPORT_TYPE_PRODUCT_MEASUREMENT_SALES_UNIT = 'product-measurement-sales-unit';
    const IMPORT_TYPE_PRODUCT_MEASUREMENT_SALES_UNIT_STORE = 'product-measurement-sales-unit-store';
    const IMPORT_TYPE_PRODUCT_QUANTITY = 'product-quantity';
    const IMPORT_TYPE_CMS_TEMPLATE = 'cms-template';
    const IMPORT_TYPE_CMS_PAGE = 'cms-page';
    const IMPORT_TYPE_CMS_BLOCK = 'cms-block';
    const IMPORT_TYPE_CMS_BLOCK_STORE = 'cms-block-store';
    const IMPORT_TYPE_CMS_BLOCK_CATEGORY_POSITION = 'cms-block-category-position';
    const IMPORT_TYPE_CMS_BLOCK_CATEGORY = 'cms-block-category';
    const IMPORT_TYPE_DISCOUNT = 'discount';
    const IMPORT_TYPE_DISCOUNT_STORE = 'discount-store';
    const IMPORT_TYPE_DISCOUNT_AMOUNT = 'discount-amount';
    const IMPORT_TYPE_DISCOUNT_VOUCHER = 'discount-voucher';
    const IMPORT_TYPE_SHIPMENT = 'shipment';
    const IMPORT_TYPE_SHIPMENT_PRICE = 'shipment-price';
    const IMPORT_TYPE_STOCK = 'stock';
    const IMPORT_TYPE_TAX = 'tax';
    const IMPORT_TYPE_ABSTRACT_GIFT_CARD_CONFIGURATION = 'gift-card-abstract-configuration';
    const IMPORT_TYPE_CONCRETE_GIFT_CARD_CONFIGURATION = 'gift-card-concrete-configuration';
    const IMPORT_TYPE_CURRENCY = 'currency';
    const IMPORT_TYPE_STORE = 'store';
    const IMPORT_TYPE_ORDER_SOURCE = 'order-source';
    const IMPORT_TYPE_COMPANY_TYPE = 'company-type';
    const IMPORT_TYPE_COMPANY = 'company';
    const IMPORT_TYPE_COMPANY_BUSINESS_UNIT = 'company-business-unit';
    const IMPORT_TYPE_COMPANY_UNIT_ADDRESS = 'company-unit-address';
    const IMPORT_TYPE_COMPANY_UNIT_ADDRESS_LABEL = 'company-unit-address-label';
    const IMPORT_TYPE_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS = 'company-unit-address-label-to-company-unit-address';
    const IMPORT_TYPE_COMPANY_SUPPLIER = 'company-supplier';

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCurrencyDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('currency.csv', static::IMPORT_TYPE_CURRENCY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getOrderSourceDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('order_source.csv', static::IMPORT_TYPE_ORDER_SOURCE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getStoreDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('', static::IMPORT_TYPE_STORE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getGlossaryDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('glossary.csv', static::IMPORT_TYPE_GLOSSARY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCategoryDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'category.csv', static::IMPORT_TYPE_CATEGORY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCustomerDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('customer.csv', static::IMPORT_TYPE_CUSTOMER);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCategoryTemplateDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('category_template.csv', static::IMPORT_TYPE_CATEGORY_TEMPLATE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getTaxDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('tax.csv', static::IMPORT_TYPE_TAX);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductPriceDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_price.csv', static::IMPORT_TYPE_PRODUCT_PRICE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductStockDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_stock.csv', static::IMPORT_TYPE_PRODUCT_STOCK);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getStockDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('stock.csv', static::IMPORT_TYPE_STOCK);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getShipmentDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('shipment.csv', static::IMPORT_TYPE_SHIPMENT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getShipmentPriceDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('shipment_price.csv', static::IMPORT_TYPE_SHIPMENT_PRICE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getNavigationDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('navigation.csv', static::IMPORT_TYPE_NAVIGATION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getAbstractGiftCardProductConfigurationDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('gift_card_abstract_configuration.csv', static::IMPORT_TYPE_ABSTRACT_GIFT_CARD_CONFIGURATION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getConcreteGiftCardProductConfigurationDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('gift_card_concrete_configuration.csv', static::IMPORT_TYPE_CONCRETE_GIFT_CARD_CONFIGURATION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getNavigationNodeDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('navigation_node.csv', static::IMPORT_TYPE_NAVIGATION_NODE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductAbstractDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'product_abstract.csv', static::IMPORT_TYPE_PRODUCT_ABSTRACT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductAbstractStoreDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'product_abstract_store.csv', static::IMPORT_TYPE_PRODUCT_ABSTRACT_STORE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductConcreteDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'product_concrete.csv', static::IMPORT_TYPE_PRODUCT_CONCRETE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductAttributeKeyDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_attribute_key.csv', static::IMPORT_TYPE_PRODUCT_ATTRIBUTE_KEY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductManagementAttributeDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_management_attribute.csv', static::IMPORT_TYPE_PRODUCT_MANAGEMENT_ATTRIBUTE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductRelationDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_relation.csv', static::IMPORT_TYPE_PRODUCT_RELATION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductReviewDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_review.csv', static::IMPORT_TYPE_PRODUCT_REVIEW);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductLabelDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_label.csv', static::IMPORT_TYPE_PRODUCT_LABEL);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductSetDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'product_set.csv', static::IMPORT_TYPE_PRODUCT_SET);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductSearchAttributeMapDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_search_attribute_map.csv', static::IMPORT_TYPE_PRODUCT_SEARCH_ATTRIBUTE_MAP);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductSearchAttributeDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_search_attribute.csv', static::IMPORT_TYPE_PRODUCT_SEARCH_ATTRIBUTE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductMeasurementUnitDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_measurement_unit.csv', static::IMPORT_TYPE_PRODUCT_MEASUREMENT_UNIT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductMeasurementBaseUnitDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_measurement_base_unit.csv', static::IMPORT_TYPE_PRODUCT_MEASUREMENT_BASE_UNIT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductMeasurementSalesUnitDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_measurement_sales_unit.csv', static::IMPORT_TYPE_PRODUCT_MEASUREMENT_SALES_UNIT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductMeasurementSalesUnitStoreDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_measurement_sales_unit_store.csv', static::IMPORT_TYPE_PRODUCT_MEASUREMENT_SALES_UNIT_STORE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductQuantityDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_quantity.csv', static::IMPORT_TYPE_PRODUCT_QUANTITY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductGroupDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_group.csv', static::IMPORT_TYPE_PRODUCT_GROUP);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductOptionDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_option.csv', static::IMPORT_TYPE_PRODUCT_OPTION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductOptionPriceDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_option_price.csv', static::IMPORT_TYPE_PRODUCT_OPTION_PRICE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductImageDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('icecat_biz_data' . DIRECTORY_SEPARATOR . 'product_image.csv', static::IMPORT_TYPE_PRODUCT_IMAGE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsTemplateDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_template.csv', static::IMPORT_TYPE_CMS_TEMPLATE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsPageDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_page.csv', static::IMPORT_TYPE_CMS_PAGE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsBlockDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_block.csv', static::IMPORT_TYPE_CMS_BLOCK);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsBlockStoreDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_block_store.csv', static::IMPORT_TYPE_CMS_BLOCK_STORE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsBlockCategoryPositionDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_block_category_position.csv', static::IMPORT_TYPE_CMS_BLOCK_CATEGORY_POSITION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCmsBlockCategoryDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('cms_block_category.csv', static::IMPORT_TYPE_CMS_BLOCK_CATEGORY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getDiscountDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('discount.csv', static::IMPORT_TYPE_DISCOUNT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getDiscountStoreDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('discount_store.csv', static::IMPORT_TYPE_DISCOUNT_STORE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getDiscountAmountDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('discount_amount.csv', static::IMPORT_TYPE_DISCOUNT_AMOUNT);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getDiscountVoucherDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('discount_voucher.csv', static::IMPORT_TYPE_DISCOUNT_VOUCHER);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getProductCustomerPermissionDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('product_customer_permission.csv', static::IMPORT_TYPE_PRODUCT_CUSTOMER_PERMISSION);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyTypeDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('company_type.csv', static::IMPORT_TYPE_COMPANY_TYPE);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('company.csv', static::IMPORT_TYPE_COMPANY);
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyBusinessUnitDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration(
            'company_business_unit.csv',
            static::IMPORT_TYPE_COMPANY_BUSINESS_UNIT
        );
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyUnitAddressDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration(
            'company_unit_address.csv',
            static::IMPORT_TYPE_COMPANY_UNIT_ADDRESS
        );
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanyUnitAddressLabelDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration(
            'company_unit_address_label.csv',
            static::IMPORT_TYPE_COMPANY_UNIT_ADDRESS_LABEL
        );
    }

    /**
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    public function getCompanySupplierDataImporterConfiguration()
    {
        return $this->buildImporterConfiguration('company_supplier.csv', static::IMPORT_TYPE_COMPANY_SUPPLIER);
    }

    /**
     * @param string $file
     * @param string $importType
     *
     * @return \Generated\Shared\Transfer\DataImporterConfigurationTransfer
     */
    protected function buildImporterConfiguration($file, $importType)
    {
        $dataImportReaderConfigurationTransfer = new DataImporterReaderConfigurationTransfer();
        $dataImportReaderConfigurationTransfer->setFileName($this->getDataImportRootPath() . $file);

        $dataImporterConfigurationTransfer = new DataImporterConfigurationTransfer();
        $dataImporterConfigurationTransfer
            ->setImportType($importType)
            ->setReaderConfiguration($dataImportReaderConfigurationTransfer);

        return $dataImporterConfigurationTransfer;
    }
}
