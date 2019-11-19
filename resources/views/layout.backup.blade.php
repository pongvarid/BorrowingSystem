<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    @section('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/position.css">
        <link rel="stylesheet" href="./css/le/size.css">
        <link rel="stylesheet" href="./css/le/fonts.css">
        <link rel="stylesheet" href="./css/le/customize.css"> 
        <link rel="stylesheet" href="./css/le/fonts.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Sarabun&display=swap');
html,body,div,h1,h2,h3,h4,p,li,span,a{
    font-family: 'Sarabun', sans-serif!important;

} 
.f{
    font-family: 'Sarabun', sans-serif!important;

}
.search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}
</style>
  </head>
  <body>

	<div id="colorlib-page" >
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo" ><a href="index.html"><span style="color:black;">ระบบยืมคืนพัสดุของสงฆ์</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation" >
				<ul>
                    <img class="img mb-4 rounded-circle responsive" src="{{ URL::asset('images/author.jpg')}}" height="200" width="200" alt="Cinque Terre">
                    <li>ชื่อ : xxxxxxx นามสกุล : xxxxxxx</li>
                    <li>สถานะ : xxxxxxx</li>
                    <br><br>
                    @yield('aside')


				</ul>
			</nav>

        </aside> <!-- END COLORLIB-ASIDE -->
        @show
		<div id="colorlib-main" style="background-color: green;">
			<div class="hero-wrap js-fullheight" >
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
                        @yield('content')
				</div>
			</div>
    	</div>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  @section('script')
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ URL::asset('js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ URL::asset('js/aos.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ URL::asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ URL::asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL::asset('js/google-map.js')}}"></script>
  <script src="{{ URL::asset('js/main.js')}}"></script> 
<!------ Include the above in your HEAD tag ---------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  @show
  </body>
</html>
