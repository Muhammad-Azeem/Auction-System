@extends('layouts.app')

@section('content')
<div class="container">
      <div style="float: left">
        <span style="font-weight: bold;font-size: 35px">MyPage</span>
      </div>
      <form action="" method="post" style="margin-top: 10px">
        <div class="input-group" style="float: left;margin-left: 20px">
          <input type="search" class="form-control" placeholder="Search Product" aria-describedby="basic-addon2" style="width: 685px">
        </div>
          <select name=""  class="form-control" style="width: 200px;float: left">
            <option value="">All Category</option>
            option
          </select>
          <input type="submit" name="submit" value="Search" class="form-control" style="width: 100px">
      </form>
 </div>
 <div class="container">
 	<div class="jumbotron" style="background-color: white">
 		<div class="row">
	 		<div class="col-lg-3" style="width: 300px;height: 400px;">
		 		@foreach($data as $p)
		 		<img src="upload\{{$p->pic1}}" alt="fileName is incorrect" style="width: 250px;height: 300px;" style="float:left"> 			
		 		  <img src="upload\{{$p->pic2}}" aalt="fileName is incorrect" style="width: 60px;height: 50px;">
		 		  <img src="upload\{{$p->pic3}}" aalt="fileName is incorrect" style="width: 60px;height: 50px;">

	 		</div>
	 		<div class="col-lg-5 alert-info">
		 		{{$p->title}}
		 		<br><hr>
		 		<span>Item Condition </span>
		 		<span style="margin-left: 20px;">{{$p->itemCondition}} </span>
		 		<br>
		 		<span>Time Left</span>
		 		<span id="demo"></span>
		 		<br>
		 		<span>Starting Bid: <b>US ${{ $p->startPrice}}</b></span>
		 		<span>[0 Bids]</span>
		 		<br>
		 		<input type="text" name="bidPrice" class="form-control" style="width: 130px;float: left" placeholder="Enter Bid Price">
		 		<button type="submit" class="btn btn-info" style="margin-left: 56px;">Place A Bid</button>
		 		<br>
		 		<span style="font-size: 11px;">Enter US ${{ $p->startPrice}} or more</span>
		 		<br>
		 		<span style="font-size: 20px">Price: <b>US ${{ $p->buyItNowPrice}}</b></span>
		 		<button type="submit" class="btn btn-info" style="margin-left: 50px">Buy It Now</button>
		 		
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
 		             <p>{{$p->conditionDescription}}</p>
 		          </div>
 		         <div class="panel panel-heading" style="background-color: #f1f1f1">
 		             <span> Item  Description</span>
 		         </div>    
 		         <div class="panel panel-body">
 		    		  <p>{{$p->itemDescription}}</p>
 		          </div>
 				</div>

 				<div id="payment" class="tabcontent">
 		            <div class="panel panel-heading" style="background-color: #f1f1f1">
 		                <span> Payment Method</span>
 		            </div>    
 		            <div class="panel panel-body">
 		                 <p>{{$p->payment}}</p>
 		             </div>
 		            <div class="panel panel-heading" style="background-color: #f1f1f1">
 		                <span> Delivery</span>
 		            </div>    
 		            <div class="panel panel-body">
 		                 <p>Item will be delivered within seven days (working days)</p>
 		             </div>
 				</div>
		 		@endforeach	

 	</div>
 </div> 

@endsection
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

		 		<script>
 		 		@foreach($data as $p)		
		 		var dat = '{{$p->bidDate}}';
		 		@endforeach
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
		 		    
		 		    // Output the result in an element with id="demo"
		 		    // Output the result in an element with id="demo"
		 		    if(days>0)
		 		    {
		 		    	document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		 		    	+ minutes + "m " + seconds + "s ";	 		    	
		 		    }
		 		    else if(hours>1 &&days<1)
		 		    {
		 		    	document.getElementById("demo").innerHTML =  hours + "h "
		 		    	+ minutes + "m " + seconds + "s ";	 		    	
		 		    }
		 		    else
		 		    {
		 		    	document.getElementById("demo").innerHTML =   minutes + "m " + seconds + "s ";	 		    	
		 		    }
		 		    
		 		    // If the count down is over, write some text 
		 		    if (distance < 0) {
		 		        clearInterval(x);
		 		        document.getElementById("demo").innerHTML = "EXPIRED";
		 		    }
		 		}, 1000);
		 		</script>
