<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jalan Kampus</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/freelancer.css')}}">
    <link rel="stylesheet" href="{{asset('css/freelancer.min.css')}}">
    <style>
      h1{
         text-align:center;
      }
    </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
      <input id="myInput" type="text" placeholder="Search..">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
               <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger focuss" href="/">Home</a>
             </li>
            <li class="nav-item mx-0 mx-lg-1">
               <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger focuss" href="/ptn">PTN</a>
             </li>
            <li class="nav-item mx-0 mx-lg-1">
               <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger focuss" href="/pts">PTS</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger focuss" href="/ptk">PTK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contact Section -->
    <section>
      <div class="container">     
          @yield('content')
      </div>
    </section>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/freelancer.min.js')}}"></script>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
  </body>

</html>
