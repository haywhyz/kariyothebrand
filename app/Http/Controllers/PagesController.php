<?php 
	
namespace App\Http\Controllers;
use App\Product;


class PagesController extends Controller{

	
	public function getIndex() {
		$new=Product::all();
		return view('pages.index',compact('new'));
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function getShop(){
		return view('pages.shop');
	}

	public function getBlog(){
		return view('pages.Blog');
	}

	public function getShopcart(){
		return view('pages.shop-cart');
	}

	public function getCheckout(){
		return view('pages.checkout');
	}

	public function getProductdetails(){
		return view('pages.product-details');
	}

	public function getSignin(){
		return view('pages.sign-in');
	}

	public function getSignup(){
		return view('pages.sign-up');
	}

	public function getWomen(){
		$women=Product::all();
		return view('pages.women',compact('women'));
	}

}	
 ?>