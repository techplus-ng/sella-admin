<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class ReportController extends Controller
{
    /*
    |-----------------------------------------
    | AUTHENTICATION
    |-----------------------------------------
    */
    public function __construct(){
    	// body
    	$this->middleware('auth');
    }
    
    /*
    |-----------------------------------------
    | SHOW VIEW INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view('reports.index');
    }
    
    /*
    |-----------------------------------------
    | CREATE or STORE DATA 
    |-----------------------------------------
    */
    public function clusters(Request $request){
    	// body
    	return view('reports.clusters');
    }
    
    /*
    |-----------------------------------------
    | FETCH DATA 
    |-----------------------------------------
    */
    public function orders(Request $request){
    	// body
    	return view('reports.orders');
    }
    
    /*
    |-----------------------------------------
    | FETCH ALL DATA 
    |-----------------------------------------
    */
    public function transactions(Request $request){
    	// body

    	$orders = DB::select("select * from `product_orders`");

    	$order_box = [];
    	foreach ($orders as $key => $value) {
    		# code...
    		$product_id = $value->product_id;
    		$order_id = $value->order_id;
    		$value->product = DB::select("select * from `products` where(id = $product_id) ");
    		$value->order = DB::select("select * from `orders` where(id = $order_id) ");

    		foreach ($value->order as $okey => $ovalue) {
    			# code...
    			$user_id = $ovalue->user_id;
    			$payment_id = $ovalue->payment_id;
    			
    			$value->customer = DB::select("select * from `users` where(id = $user_id) ");
    			$value->payment = DB::select("select * from `payments` where(id = $payment_id) ");
    		}

    		array_push($order_box, $value);
    	}

    	return view('reports.transactions', compact('order_box'));
    }
    
    /*
    |-----------------------------------------
    | MODIFY or UPDATE DATA 
    |-----------------------------------------
    */
    public function updateOne(Request $request){
    	// body
    }
    
    /*
    |-----------------------------------------
    | DELETE DATA
    |-----------------------------------------
    */
    public function deleteOne(Request $request){
    	// body
    }
    
    /*
    |-----------------------------------------
    | DESTROY DATA
    |-----------------------------------------
    */
    public function destroyOne(Request $request){
    	// body
    }
    
    
}
