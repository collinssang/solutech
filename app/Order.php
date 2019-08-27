<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\USer;
use Request;
class Order extends Model
{
    protected $fillable = ['order_number'];

    public static function saveOrder(){
    	return User::find(Auth::user()->id);
    if (Auth::user()){
    	return json_encode(['error'=>Auth::User()->id]);
   
	}else{
		return json_encode(['error'=>'not logged in']);
	}
}
}