@extends('layouts.app')
<style type="text/css">
ul {
list-style-type: none;;
}
ul li{
float: left;
width: 150px;
background: #cce5ff;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <div class="row">
                <div id="app">
                    <navbar></navbar>
                </div>
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">

                    <div class="row">
                        <div id="app">
                            <navbar></navbar>
                        </div>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
