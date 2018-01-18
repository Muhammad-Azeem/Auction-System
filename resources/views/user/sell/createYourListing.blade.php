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
	  	<span style="margin-left: 130px;font-size: 12;">1. TELL US WHAT YOU'RE SELLING </span>
	  	<span style="margin-left: 70px;font-size: 12;font-weight: bold;">2. CREATE YOUR LISTING</span>
	  	<span style="margin-left: 70px;font-size: 12;">3. REVIEW YOUR LISTING</span>
	  	<br><br><br>
	  	<span style="font-size: 23px;font-weight: bold;">Create your listing</span>
	  	<hr>
        <form action="dataStored" method="post" enctype="multipart/form-data">
            <div class="panel panel-heading" style="background-color: #EAEAEA">
                <b style="font-weight: bold;font-size: 20px;">Describe Your Item</b>
            </div>
            <div class="panel panel-body">
                <label style="font-size: 18px;">*Title</label>
                <input type="text" name="title" value="{{session('title')}}" class="form-control" style="width: 500px"> 
                <label style="font-size: 18px;">*Condtion</label>
                @if ($errors->has('condition'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('condition') }}</strong>
                    </span>
                @endif
                <select name="condition" class="form-control" style="width: 500px">
                    <option value="">---</option>
                    <option name='new' value="new">New</option>
                    <option value="used">Used</option>
                    <option value="sellerRefurbished">Seller Refurbished</option>
                    <option value="manufacturerRefurbished">Manufacturer Refurbished</option>
                    <option value="notWorking">Some Parts Not working</option>
                </select>
                <label style="font-size: 18px;">Condtion Description</label>
                <br>
                <span>Highlight any defects, missing parts, scratches or wear and tear also described in your item description. Use this field only for your item's condition to comply with our selling practices policy.</span>
                <textarea name="ConditionDescription" rows="5" col="10" class="form-control" style="width: 500px" value="{{ old('ConditionDescription') }}"  
                ></textarea>   
                <label style="font-size: 18px;">*Upload Photos(at least 3)</label>
                <input type="file" name="pic1" class="form-control" style="width: 500px">       
                @if ($errors->has('pic1'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('pic1') }}</strong>
                    </span>
                @endif                
                <input type="file" name="pic2" class="form-control" style="width: 500px">       
                @if ($errors->has('pic2'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('pic2') }}</strong>
                    </span>
                @endif                

                <input type="file" name="pic3" class="form-control" style="width: 500px">       
                @if ($errors->has('pic3'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('pic3') }}</strong>
                    </span>
                @endif                

                <label style="font-size: 18px;">*Item Description</label>
                @if ($errors->has('itemDescription'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('itemDescription') }}</strong>
                    </span>
                @endif                
                <textarea name="itemDescription"  rows="5" col="10" class="form-control" style="width: 500px"></textarea>   
            </div>
            <div class="panel panel-heading" style="background-color: #EAEAEA">
               <b style="font-weight: bold;font-size: 20px;">Choose Price</b>
               <div class="panel panel-body">
                    <label>*Starting Price</label>
                    @if ($errors->has('startingPrice'))
                        <span class="help-block" style="color: red">
                            <strong>{{ $errors->first('startingPrice') }}</strong>
                        </span>
                    @endif                
                    <input type="number" name="startingPrice" class="form-control" style="width: 200px;">
                    <label>Buy It Now Price</label>
                    <input type="number" name="buyItNow" class="form-control" style="width: 200px;">
                    <label>*Duration</label>
                    @if ($errors->has('duration'))
                        <span class="help-block" style="color: red">
                            <strong>{{ $errors->first('duration') }}</strong>
                        </span>
                    @endif               
                    <select name="duration" class="form-control" style="width: 200px;">
                        <option value="">----</option>}
                        <option value="1">1 days</option>}
                        <option value="3">3 days</option>}
                        <option value="7">7 days</option>}
                        
                    </select>
               </div>
            </div>
            <div class="panel panel-heading" style="background-color: #EAEAEA">
               <b style="font-weight: bold;font-size: 20px;">How You will Pay</b>
               <div class="panel panel-body">
                    <label>PayPal</label>
                    <input type="radio" name="cash" " style="width: 200px;" disabled>
                    <label>*Cash On Delivery</label>

                    <input type="radio" name="cash" style="width: 200px;" value="Cash On Delivery"> 
                    @if ($errors->has('cash'))
                        <span class="help-block" style="color: red">
                            <strong>{{ $errors->first('cash') }}</strong>
                        </span>
                    @endif                

               </div>
            </div>
            <button type="submit" class="btn btn-default">Continue</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">  
	    </form>
    </div>
</body>
</html>