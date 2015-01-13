<?php
class Vijay_Scrollpopup_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_SCR_POPUP_ENABLE   = 'scrollpopup_tab/scrollpopup_setting/scrollpopup_active';
	const XML_PATH_SCR_POPUP_SIDE   = 'scrollpopup_tab/scrollpopup_setting/scrollpopup_side';
	const XML_PATH_SCR_POPUP_CONTENT   = 'scrollpopup_tab/scrollpopup_setting/scrollpopup_content';

	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function scrollpopup_enable() {
		return $this->conf(self::XML_PATH_SCR_POPUP_ENABLE, $store);
	}
	
	public function scrollpopup_side() {
		return $this->conf(self::XML_PATH_SCR_POPUP_SIDE, $store);
	}
	
	public function scrollpopup_content() {
		return $this->conf(self::XML_PATH_SCR_POPUP_CONTENT, $store);
	}
}