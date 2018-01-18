<html>	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tell Us What You are selling</title>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<style>
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
</style>
	
</style>
<body style="background-color: white">
    <div class="jumbotron" style="background-color: white">
	  	<span style="font-size: 25px">Logo</span>
	  	<span style="margin-left: 130px;font-size: 12;font-weight: bold;">1. TELL US WHAT YOU'RE SELLING </span>
	  	<span style="margin-left: 70px;font-size: 12;">2. CREATE YOUR LISTING</span>
	  	<span style="margin-left: 70px;font-size: 12;">3. REVIEW YOUR LISTING</span>
	  	<br><br><br>
	  	<span style="font-size: 23px;font-weight: bold;">Tell us what you're selling: 	Select Category</span>
	  	<hr>
		<span>Title</span>
		<div class="popup" style="margin-left: 360" onclick="myFunction()"> 
		<span >?</span>
		<span class="popuptext" id="myPopup">You can enter a UPC (Universal Product Code), ISBN (International Standard Book Number), or VIN (Vehicle Identification Number).</span>
		</div>
		<br>
		<form action="{{route('GetStarted')}}" method="post">
		<input type="search" name="title" placeholder="Enter Title" class="form-control" value="{{ session('title') }}" style="width: 400px ; float: left;" >
		 	<button type="submit" class="btn btn-default">Find Category</button>
		</a>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">  

		</form>
		<br>
	</div>
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'Search categories')" >Search categories</button>
	  <button class="tablinks" onclick="openCity(event, 'Browse categories')" id="defaultOpen">Browse categories</button>
	</div>
	
	<div class="panel">
		<div id="Search categories" class="tabcontent">
			<span>Buyers will see your listing in the category that you select.</span>
			<div class="panel" style="border: solid #888 1px;padding: 10px">
<!-- 				@foreach($product as $data)
					@if(str_contains(session('title'),$data->type))				
						@if(str_contains(session('title'),'laptop'))
						<span><b>Category: Laptop</b></span>
						<br>
							<input type="checkbox" name="laptop" value="{{session('title')}}">
							<label>laptop</label>
						@elseif(str_contains(session('title'),'mobile'))
							<span><b>Category: Mobiles</b></span>
							<br>						
							<input type="checkbox" name="iphone" value="laptop">
							<label>iphone</label>
							<br>						
							<input type="checkbox" name="samsung" value="laptop">
							<label>Samsung</label>
							<br>						
							<input type="checkbox" name="qmobile" value="	laptop">
							<label>QMobile</label>
							<br>
							<input type="checkbox" name="other" value="laptop">
							<label>Others</label>
						@endif

					@endif
				@endforeach
 -->			</div>
		</div>
		<form action="{{route('listing')}}" method="post">
<!-- 			<div id="Browse categories" class="tabcontent" style="padding-left: 60px">
			<div class="checkbox">
			  <label>
			    <input type="checkbox" name="laptop" value="laptops">
			    <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
			    Laptop
			  </label>
			  <br>
			  <label>
			    <input type="checkbox" name="mobile" value="mobiles">
			    <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
			    Mobile
			  </label>
			  <br>
			  <label>
			    <input type="checkbox" name="book" value="books">
			    <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
			    Book
			  </label>
			  <br>
			  <label>
			    <input type="checkbox" name="bike" value="bikes">
			    <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
			    Bike
			  </label>
			  <br>
			  <label>
			    <input type="checkbox" name="car" value="cars">
			    <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
			    Car
			  </label>
			  <br>
			</div>

			</div>
 -->
		  	   <select name="productType" class="form-control">
		  	   		<option value=" ">Select Product Type</option>
		  	   		<option value="mobiles">Mobile</option>
		  	   		<option value="laptops">Laptop</option>
		  	   		<option value="books">Book</option>
		  	   		<option value="bikes">Bike</option>
		  	   		<option value="cars">Car</option>
		  	   </select>
		  	   <button type="submite" class="btn btn-default">Continue</button>
		  	 <input type="hidden" name="_token" value="{{ csrf_token() }}">    
		 <!-- </div> -->
		</form>
<script src="../public/js/javascript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.js"></script>
</div>
</body>
</html>