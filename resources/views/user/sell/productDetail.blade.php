@extends('layouts.app')

@section('content')
@include('user.searchBar')
<div class="container">
 	<div class="jumbotron" style="background-color: white">
 		<div class="row">
	 		<div class="col-lg-3" style="width: 300px;height: 400px;">
	 		<img src="../upload\{{$data->pic1}}" alt="fileName is incorrect" style="width: 250px;height: 300px;" style="float:left"> 			 		  <img src="../upload\{{$data->pic2}}" aalt="fileName is incorrect" style="width: 60px;height: 50px;">
	 		  <img src="../upload\{{$data->pic3}}" aalt="fileName is incorrect" style="width: 60px;height: 50px;">
	 		</div>
	 		<div class="col-lg-5 alert-info">
		 		{{$data->title}}

		 		<br><hr>
		 		<span>Item Condition </span>
		 		<span style="margin-left: 20px;">{{$data->itemCondition}} </span>
		 		<br>
		 		<span>Time Left</span>
		 		<span id="time"></span>
		 		<br>
		 		<span>Starting Bid: <b>US ${{ $data->startPrice}}</b></span>
		 		<span>[{{session('bids')}} Bids]</span>
		 		<br>
                <form action="{{route('bidPlaced')}}" method="post" >
                    <input type="number" name="bidPrice" class="form-control" style="width: 130px;float: left" placeholder="Enter Bid Price">
                    <input type="hidden" name="p_id" value="{{$data->id}}">
                    <input type="hidden" name="startPrice" value="{{$data->startPrice}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                    <button  type="submit" class="btn btn-info" style="margin-left: 56px;" {{$disable}}>Place A Bid</button>
                </form>
		 		<h4 style="color:green">{{$msg}}</h4>
		 		<br>
		 		<span style="font-size: 11px;">Enter US ${{ $data->startPrice}} or more</span>
		 		<br>
		 		<span style="font-size: 20px">Price: <b>US ${{ $data->buyItNowPrice}}</b></span>
		 		<button type="submit" class="btn btn-info" style="margin-left: 50px" {{$disable}}>Buy It Now</button>
		 		
	 		</div>
	 		<div class="col-lg-3 alert-success" style="margin-left: 50px">
	 			<span><b>Seller Information</b></span>
	 			<br>
	 			<span>Seller Name</span>
	 			<hr>

	 			<br>

	 		</div>
 		</div>
 		<div class="tab">
 		  <button class="tablinks" onclick="openCity(event, 'Des')" >Description</button>
 		  <button class="tablinks" onclick="openCity(event, 'payment')">Shippment & Payment</button>
 		</div>

 		<div id="Des" class="tabcontent">
          <div class="panel panel-heading" style="background-color: #f1f1f1">
              <span> Item Condition Description</span>
          </div>    
          <div class="panel panel-body">
              <p>{{$data->conditionDescription}}</p>
           </div>
          <div class="panel panel-heading" style="background-color: #f1f1f1">
              <span> Item  Description</span>
          </div>    
          <div class="panel panel-body">
     		  <p>{{$data->itemDescription}}</p>
           </div>
 		</div>

 		<div id="payment" class="tabcontent">
             <div class="panel panel-heading" style="background-color: #f1f1f1">
                 <span> Payment Method</span>
             </div>    
             <div class="panel panel-body">
                  <p>{{$data->payment}}</p>
              </div>
             <div class="panel panel-heading" style="background-color: #f1f1f1">
                 <span> Delivery</span>
             </div>    
             <div class="panel panel-body">
                  <p>Item will be delivered within seven days (working days)</p>
              </div>
 		</div>
	</div>
<!-- jumdotron end -->
</div>  
<!-- contaiener end -->
                <form action="{{route('bidWon')}}" method="post" >
                    <input type="hidden" name="p_id" value="{{$data->id}}">
                    <input type="hidden" name="startPrice" value="{{$data->startPrice}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                    <button  type="submit"   id="bidWon" style="background-color: white"></button>
                </form>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endsection
        {{csrf_field()}}

<script>

var dat = '{{$data->bidDate}}';
// Set the date we're counting down to
var countDownDate = new Date(dat).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="time"
    if(days>0)
    {
    	document.getElementById("time").innerHTML = days + "d " + hours + "h "
    	+ minutes + "m " + seconds + "s ";	 		    	
    }
    else if(hours>1 &&days<1)
    {
    	document.getElementById("time").innerHTML =  hours + "h "
    	+ minutes + "m " + seconds + "s ";	 		    	
    }
    else
    {
    	document.getElementById("time").innerHTML =   minutes + "m " + seconds + "s ";	 		    	
    }

    // if(hours>0)
    // {
    // 	document.getElementById("time").innerHTML = days + "d " + hours + "h "
    // 	+ minutes + "m " + seconds + "s ";	 		    	
    // }
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("time").innerHTML = "EXPIRED";  
        var notAgain = '{{$notAgain}}';
        if(notAgain=='active')
        {
            document.getElementById("bidWon").click();        
        }
        
    }
}, 1000);
</script>
