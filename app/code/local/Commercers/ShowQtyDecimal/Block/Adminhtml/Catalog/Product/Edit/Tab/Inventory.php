<?php
/**
 * Created by PhpStorm.
 * User: LEHUNG
 */

class Commercers_ShowQtyDecimal_Block_Adminhtml_Catalog_Product_Edit_Tab_Inventory extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Inventory
{
    const XML_PATH_ENABLE = 'commercers_showQtyDecimal/general/enabled';

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('catalog/product/tab/inventory-custom.phtml');
    }

    protected function isShowQtyDecimal() {
        return Mage::getStoreConfig(self::XML_PATH_ENABLE);
    }
}
