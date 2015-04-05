<?php
class Mc_Debugsuccess_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success {
	
	public function getOrderId() {
    	return Mage::helper('debugsuccess')->getOrderId();
    }
}
			