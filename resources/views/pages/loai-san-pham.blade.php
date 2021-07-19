@extends('index')
@section('content')

<h3>Loại sản phẩm: {{$tenloai->name}}</h3>
<div class="container">
	<div>
		<ul>
			@foreach($loai as $l)
			<li><a href="{{url('loai-san-pham', $l->id)}}">{{$l->name}}</a></li>
			@endforeach
		</ul>
	</div>
	<div class="row justify-content-center">
		@foreach($sp_theoloai as $sp)
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
				<div class="card" style="height: 100%;">
				  	<div class="box-img">
				  		<img src="img/{{$sp->image}}" class="card-img-top" alt="xa_lach">
				  		@if($sp->price_sale >0)
				  			<button class="btn btn-success" style="position: absolute;top: 20px;right: 0;">Sale</button>
				  		@endif
				  	</div>
				  	<div class="card-body">
				  		<a href="{{url('product', $sp->id)}}">
					    	<h5 class="card-title">{{$sp->name}}</h5>
					    </a>
					    @if($sp->price_sale >0)
					    	<p class="card-text" style="text-decoration: line-through; display: inline-block;">{{number_format($sp->price)}} VNĐ</p>
					    	<p class="card-text" style="display: inline-block;">{{number_format($sp->price_sale)}} VNĐ</p>
					    @else
					    	<p class="card-text">{{number_format($sp->price)}} VNĐ</p>
					    @endif
					    <br><a href="#" class="card-link">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		@endforeach	
		
	</div>
</div>

<h3>Sản phẩm khác</h3>
<div class="container">
	<div class="row justify-content-center">
		@foreach($sp_khac as $sp)
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
				<div class="card" style="height: 100%;">
				  	<div class="box-img">
				  		<img src="img/{{$sp->image}}" class="card-img-top" alt="xa_lach">
				  		@if($sp->price_sale >0)
				  			<button class="btn btn-success" style="position: absolute;top: 20px;right: 0;">Sale</button>
				  		@endif
				  	</div>
				  	<div class="card-body">
				  		<a href="{{url('product', $sp->id)}}">
					    	<h5 class="card-title">{{$sp->name}}</h5>
					    </a>
					    @if($sp->price_sale >0)
					    	<p class="card-text" style="text-decoration: line-through; display: inline-block;">{{number_format($sp->price)}} VNĐ</p>
					    	<p class="card-text" style="display: inline-block;">{{number_format($sp->price_sale)}} VNĐ</p>
					    @else
					    	<p class="card-text">{{number_format($sp->price)}} VNĐ</p>
					    @endif
					    <br><a href="#" class="card-link">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		@endforeach	
		<br><div align="center">{{$sp_khac->links()}}</div>
		
	</div>
</div>

@endsection