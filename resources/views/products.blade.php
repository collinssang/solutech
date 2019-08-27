@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<form method="post" action="{{url('/products')}}">
					{{csrf_field()}}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="product name" class="form-control" />
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" name="description" placeholder="product description" class="form-control" />
					</div>
					<div class="form-group">
						<label for="qty">Qty</label>
						<input type="number" name="qty" placeholder="product quanty" class="form-control" />
					</div>
					<div class="form-group">
						<label for="api_token">Api_token</label>
						<input type="text" name="api_token" placeholder="Your Api Key" class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Submt" class="btn btn-primary" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection