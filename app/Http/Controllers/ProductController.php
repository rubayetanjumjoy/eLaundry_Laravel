<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\product;
use App\cart;
use App\order;
 
class ProductController extends Controller
{
    
    function index()
    {
        $data= product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data=product::find($id);
         
        return view('details',['product'=>$data]);
    }
     function addToCart(Request $req)
    {
        if($req->session()->has('user'))
       {
           $cart= new Cart;
           $data=  $req->session()->get('user');
         $cart->user_id= $data->id;
          $cart->product_id=$req->product_id;
         $cart->save();
         return redirect ('/product');
         
           
       
        
       }
       else 
       {
           return redirect('/master');
       }
    }

    
    static function cartItem()
    { 
        $data= session()->get('user');
          $userId=$data->id;
            return Cart:: where ('user_id',$userId)->count();
    }
    
    function cartlist()
    {
        $data=   session()->get('user');
          $userId=$data->id;

        $products= DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }

    function removecartitem($id)
    {

        Cart:: destroy($id);
        return redirect('/cartlist');
    }
    function ordernow()
    
    {
        $data=   session()->get('user');
          $userId=$data->id;

        $total= DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        
         return view('ordernow',['total1'=>$total]);
    }

    function orderplace(Request $req)
    {   $data=   session()->get('user');
        $userId=$data->id;
       $allCart= Cart:: where('user_id',$userId)->get();
       foreach($allCart as $cart)
       {
        $order=new order();
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->address=$req->address;
        $order->save();
        Cart:: where('user_id',$userId)->delete();
        

       }
        
       return redirect('/product');
    }


    function myorders()
    {
        $data=   session()->get('user');
          $userId=$data->id;

        $orders= DB::table('orders')->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId) 
        ->get();
        return view('/myorders',['orders'=>$orders]);
    }

}
