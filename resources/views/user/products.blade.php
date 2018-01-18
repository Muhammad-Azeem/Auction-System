@extends('layouts.app')

@section('content')
@include('user.searchBar')
<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<h4><b>Category</b></h4><br>
			<a href="{{URL::to('productResult', array('laptops') )}}">Laptops</a><br>
			<a href="{{URL::to('productResult', array('mobiles') )}}">Mobiles</a><br>
			<a href="{{URL::to('productResult', array('books') )}}">Books</a><br>
			<a href="{{URL::to('productResult', array('cars') )}}">Cars</a><br>
			<a href="{{URL::to('productResult', array('bikes') )}}">Bikes</a><br>
		</div>
		<div class="col-lg-9" style="border: 1px;padding: 10px;box-shadow: 3px 3px 3px 3px #999;opacity: 0.9">
			@foreach($products as $p)
			<div style="background-color: white; float: left;width: 800px;padding: 20px">
			<img src="upload/{{$p->pic1}}" alt="asd" style="width: 100px;height: 100px;float: left">
			<span style="margin-left: 60px"><a href="{{ URL::to('productDetail', array($p->id) )}}">{{$p->title}}</a></span><br>
			<span style="margin-left: 60px"><b>${{$p->startPrice}}</b></span>
			<br>
			<span style="margin-left: 60px"><b>{{$p->startPrice}}Bids</b></span>
			<br>
			</div>

			@endforeach
			{{ $products->links() }}
		</div>
	</div>
</div>
@endsection
