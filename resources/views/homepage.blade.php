<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>MySite</title>

  <link href="../public/css/home/reset.css" rel="stylesheet">
  <link href="../public/css/home/site.css" rel="stylesheet">
  <link href="../public/css/home/container.css" rel="stylesheet">
  <link href="../public/css/home/grid.css" rel="stylesheet">
  <link href="../public/css/home/header.css" rel="stylesheet">
  <link href="../public/css/home/image.css" rel="stylesheet">
  <link href="../public/css/home/menu.css" rel="stylesheet">
  <link href="../public/css/home/divider.css" rel="stylesheet">
  <link href="../public/css/home/dropdown.css" rel="stylesheet">
  <link href="../public/css/home/segment.css" rel="stylesheet">
  <link href="../public/css/home/button.css" rel="stylesheet">
  <link href="../public/css/home/list.css" rel="stylesheet">
  <link href="../public/css/home/icon.css" rel="stylesheet">
  <link href="../public/css/home/sidebar.css" rel="stylesheet">
  <link href="../public/css/home/transition.css" rel="stylesheet">
  <link href="../public/css/home/style.css" rel="stylesheet">
  <link href="../public/css/uikit.min.css" rel="stylesheet">




  <script src="{{ asset('js/home/jquery.min.js') }}"></script>
  <script src="{{ asset('js/home/visibility.js') }}"></script>
  <script src="{{ asset('js/home/sidebar.js') }}"></script>
  <script src="{{ asset('js/home/transition.js') }}"></script>
  <script src="{{ asset('js/home/javascript.js') }}"></script>
  <script src="{{ asset('js/uikit.min.js') }}"></script>

</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item" href="{{route('sell')}}">Sell</a>
    <a class="item">Help</a>
    <a class="item">Contact Us</a>
    <div class="right menu">
      <div class="item">
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
        <a class="ui inverted button" href="{{route('login')}}" >Log in</a>
        <a class="ui inverted button" href="{{route('register')}}">Sign Up</a>
      @else
      <a href="{{ route('logout') }}" 
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>

       @endif
      </div>
    </div>
  </div>
</div>



<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
        <a class="item" href="{{route('sell')}}">Sell</a>
        <a class="item">Help</a>
        <a class="item">Contact Us</a>
        <div class="right item">
          @if (Auth::guest())
            <a class="ui inverted button" href="{{route('login')}}" >Log in</a>
            <a class="ui inverted button" href="{{route('register')}}">Sign Up</a>
          @else
          <a href="{{ route('logout') }}" 
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
           @endif
<!--           <a class="ui inverted button" href="{{route('login')}}" >Log in</a>
          <a class="ui inverted button" href="{{route('register')}}">Sign Up</a>
 -->        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Become Customer 
      </h1>
      <h3 style="color: white;opacity: 0.8">You Can Find Here Whatever You Want</h3>
      <div class="ui huge primary button" ><a href="{{route('sell')}}"><span style="color: white">Start Selling</span> </a></div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">We Help People To Sell Their Goods</h3>
          <p>We can give you chance so that you can sell or purchase goods at your home within no time.</p>
          <h3 class="ui header">We Make Oppertunities For People</h3>
          <p>We can give you chance so that you can sell or purchase goods at your home within no time.</p>
        </div>
        <div class="six wide right floated column">
          <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button" href="{{route('sell')}}">Want To Sell Good</a>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe quote segment" >
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="uk-animation-toggle" >
          <a href="{{URL::to('productResult', array('mobiles') )}}">
            <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down" style="width: 600px;height: 300px;margin-left: 40px;background-image: url(images/iphone.jpg) ;background-size: 79%" >
                <br><br><br><br>
                <p class="uk-text-center">Mobiles</p>
            </div>
          </a>
        </div>
        <a href="{{URL::to('productResult', array('laptops') )}}">
          <div class="uk-animation-toggle" >
            <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down" style="width: 600px;height: 300px;margin-left: 80px;background-image: url(images/macbook.jpg) ;background-size: 100% ">
                <br><br><br><br>
                <p class="uk-text-center">Laptops</p>
            </div>
           </div>
        </a>   
       </div>
      </div>
    </div>
  </div>
  <br><hr><br>
  <div class="ui vertical stripe quote segment" >
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
          <a href="{{URL::to('productResult', array('mobiles') )}}">
            <div class="uk-animation-toggle" >
              <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down" style="width: 600px;height: 300px;margin-left: 40px;background-image: url(images/bike.jpg) ;background-size: 600px 330px" >
                  <br><br><br><br>
                  <p class="uk-text-center">Bikes</p>
              </div>
          </div>
         </a> 
        <a href="{{URL::to('productResult', array('laptops') )}}"> 
          <div class="uk-animation-toggle" >
            <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down" style="width: 600px;height: 300px;margin-left: 80px;background-image: url(images/macbook.jpg) ;background-size: 100% ">
                <br><br><br><br>
                <p class="uk-text-center">Laptops</p>
            </div>
          </div>
        </a>
       </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Recomendation</h3>
      <h4 class="ui horizontal header divider">
        <a href="#">Daily Offers</a>
      </h4>
      <h3 class="ui header">What Are We Offerin</h3>
    </div>
  </div>


  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Help</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">FAQ  </a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="{{route('sell')}}" class="item">Sell Things</a>
            <a href="#" class="item">Buy Things</a>
            <a href="#" class="item">Shipment</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Auction System</h4>
          <p>All Right Are Reserved 2017.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
