
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | Piksstore</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {

            background-color: #E0ECE4;
            font-family: Verdana;
        }
    </style>
</head>
<body>
<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #718893">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Piks store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="beranda" class="nav-link{{ Request::segment(1)=='beranda'?'active':'' }}">Beranda</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#about">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="logout/member">Logout</a>
              </li>
            </ul>
            <div>
              <form class="d-flex">
                <button type="button" class="btn btn-outline-light" id="btn-cart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <i class="bi-cart-fill me-1"></i>Cart
                  <span class="badge bg-light text-primary ms-1 rounded-pill">0</span>
                </button>
              </form>
            </div>
          </div>
        </div>
    </nav>
<!--Akhir Navbar-->
@yield('content')
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


