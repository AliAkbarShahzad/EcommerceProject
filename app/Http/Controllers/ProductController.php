<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index()
    {
    	$products= Product::all();
    	return view('product',['products'=>$products]);
    }

    function detail($id)
    {
    	$product=Product::find($id);
    	return view('detail',['product'=>$product]);
    
    }

     function search(Request $req)
    {
    	
   
    	$search=Product::
    	where('name','Like','%'.$req->input('search').'%')
    	->get();
    	return view('search',['searches'=>$search]);
    
    }

    function addToCart(Request $req)
    {
    	if ($req->session()->get('user')) 
    	{

    		$cart=new Cart;
    		$cart->user_id=$req->session()->get('user')['id'];
    		$cart->product_id=$req->product_id;
    		$cart->save();
    		return redirect('product');

    	}
    	else
    	{
    		return redirect('/');
    	}
    	
    }

static function cartItem()
{
	$userId=Session::get('user')['id'];
	return Cart::where('user_id',$userId)->count();
}

function cartlist()
{
	$useId=Session::get('user')['id'];
	$data= DB::table('cart')
	->join('products','cart.product_id','products.id')
	->select('products.*','cart.id as cart_id')
	->where('cart.user_id',$useId)
	->get();
	return view('cartlist',['cartlist'=>$data]);
}

function removeCartItem($id)
{
	Cart::destroy($id);
	return redirect('cartlist');
}

}
