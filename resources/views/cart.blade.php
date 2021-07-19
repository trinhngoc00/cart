@if($newCart != null)

	<p>Giỏ hàng: {{$newCart->totalQuanty}}</p>
		@foreach($newCart->products as $item)
		<div class="card">
			<div class="media">
				<img src="img/{{$item['productInfo']->image}}" style="height: 70px;">
				<div class="media-body">
					<h3>Tên: {{$item['productInfo']->name}}</h3>
					<p>Giá: {{number_format($item['productInfo']->price)}} VND x {{$item['quanty']}}</p>
				</div>
			</div>
		</div>
		@endforeach

	<div>Tổng tiền: <span>{{number_format($newCart->totalPrice)}} VND</span> </div>

@endif

