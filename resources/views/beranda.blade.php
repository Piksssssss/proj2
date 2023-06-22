<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | Beranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <style>
        body {

            background-color: #e7cd37;
            font-family: Verdana;
        }
    </style>
</head>
<body>
  @extends('template2')
  @section('content')

<!--Shop-->
<section class="shop" class="py-3 mt-4 pt-4" >
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-colls-md-3 row-cols-xl-4 justify-content-center">
      @foreach($product as $item)
        <div class="col mb-5">
          <div class="card h-100" style="width: 14rem;">
            <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="...">
              <div class="card-body p-4 text-center">
                <h5 class="card-title">{{ $item->nama }}</h5>
                  <p class="card-text">Rp.{{ number_format ($item->harga) }}</p>
                  <a href="product/detail/{{ $item->id}}" class="btn text-white" style="background-color: #718893">View Options</a>
              </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!--akhir shop-->
@endsection
</body>
</html>
