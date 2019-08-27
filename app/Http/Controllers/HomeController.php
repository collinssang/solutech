<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use DB;
use Hash;
use Auth;
use App\Supplier;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.  Yn9shXSPY7lFGz6vMfFEgm2j84b9NiYJyHwMMG0HT9kqGgAV7vXcXk9QbJCq
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tokens(){
        return view('tokens');
    }

    public function getTokens(Request $request){
        $token = Str::random(60);
        $credentials = [
        'email' => $request->input('username'),
        'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {
        Auth::user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return back()->with('token' , $token);

        }

        return back()->with('error','wrong credentials provided'); // json_encode(['error'=>'wrong credentials provided']);

        

    }

    public function orders(){
        return view('orders');
    }

    public function products(){
        return view('products');
    }
    public function product(Request $request){

       $token = Auth::guard('api')->getTokenForRequest();
        if (hash('sha256', $token) == Auth::user()->api_token) {
            $name =$request->input('name');
            $description =$request->input('description');
            $qty =$request->input('qty');
            $product = new Product();

            $product['name'] = $name;
            $product['description'] = $description;
            $product['quantity'] = $qty;
            $save = $product->save();
            if ($save) {
               return back()->with('success','Product saved successfully');
            }else{
                return back()->with('error','Error occured while saving the product');
            }
        }
        return json_encode(['error'=>'Unauthorized']);
    }

    public function suppliers(){
        return view('suppliers');
    }

    public function supplier(Request $request){

         $token = Auth::guard('api')->getTokenForRequest();

        if (hash('sha256', $token) == Auth::user()->api_token) {
            $name =$request->input('name');
            $supplier = new Supplier();

            $supplier['name'] = $name;
           
            $save = $supplier->save();
            
            if ($save) {
               return back()->with('success','supplier saved successfully');
            }else{
                return back()->with('error','Error occured while saving the supplier');
            }
        }
        return json_encode(['error'=>'Unauthorized']);
    }
}
