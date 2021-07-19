<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProduct;
use App\Handbook;
use App\ShoppingCart;
use App\Vegetable;
use App\ProductType;
// use App\Cart;
// use Session;
class PagesController extends Controller
{
	public function getHome() {
		$product = ListProduct::all();
		$newestProduct = ListProduct::orderBy('created_at', 'desc')->get();
		$typePr = ProductType::where('id','>','0')->take(3)->get();
		$handbook = Handbook::where('id','>','0')->take(3)->get();
		return view('pages.home', compact('product', 'handbook', 'newestProduct', 'typePr'));
	}
	public function getShoppingcart() {
		$product = ShoppingCart::all();
		return view('pages.shopping-cart');
	}
	public function getListproduct() {
		$all = ListProduct::all();
		$product = ListProduct::where('id','>','0')->paginate(8);
		
		$sortproduct = ListProduct::orderBy('price', 'asc')->paginate(8);
		return view('pages.list-product', compact('product', 'all', 'sortproduct'));
	}
	public function getVegetable() {
		$product = Vegetable::where('id','>','0')->paginate(4);
		return view('pages.vegetable', ['product' => $product]);
	}

	public function getMeat() {
		$all = ListProduct::where('type',"meat")->get();
		$product = ListProduct::where('type',"meat")->paginate(4);
		// dd(count($product));
		return view('pages.meat', ['product' => $product], ['all' => $all]);
	}
	public function getLoaiSp($type) {
		$sp_theoloai = ListProduct::where('id_type', $type)->get();
		$sp_khac = ListProduct::where('id_type', '<>', $type)->paginate(8);
		$loai = ProductType::all();
		$tenloai = ProductType::where('id', $type)->first();
		return view('pages.loai-san-pham', compact('sp_theoloai', 'sp_khac', 'loai', 'tenloai'));
	}

	public function getProduct($id){
		$product = ListProduct::find($id);
		$sp_tuongtu = ListProduct::where('id_type', $product->id_type)->paginate(4);
		return view('pages.product', ['product' => $product], ['sp_tuongtu' => $sp_tuongtu]);
	}
	public function getHandbook(){
		$handbook = Handbook::where('id','>','0')->paginate(5);
		return view('pages.handbook',['handbook' => $handbook]);
	}
	public function postSearch(Request $request){
		$keyword = $request->keyword;
		$ketqua = ListProduct::where('name','like',"%$keyword%")->orWhere('price', $keyword)->paginate(4);
		return view('pages.search', ['keyword' => $keyword, 'ketqua' => $ketqua]);
	}
	public function postLogin(Request $request){
		$username = $request->username;
		return view('pages.home',['username' => $username]);
	}
	public function postPrice(Request $req) {
		$sortproduct = ListProduct::orderBy('price', 'asc')->paginate(8);
		return view('pages.list-product', compact('sortproduct'));
	}
	// public function getAddtoCart(Request $req, $id) {
	// 	$product = ListProduct::find($id);
	// 	$oldCart = Session('cart') ? Session::get('cart') : null;
	// 	//dd(session('cart'));
	// 	$cart = new Cart($oldCart);
	// 	$cart->AddCart($product, $id);
	// 	$req->Session()->put('cart',$cart);
	// 	//dd(session('cart'));
	// 	return redirect()->back();
	// }
}
