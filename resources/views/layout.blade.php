<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  @section('header')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/position.css">
  <link rel="stylesheet" href="./css/le/size.css">
  <link rel="stylesheet" href="./css/le/fonts.css">
  <link rel="stylesheet" href="./css/le/customize.css">
  <link rel="stylesheet" href="./css/le/fonts.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Sarabun&display=swap');

    html,
    body,
    div,
    h1,
    h2,
    h3,
    h4,
    p,
    li,
    span,
    a {
      font-family: 'Sarabun', sans-serif !important;

    }

    .f {
      font-family: 'Sarabun', sans-serif !important;

    } 
  </style>
</head>

<body>
<!---
  <div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
      <h1 id="colorlib-logo"><a href="index.html"><span style="color:black;">ระบบยืมคืนพัสดุของสงฆ์</span></a></h1>
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <img class="img mb-4 rounded-circle responsive" src="{{ URL::asset('images/author.jpg')}}" height="200"
            width="200" alt="Cinque Terre">
          <li>ชื่อ : xxxxxxx นามสกุล : xxxxxxx</li>
          <li>สถานะ : xxxxxxx</li>
          <br><br>
          @yield('aside')


        </ul>
      </nav>

    </aside> -->
    @show
    <div id="colorlib-main" style="background-color: green;">
      <div class="hero-wrap js-fullheight">
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  @show
</body>

</html>