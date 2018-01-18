<!DOCTYPE html>
<html>
<head>
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
  <div class="ui inverted vertical footer segment" >
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