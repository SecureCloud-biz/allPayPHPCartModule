<?php
require_once(Mage::getBaseDir('app') . '/code/local/AllPay/Foundation/AllPay_ProcessingController.php');

class AllPay_Credit6_ProcessingController extends AllPay_ProcessingController {
    protected $paymentName = 'credit6';
    protected $newOrderStatus = Mage_Sales_Model_Order::STATE_PENDING_PAYMENT;
}