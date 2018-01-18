@extends('user.userPanel')
@section('section')

<div class="panel panel-heading" style="text-align:center;background-color: #f1f1f1">
	Unsold
</div>
<div class="panel panel-body">
		@foreach($data as $p)
		@if($p->status=="unsold")
		<div style="background-color: white; float: left;width: 800px;padding: 20px">
			<img src="../upload/{{$p->pic1}}" alt="asd" style="width: 100px;height: 100px;float: left">
			<span style="margin-left: 60px"><a href="{{ URL::to('productDetail', array($p->id) )}}">{{$p->title}}</a></span><br>
			<span style="margin-left: 60px"><b>${{$p->startPrice}}</b></span>
			<br>
			<span style="margin-left: 60px"><b>{{$p->startPrice}}Bids</b></span>
			<br>
		</div>
		@endif
		@endforeach
</div>
@endsection