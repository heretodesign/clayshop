<?php

namespace App;

class Cart 
{
	public $items;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldcart) {
		if($oldCart) {
		
		$this->items = $oldcart->items;
		$this->totalQty = $oldcart->totalQty;
		$this->totalPrice = $oldcart->totalPrice;
	}
	}
}
