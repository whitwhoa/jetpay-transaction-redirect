<?php namespace CommanderZiltoid\JetPayTransactionRedirect;


class TransactionLineItem {
	public $identifiers;
	public $amount;
	public $paymentType;

	public function __construct() {
		$this->identifiers = [];
	}

	public function __constructOverload($amount, $paymentType, $identifiers) {
		$obj = new TransactionLineItem();
		$obj->amount = $amount;
		$obj->paymentType = $paymentType;
		$obj->identifiers = $identifiers;
		return $obj;
	}
}
