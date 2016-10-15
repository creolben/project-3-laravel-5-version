<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" type="text/css">
<link href="css/lightbox.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>

  @extends('header')
  <body>
    <header class="header">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 ">
    				<div class="navbar-header">
    					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
    					        <span class="glyphicon glyphicon-align-justify"></span>
    					    </button>
          					<a class="navbar-brand logo" href="{{action('MainController@index')}}">Developer's Best Friend</a>
        			</div>
    			</div>
    			<div class="col-md-8">
    				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
    					<ul class="nav navbar-nav navbar-right menu">
    							<li><a href="{{action('MainController@index')}}" class="active">Home</a></li>
    					</ul>
    				</nav>
    			</div>
    		</div>
    	</div>
    </header>
    <div class="container-fluid main" id="page-top">
    	   @yield('content')
    </div>
      @extends('footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(26.802100, 75.822739),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
    $(document).ready(function () {
    $(document).on("scroll", onScroll);

    $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
        $(this).removeClass('active');
      })
      $(this).addClass('active');

      var target = this.hash;
      $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 500, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
      });
    });
    });

    function onScroll(event){
    var scrollPosition = $(document).scrollTop();
    $('nav a').each(function () {
      var currentLink = $(this);
      var refElement = $(currentLink.attr("href"));
      if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
        $('nav ul li a').removeClass("active");
        currentLink.addClass("active");
      }
      else{
        currentLink.removeClass("active");
      }
    });
    }
    </script>
    <script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('.timer').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });

      // start all the timers
      $('#starts').waypoint(function() {
    $('.timer').each(count);
    });

      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
    </script>
  </body>
</html>
