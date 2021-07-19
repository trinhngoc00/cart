<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProduct;
use Session;
use App\Cart;

class CartController extends Controller
{
	// public function save_cart(Request $request){
	// 	$product = ListProduct::where('id', $request->id)->first();
	// 	$data['id'] = $product->id;
	// 	$data['name'] = $product->name;
	// 	$data['price'] = $product->price;
	// 	$data['image'] = $product->image;
	// 	Cart::add($data);
	// 	return Redirect::to('shopping-cart');
	//  }

	public function AddCart(Request $req, $id){   

		// $product = ListProduct::where('id',$id)->first();
		// if($product != null) {
		// 	$oldCart = Session::has('Cart') ? Session::get('Cart') : null;
		// 	$newCart = new Cart($oldCart);

		// 	$newCart->AddCart($product, $product->id);
		// 	$req->session()->put('Cart', $newCart);
		// }
		return view('cart', compact('newCart'));
	}

	// public function DelCart($id) {
	// 	$oldCart = Session::has('cart') ? Session::get('cart'):null;
	// 	$cart = new Cart($oldCart);
	// }


}
