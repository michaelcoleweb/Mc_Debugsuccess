<?php
require_once "Mage/Checkout/controllers/OnepageController.php";  
class Mc_Debugsuccess_Checkout_OnepageController extends Mage_Checkout_OnepageController {

	public function successAction() {
    	Mage::getSingleton('core/session')->addNotice('Mc_Debugsuccess is currently active. please disable in live environment');
    	$lastOrderId = Mage::helper('debugsuccess')->getOrderId();
    	$this->loadLayout();
        $this->_initLayoutMessages('checkout/session');
        Mage::dispatchEvent('checkout_onepage_controller_success_action', array('order_ids' => array($lastOrderId)));  
        $this->renderLayout();
    }
}
				