@extends('layouts.app')
@section('content')

        <!-- Styles -->
        <style>
            html, body {
                padding: 45px;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            ul {
				list-style-type: none;;
				}
			ul li{
				float: left;
				width: 150px;
				background: #cce5ff;
				    }
        </style>

    {{--<div class="flex-center position-ref full-height">--}}

    <div id="app">
<p>Login and use your authentication credentials to generate the api tokens to use in posting and data fetching of the below links</p>
        <div class="container">

            <div class="row">
            	<div id="app">
				    <navbar></navbar>
				</div>
            </div>
        </div>


    </div>
@endsection