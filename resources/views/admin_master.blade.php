
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/admin">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">
                  <span data-feather="bar-chart-2"></span>
                  About
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/brandCategory">
                  <span data-feather="bar-chart-2"></span>
                  Brand Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/brand">
                  <span data-feather="bar-chart-2"></span>
                  Brand
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/productCategory">
                  <span data-feather="bar-chart-2"></span>
                  Product Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/productSubCategory">
                  <span data-feather="bar-chart-2"></span>
                  Product Sub Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product">
                  <span data-feather="bar-chart-2"></span>
                  Product
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/half-yearly">
                  <span data-feather="file"></span>
                    Half Yearly
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/psi">
                  <span data-feather="shopping-cart"></span>
                  PSI
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cg">
                  <span data-feather="users"></span>
                      Corporate Governance
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/qr">
                  <span data-feather="users"></span>
                   Quarterly Result
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
           @yield('content')   
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
  </body>
</html>
