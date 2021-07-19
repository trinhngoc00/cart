@extends('index')
@section('content')

<div class="container">
	<h1>Rau xanh</h1>
	<div class="row justify-content-center">
		@foreach($product as $pr)
			<div class="col-lg-4 col-md-4 col-sm-6 col-12 box-veget">
				<div class="card">
					<div class="card-img">
						<img src="img/{{$pr->image}}">
					</div>
					<div class="card-body">
						<h2><a href="#">{{$pr->name}}</a></h2>
						<h5>{{$pr->price}}</h5>
						<p><a href="#">Thêm vào giỏ hàng</a></p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>


@endsection