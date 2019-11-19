<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/position.css">
  <link rel="stylesheet" href="./css/le/size.css">
  <link rel="stylesheet" href="./css/le/fonts.css">
  <link rel="stylesheet" href="./css/le/customize.css">
  <link rel="stylesheet" href="./css/le/fonts.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
 
  <title>@yield('title')</title>

  <style>
  @import url('https://fonts.googleapis.com/css?family=Sarabun&display=swap');
html,body,div,h1,h2,h3,h4,p,li,span,a{
    font-family: 'Sarabun', sans-serif!important;

} 
.f{
    font-family: 'Sarabun', sans-serif!important;

}
  </style>

</head>

<body>
  @extends('layouts.navbar')
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
      @yield('content')
    </div>
  </div>
  <script>
    // Script to open and close sidebar
            function w3_open() {
              document.getElementById("mySidebar").style.display = "block";
              document.getElementById("myOverlay").style.display = "block";
            }
             
            function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
              document.getElementById("myOverlay").style.display = "none";
            }
            
            // Modal Image Gallery
            function onClick(element) {
              document.getElementById("img01").src = element.src;
              document.getElementById("modal01").style.display = "block";
              var captionText = document.getElementById("caption");
              captionText.innerHTML = element.alt;
            }
  </script>
</body>

</html>