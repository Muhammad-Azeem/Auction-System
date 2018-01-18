@extends('layouts.app')

@section('content')
@include('user.searchBar')

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Account')" >Account</button>
  <button class="tablinks" onclick="openCity(event, 'My Activity')" id="defaultOpen">My Activity</button>
</div>

<div id="My Activity" class="tabcontent">
	<div class="row">
		<div class="col-lg-2 alert-info">
			<h2>Summary</h2>
			<p><a href="{{route('mybids')}}">My Bids</a></p>
			<h2>Sell</h2>
			<p><a href="{{route('allSelling')}}">All Selling</a></p>
			<p><a href="{{route('sold')}}">Sold</a></p>
			<p><a href="{{route('active')}}">Active</a></p>
			<p><a href="{{route('unsold')}}">Unsold</a></p>
		</div>
		<div class="col-lg-10 ">
			@yield('section');
		</div>
	</div>
</div>

<div id="Account" class="tabcontent">
	<div class="row">
		<div class="col-lg-2 alert-info">
			<h2>My Account Setting</h2>
		</div>
		<div class="col-lg-10 ">
			<div class="panel panel-heading" style="text-align:center;background-color: #f1f1f1">
				My Account
			</div>
			<div class="panel panel-body">
				<div class="row">
					<div class="col-lg-4">
						<span>
							Name
						</span>
					</div>
					<div class="col-lg-6">
						<span>
							{{Auth::user()->name}}
						</span>
					</div>
					<div class="col-lg-2">
						<span>
							Edit
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<span>
							Email
						</span>
					</div>
					<div class="col-lg-6">
						<span>
							{{Auth::user()->email}}
						</span>
					</div>
					<div class="col-lg-2">
						<span>
							Edit
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
