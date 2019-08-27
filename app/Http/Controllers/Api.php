<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Hash;
use App\User;
use DB;

class Api extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth');
    }
    
	
    public function postOrders(Request $requests){
    	return 1;
    	return Order::saveOrder();
    	$token = $requests->input('api_token');
    	return Auth::user()->api_token;
    	$validate_token = Hash::check($token, Auth::user()->api_token);
    	if (!$validate_token) {
    		return back()->with('error','Token Mismatch');
    	}
    	$order_id = $requests->input('order_no');
    	$orderNo = new Order;
    	$orderNo['order_number'] = $order_id; 		
    	$save = $orderNo->save();
    	if ($save) {
    		return back()->with('success','Success order number saved');
    	}else{
    		return back()->with('error','Error occured while saving order');
    	}
    }

    public function products(Request $request){
    	return Auth::user();
    }
}
