<?php namespace CommanderZiltoid\JetPayTransactionRedirect;


class RedirectResponse {
	public $transactionIdentifier;
	public $status;
	public $errors;
	
	public function __construct() {
		$this->errors = [];
	}
}
