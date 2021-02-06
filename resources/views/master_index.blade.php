<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/grid/grid.css" rel="stylesheet">
    <!-- <link href="{{asset('fronted/css/body.css')}}" rel="stylesheet"> -->
    <link href="{{asset('fontend/css/sidebar.css')}}" rel="stylesheet">

    <style>
    .bg-primary {
    background-color: #bdd2ff !important;;
    }
    </style>
  </head>


  <body 
  style="
     background-color:#9999cc;
     font-size: 13px;
     font-weight: 500;
     text-decoration: underline;">
    <div class="container">
      @include('master_layout.navbar')
    <div>
    <main role="main" class="container" style="background-color: rgb(38, 72, 144)">
      <div class="row mt-1">
            <div class="col-3" style="background-color:#84aee6;">
                @include('master_layout.leftsidebar')
            </div>
            <div class="col-9"> 
            @yield('content')  
            </div>
      </div>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
