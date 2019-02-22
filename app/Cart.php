<?php

namespace App;


class Cart 
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldcart) {
		if($oldCart) {
		
			$this->items = $oldcart->items;
			$this->totalQty = $oldcart->totalQty;
			$this->totalPrice = $oldcart->totalPrice;
		} 
	}

	public function add($items, $id) {
		$storedItems = ['qty', => 0, 'price' => $items->price, 'items' => $items];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItems = $this->items[$id];
			}
		}

		$this->items[$id] = $storedItems;
	}
}
