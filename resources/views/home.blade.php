@extends('layouts.app')

@section('content')
@include('user.searchBar')
<div class="container">
  <div class="jumbotron" style="background-color: white">
    <div style="width: 900px;height: 150px">
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
        <i class="fa fa-camera-retro fa-5x" style="color: #7b1fa2"></i> 
        <br>
        <a href="{{URL::to('productResult', array('cameras') )}}"><b>Camera</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-bicycle fa-5x" aria-hidden="true" style="color: #7b1fa2"></i>
        <br>
        <a href="{{URL::to('productResult', array('bikes') )}}"><b>BiKe</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-motorcycle fa-5x" aria-hidden="true" style="color: #7b1fa2"></i>
        <br>
        <a href="{{URL::to('productResult', array('motorcycles') )}}"><b>Motorcycle</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-mobile fa-5x" aria-hidden="true" style="color: #7b1fa2"></i>
        <br>
        <a href="{{URL::to('productResult', array('mobiles') )}}"><b>Mobiles</b></a>
      </div>
    </div>  
    <br>
    <div style="width: 900px;height: 150px">
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
        <i class="fa fa-laptop fa-5x" aria-hidden="true" style="color: #673ab7"></i>
        <br>
        <a href="{{URL::to('productResult', array('laptops') )}}"><b>Laptops</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
        <i class="fa fa-book fa-5x" aria-hidden="true" style="color: #673ab7"></i>
        <br>
        <a href="{{URL::to('productResult', array('books') )}}"><b>Books</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-motorcycle fa-5x" aria-hidden="true" style="color: #673ab7"></i>
        <br>
        <a href="{{URL::to('productResult', array('motocycles') )}}"><b>Motorcycle</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-mobile fa-5x" aria-hidden="true" style="color: #673ab7"></i>
        <br>
        <a href="{{URL::to('productResult', array('mobiles') )}}"><b>Mobiles</b></a>
      </div>
    </div>  
    <br>
    <div style="width: 900px;height: 150px">
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
        <i class="fa fa-laptop fa-5x" aria-hidden="true" style="color: #320b86"></i>
        <br>
        <a href="#"><b>Laptops</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
        <i class="fa fa-book fa-5x" aria-hidden="true" style="color: #320b86"></i>
        <br>
        <a href="#"><b>Books</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-motorcycle fa-5x" aria-hidden="true" style="color: #320b86"></i>
        <br>
        <a href="#"><b>Motorcycle</b></a>
      </div>
      <div style="float: left;width: 150px;height: 150px;padding: 10px">
      <i class="fa fa-mobile fa-5x" aria-hidden="true" style="color: #320b86"></i>
        <br>
        <a href="#"><b>Mobiles</b></a>
      </div>
    </div>  
    <br>
  </div>
</div>
@endsection
