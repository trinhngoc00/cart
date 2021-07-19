<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light  " >
			<div style="display: flex;"><a class="" href="#">
				<img src="img/logo.png">
			</a></div>
			
			<div class="two-icon">
				<a class="nav-link icon" href="#"><i class="fa fa-search"></i></a>
				<a href="#" class="nav-link icon"><span class="fa fa-cart-arrow-down"></span><span class="badge badge-dark">3</span></a>
			</div>

			<div style=""><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				MENU
			</button></div>

			<div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="{{url('home')}}">Trang chủ<span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item li-parent">
						<a class="nav-link" href="{{url('list-product')}}">sản phẩm</a>
						<div class="wrapper-submenu">
							<ul>
								@foreach($loai_sanpham as $loai)
								<li class="nav-item">
									<a href="{{url('loai-san-pham', $loai->id)}}" class="nav-link">{{$loai->name}}</a>
								</li>
								@endforeach
							</ul>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{url('meat')}}">thịt tươi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('product/1')}}">rau sạch</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('product/2')}}">quả ngọt</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('handbook')}}">cẩm nang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('vegetable')}}">thực phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('shopping-cart')}}">thanh toán</a>
					</li>
					<li class="nav-item nav-item-icon" id="icon-search">
						<a class="nav-link" type="button"><i class="fa fa-search"></i></a>
					</li>
					<li class="nav-item nav-item-icon li-parent">
						<a href="{{url('shopping-cart')}}" class="nav-link"><span class="fa fa-cart-arrow-down"></span><span class="badge badge-dark"></span></a>

						<div class="wrapper-submenu " style="width: 300px; right: 0;">

							<div id="change-item-cart">
								<div>Tổng tiền: <span>0 VND</span> </div>
							</div>
						</div>
						

					</li>
				</ul>

				<div class="form-search">
					<form method="post" action="{{url('search')}}">
						{{csrf_field()}}
						<input type="text" name="keyword" placeholder="Search">
						<button type="submit" class=""><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</nav>
		<div class="row">
			<nav>
				<ul class="list-view">
					<li><a href="{{url('home')}}">home</a></li>
					<li><a href="{{url('list-product')}}">list-product</a></li>
					<li><a href="{{url('meat')}}">meat</a></li>
					<li><a href="{{url('product/1')}}">product/1</a></li>
					<li><a href="{{url('product/2')}}">product/2</a></li>
					<li><a href="{{url('handbook')}}">handbook</a></li>
					<li><a href="{{url('vegetable')}}">vegetable</a></li>
					<li><a href="{{url('shopping-cart')}}">shopping-cart</a></li>
					<li><a href="{{url('loai-san-pham/3')}}">loai-san-pham/3</a></li>
				</ul>
			</nav>
		</div>
		
	</div>
</header>