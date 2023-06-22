<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | Detail</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
      body {

          background-color: #E0ECE4;
          font-family: Verdana;
      }
  </style>
</head>
<body>
  @extends('template2')
  @section('content')
    {{-- <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #e7cd37">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Snakers Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">All Products</a></li>
                <li><a class="dropdown-item" href="#">Popular Items</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">News Arrivals</a></li>
              </ul>
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
  <!--Akhir Navbar--> --}}

  <section class="py-5">
      <div class="container px-4 px-lg-5 my-3">
          <div class="row gx-4 gx-lg-5 align-items-center">
              <div class="col-md-6">
                  <img src="/storage/{{ $product->foto }}" class="card-img-top mb-5 mt-3 mb-md-0" alt="">
              </div>
              <div class="col-md-6">
                  <div class="small mb-1">SKU: BST-001</div>
                  <h1 class="display-5 fw-bolder">{{ $product->nama }}</h1>
                  <div class="fs-5 mb-5">
                      <span>Rp.{{ number_format ($product->harga) }}</span>
                  </div>
                  <p class="load">
                    {{ $product->deskripsi }}
                  </p>
                  <div class="d-flex">
                      <input class="form-control text-center mb-3" type="number" id="inputQuantity" value="1" style=" max-width: 3rem;"/>
                      <button class="btn text-white flex-shrink-0 ms-3 " type="button" style="background-color: #718893">
                       <a href="https://api.whatsapp.com/send?phone=6282116253598&text=%22halloo%22" class="text-white">Beli Sekarang</a>
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!--Footer-->
<div class="container-fluid">
  <footer class="py-3 my-3 border-top">
    <p class="text-center">&copy;2023 <a href="" target="_blank" class="fw-bold text-secondary">Taufik</a></p>
  </footer>
</div>
<!--Akhir Footer-->
@endsection
</body>
</html>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
