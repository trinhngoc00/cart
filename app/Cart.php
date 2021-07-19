<?php

namespace App;

class Cart{
	public $products = null;
	public $totalPrice = 0;
	public $products = 0;

	public function __construct($cart) {
		if($cart) {
			$this->products = $cart->products;
			$this->totalPrice = $cart->totalPrice;
			$this->totalQuanty = $cart->totalQuanty;
		}

	}

	public function AddCart($product, $id) {
		$newProduct = ['quanty' => 0, 'price'=>$product->price,'productInfo' => $product];
		if($this->products) {
			if(array_key_exists($id, $this->products)){ 
				$newProduct = $this->products[$id];
			}
		}
		$newProduct['quanty']++;

		// if ($product->price_sale != 0) {
		// 	$newProduct['price'] = $newProduct['quanty'] * $product->price_sale;
		// }
		// else {
		// 	$newProduct['price'] = $newProduct['quanty'] * $product->price;
		// }
		
		$newProduct['price'] = $newProduct['quanty'] * $product->price;
		$this->products[$id] = $newProduct;
		$this->totalPrice = $this->totalPrice + $product->price; 
		$this->totalQuanty++;
	}

	// public function reduceByOne($id) {
	// 	$this->products[$id]['quanty']--;
	// }
}

?>