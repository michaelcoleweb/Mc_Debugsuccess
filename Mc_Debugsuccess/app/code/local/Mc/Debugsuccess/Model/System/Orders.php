<?php
class Mc_Debugsuccess_Model_System_Orders {

    public function toOptionArray() {
        $options = array();
        $orders = Mage::getModel('sales/order')->getCollection()
        ->addFieldToFilter('status', array('in' => array('pending')))
        ->addAttributeToSelect('increment_id')
        ->addAttributeToSelect('customer_email');
        if($orders) {
            foreach($orders as $order) {
                $options[] = array(
                    'value' => $order['increment_id'], 
                    'label' => $order['increment_id'].' - '.$order['customer_email'], 
                );
            }
        }
        return $options;
    }
}