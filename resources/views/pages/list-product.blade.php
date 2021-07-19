@extends('index')
@section('content')

<!-- @include('layouts.big-img') -->

<div class="container" id="category">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-12">
			<h4>Sản phẩm</h4>
			<h6>Tìm thấy {{count($all)}} sản phẩm</h6>
		</div>
		<div class="col-sm-6 col-12 thuc-pham" align="right">
			<div class="dropdown" align="right">
				<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Lọc giá từ thấp đến cao
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" style="font-size: 12px;" href="#">Lọc giá từ cao đến thấp</a>
				</div>
				<button class="btn btn-dark">Lọc</button>
			</div>
		</div>
	</div>
	
	<div class="row justify-content-center" id="card_box">
		@foreach($product as $pr)
		<form method="post" action="{{URL::to('save-cart')}}" class="col-lg-3 col-md-4 col-sm-6 col-12 ">
			{{csrf_field()}}
			<div class="card">
				<input type="text" hidden="true" name="id" value="{{$pr->id}}">
				<div class="box-img">
					<a href="{{url('product', $pr->id)}}">
						<img src="img/{{$pr->image}}" class="card-img-top" alt="xa_lach">
					</a>
					@if($pr->price_sale >0)
					<button class="btn btn-success" style="position: absolute;top: 20px;right: 0;">Sale</button>
					@endif
				</div>

				<div class="card-body">
					<a href="{{url('product', $pr->id)}}">
						<h5 class="card-title">{{$pr->name}}</h5>
					</a>

					@if($pr->price_sale >0)
					<p class="card-text" style="text-decoration: line-through; display: inline-block;">{{number_format($pr->price)}} VNĐ</p>
					<p class="card-text" style="display: inline-block;">{{number_format($pr->price_sale)}} VNĐ</p>
					@else
					<p class="card-text">{{number_format($pr->price)}} VNĐ</p>
					@endif

					<div><a type="submit" href="javascript:" class="card-link" onclick="AddCart({{$pr->id}});">Thêm vào giỏ hàng</a></div>

				</div>
			</div>			
		</form>
		@endforeach		
	</div>

	<div align="center">{{$product->links()}}</div>
	<br>

	<h2>Gía thấp đến cao</h2>
	<div class="row justify-content-center" id="card_box">
		@foreach($sortproduct as $sp)
			<div class="card col-lg-3 col-md-4 col-sm-6 col-12">
				<input type="text" hidden="true" name="id" value="{{$sp->id}}">
				<div class="box-img">
					<a href="{{url('product', $sp->id)}}">
						<img src="img/{{$sp->image}}" class="card-img-top" alt="xa_lach">
					</a>
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

					<div><a type="submit" href="javascript:" class="card-link" onclick="AddCart({{$sp->id}});">Thêm vào giỏ hàng</a></div>

				</div>
			</div>
		@endforeach		
	</div>
	<div align="center">{{$sortproduct->links()}}</div>
</div>

@endsection