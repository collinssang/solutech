@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


            
                <div class="card-header">Generate Tokens</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                     @elseif (session('token'))
                     Below is your valid token. Copy it and use it while accessing the APIs
                    <div class="alert alert-success form-group" role="alert">
                        <input type="text" value="{{ session('token') }}" name="valid_token" class="form-control">
                    </div>
                    @endif

                    <form class="form" method="post" action="getTokens">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">Enter your username: </label>
                            <input type="text" name="username" class="form-control" placeholder="enter your login username"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Enter your password: </label>
                            <input type="password" name="password" class="form-control" placeholder="enter your login password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Generate" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection