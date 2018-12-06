<?php namespace CommanderZiltoid\JetPayTransactionRedirect;


class RedirectRequest {
	public $clientKey;
	public $transactionIdentifier;
	public $collectionMode;
	public $amount;
	public $billing;
	public $csiUserId;
	public $notes;
	public $lineItems;
	public $urlSilentPost;
	public $urlReturnPost;
	public $allowedPaymentMethod;
	
	public function __construct() {
		$this->billing = [];
		$this->lineItems = [];
	}

	public function addLineItem($amount, $paymentType, $identifiers) {
		$item = new TransactionLineItem();
		$item->amount = $amount;
		$item->paymentType = $paymentType;
		$item->identifiers = $identifiers;
		array_push($this->lineItems, $item);
	}
}
