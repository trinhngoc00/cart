@extends('index')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div align="center">
		<div id="brand-name">
			<span>&nbsp; - Fresh Food - &nbsp;</span>
		</div>
	</div>

	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/FreshFood.png" class="d-block w-100" alt="brand_img1">
		</div>
		<div class="carousel-item">
			<img src="img/FreshFood.png" class="d-block w-100" alt="brand_img2">
		</div>
		<div class="carousel-item">
			<img src="img/FreshFood.png" class="d-block w-100" alt="brand_img3">
		</div>
	</div>

	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="container">
	<form method="post" >
		{{csrf_field()}}
		Username: <input type="text" name="username" value=""/> <br/>
		password: <input type="password" name="password" value=""/><br/>
		<input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>

		<?php

    // Nếu người dùng click vào button Gửi Dữ Liệu

    // Vì button đó tên là form_click nên đó cũng là

    // tên của key nằm trong biến $_POST

		if (isset($_POST['form_click'])){
			echo 'Tên đăng nhập là: ' . $_POST['username'];
			echo '<br/>';
			echo 'Mật khẩu là: ' . $_POST['password'];
		}

		?>

	</form>
</div>

<div class="container menu">
	<div class="row">
		@foreach($typePr as $type)
		<div class="col-md-4 col-12 box-menu" align="center">
			<div class="box-border">
				<div class="text-in">
					{{$type->name}}
				</div>
			</div>
			<img src="img/{{$type->image}}">
		</div>
		@endforeach
	</div>
</div>

<div id="new_good">
	<h3 align="center">thực phẩm mới nhất</h3>
	<div align="center" style="margin-bottom: 30px;"><img src="img/leaf.png"></div>
	
	<div class="container" align="center">
		<div class="owl-carousel owl-theme owl-loaded">
			<div class="owl-stage-outer">
				<div class="owl-stage">
					@foreach($newestProduct as $pr)
					<div class="owl-item">
						<a href="{{url('product', $pr->id)}}">
							<div class="card">
								<div class="box-img">
									<a href="{{url('product', $pr->id)}}">
										<img src="img/{{$pr->image}}" class="card-img-top" alt="xa_lach">
									</a>
								</div>

								<div class="card-body">
									<a class="card-title" href="{{url('product', $pr->id)}}">
										<h5 class="card-title">{{$pr->name}}</h5>
									</a>
									<a class="card-text" href="{{url('product', $pr->id)}}">
										<p class="card-text">{{number_format($pr->price)}} VNĐ</p>
									</a>
									<a href="javascript:" class="card-link">Thêm vào giỏ hàng</a>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" id="camNang" align="center">
	<strong class="title">cẩm nang nấu ăn</strong>
	<div align="center" class="bowl-center"><img src="img/cam_nang.png"></div>

	<div class="row">
		@foreach($handbook as $hb)
		<div class="col-lg-4 col-sm-6 col-12" align="center">
			<img src="img/{{$hb->image}}">
			<strong>{{$hb->title}}</strong>
			<p>{{$hb->short_description}} [...]</p>
		</div>
		@endforeach
	</div>
</div>


@endsection