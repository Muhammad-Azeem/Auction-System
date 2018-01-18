@extends('user.userPanel')
@section('section')
<div class="panel panel-heading" style="text-align:center;background-color: #f1f1f1">
	Won
</div>
<div class="panel panel-body">
		@foreach($bids as $p)
		@if(($p->status=="won") && ($p->user_id ==auth::user()->id))
			@foreach($products as $product)
				@if($product->id==$p->p_id)
				<div style="background-color: white; float: left;width: 800px;padding: 20px">
					<img src="../upload/{{$product->pic1}}" alt="asd" style="width: 100px;height: 100px;float: left">
					<span style="margin-left: 60px"><a href="{{ URL::to('productDetail', array($product->id) )}}">{{$product->title}}</a></span><br>
					<span style="margin-left: 60px"><b>${{$product->startPrice}}</b></span>
					<br>
				</div>
				@endif
			@endforeach
		@endif
		@endforeach
</div>
<div class="panel panel-heading" style="text-align:center;background-color: #f1f1f1">
	Bidding
</div>
<div class="panel panel-body">
		@foreach($bids as $p)
		@if(($p->status=="active") && ($p->user_id ==Auth::user()->id))
			@foreach($products as $product)
				@if($product->id==$p->p_id)
				<div style="background-color: white; float: left;width: 800px;padding: 20px">
					<img src="../upload/{{$product->pic1}}" alt="asd" style="width: 100px;height: 100px;float: left">
					<span style="margin-left: 60px"><a href="{{ URL::to('productDetail', array($p->id) )}}">{{$p->title}}</a></span><br>
					<span style="margin-left: 60px"><b>${{$p->startPrice}}</b></span>
					<br>
					<span style="margin-left: 60px"><b>{{$p->startPrice}}Bids</b></span>
					<br>
				</div>
				@endif
			@endforeach
		@endif
		@endforeach
</div>
<div class="panel panel-heading" style="text-align:center;background-color: #f1f1f1">
	Did Not Win
</div>
<div class="panel panel-body">
		@foreach($bids as $p)
		@if($p->status=="lose" && $p->user_id ==Auth::user()->id)
			@foreach($products as $product)
				@if($product->id==$p->p_id)
				<div style="background-color: white; float: left;width: 800px;padding: 20px">
					<img src="../upload/{{$product->pic1}}" alt="asd" style="width: 100px;height: 100px;float: left">
					<span style="margin-left: 60px"><a href="{{ URL::to('productDetail', array($product->id) )}}">{{$product->title}}</a></span><br>
					<span style="margin-left: 60px"><b>${{$product->startPrice}}</b></span>
					<br>
				</div>
				@endif
			@endforeach
		@endif
		@endforeach
</div>
@endsection