<html>	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tell Us What You are selling</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

</head>
<body style="background-color: white">
  <div class="jumbotron" style="background-color: white">
  	<span style="font-size: 25px">Logo</span>
  	<span style="margin-left: 130px;font-size: 12;font-weight: bold;">1. TELL US WHAT YOU'RE SELLING </span>
  	<span style="margin-left: 70px;font-size: 12;">2. CREATE YOUR LISTING</span>
  	<span style="margin-left: 70px;font-size: 12;">3. REVIEW YOUR LISTING</span>
  	<br><br><br>
  	<span style="font-size: 25px;font-weight: bold;">Tell us what you're selling</span>
  	<hr>
  	<div class="panel panel-default">
  	  <div class="panel-heading" style="background-color: lightgrey;">
  	    <h3 class="panel-title" style="font-weight: bold;">Start a new listing</h3>
  	  </div>
  	  <div class="panel-body">
  	  	<span>Give us a title for your listing or enter a UPC, ISBN, VIN or Part Number</span>
		  <div class="popup" onclick="myFunction()">?
		    <span class="popuptext" id="myPopup">You can enter a UPC (Universal Product Code), ISBN (International Standard Book Number), or VIN (Vehicle Identification Number).</span>
		  </div>
  	 	  <br>
  	 	  <form action="getcategory" method="get">
        @if ($errors->has('title'))
            <span class="help-block" style="color: red">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif                

	  	 	  <input type="search" name="title" placeholder="Enter Title" class="form-control" style="width: 400px ; float: left;" >

	  	 	  	<button type="submit" class="btn btn-default">Get Started</button>
	  	  	  <br>
	  	  	  <span>For example: new toy story dvd,laptop or moblie</span>
  	  	 	  <br>
	  	 	  	<button type="submit" class="btn btn-default">	  	 	  	Search Category
            </button>
  	 	     <input type="hidden" name="_token" value="{{ csrf_token() }}">  

        </form>
  	  </div>
  	  <!-- panel body end -->
  	</div>
  		<!-- panel end -->
  </div>
  <!-- jumbotron end -->

<script src="../public/js/javascript.js"></script>
s
	  <!-- javascript for bootstrap   -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>