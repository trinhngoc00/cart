@extends('index')
@section('content')
 
@include('layouts.big-img')

<div class="container" id="product">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-12 row_box">
			<div class="card mb-3">
			  	<div class="row no-gutters">
				    <div class="col-sm-6">
				      	<img src="img/{{$product->image}}" class="card-img" alt="ca_hoi">
				    </div>
				    <div class="col-sm-6">
				      	<div class="card-body">
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>

					        <h4 class="card-title">{{$product->name}}</h4>
					        <p class="card-text">
					        	<small>Mã sản phẩm: {{$product->id}}</small>
					        </p>
					        <p class="card-text">
					        	<small>Post on: {{date_format($product->created_at, "Y/m/d")}}</small>
					        </p>
					        @if($product->price_sale > 0)
						    	<h5 class="card-title" style="text-decoration: line-through; display: inline-block;">{{number_format($product->price)}} VNĐ</h5>
						    	<h5 class="card-title" style="display: inline-block;">{{number_format($product->price_sale)}} VNĐ</h5>
						    @else
						    	<h5 class="card-title">{{number_format($product->price)}} VNĐ</h5>
						    @endif

					        <br>
					        <p class="card-text card-text-box">{{$product->description}}</p>
					        <br>
					        <button class="btn btn-success">THÊM VÀO GIỎ HÀNG</button>
				      	</div>
			    	</div>
			  	</div>
			</div>

			@include('layouts.like-share-cmt')

			<h3>Sản phẩm cùng loại</h3>
			<div class="row">
				

				@foreach($sp_tuongtu as $sp)
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
				<div class="col-12" align="center">{{$sp_tuongtu->links()}}</div>
			</div>
			
		</div>

		@include('layouts.advertise')
	</div>
</div>

@endsection