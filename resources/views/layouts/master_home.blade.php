<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontend/assets/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontend/assets/style-rtl.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontend/assets/css/dark.css')}}" type="text/css" />

	<!-- Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('frontend/assets/demos/agency/agency.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('frontend/assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('frontend/assets/css/colors.php?color=c0bb62')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>محمود طه | الرئيسية</title>
<style>
  html {
  scroll-behavior: smooth;
}
</style>
</head>

<body class="stretched">

  <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

  @include('layouts.body.header')

  @include('layouts.body.slider')


  <main id="main">

  @yield('home_content')

  </main><!-- End #main -->

  @include('layouts.body.footer')


</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('frontend/assets/js/functions.js')}}"></script>

<script>

    $('#oc-portfolio.owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:5
        }
      }
    });

  $('#oc-slider.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });

  $('#oc-clients.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  });

</script>

<script>
  $(document).ready(function () {

//  navbar height start 

var h = window.innerHeight;

$('#oc-slider img').css('height', h/2);

  });
</script>

</body>
</html>