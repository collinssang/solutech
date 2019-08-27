@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	 @if (session('error'))
            <div class="alert alert-success" role="alert">
                {{ session('error') }}
            </div>
         @elseif (session('success'))
        <div class="alert alert-success form-group" role="alert">
           {{ session('success') }}
        </div>
        @endif

    	<div class="links">
    		<button class="btn btn-primary new" id="new" v-on:click="newOrder('new', 'form_orders', 'orders')">New Order</button>
    		<button class="btn btn-success view"  v-on:click="Orders('view', 'form_orders', 'orders')">View Orders</button>
    	</div>
        <div class="col-md-8 form_orders" id="form_orders" style="display: none;">
            <div class="card">
            	<orders></orders>
            </div>
        </div>

        <div class="orders col-md-8 " id="orders" style="display: none;">
        	<div class="card">
        	<postedOrders></postedOrders>
        	</div>
        </div>
    </div>
</div>

@endsection