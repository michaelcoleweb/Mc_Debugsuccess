<?php
class Mc_Debugsuccess_Helper_Data extends Mage_Core_Helper_Abstract {

	const ALLOW_SPECIFIC = 'dev/checkout/allowspecific'; 
	const ORDER_ID = 'dev/checkout/order_id'; 

	public function getOrderId(){
		if(Mage::getStoreConfig(self::ALLOW_SPECIFIC)) {
			return Mage::getStoreConfig(self::ORDER_ID);
		} else {
			return Mage::getModel("sales/order")
			->getCollection()
			->getLastItem()
			->getIncrementId();
		}
	}
}
	 