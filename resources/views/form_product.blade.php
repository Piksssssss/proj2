<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SHOP | Add Product</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="style.css">
        <style>
        body {

            background-color:#e7cd37;
            font-family: Verdana;
        }
        </style>
</head>
<body>
    @extends('template')
    @section('content')
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">Tambah Data Product</h3>
                    <div class="form-group">
                        <div class="col-mb-3 mt-5">
                            <label class="form-label fw-bold" for="">Nama Product</label>
                            <input class="form-control" type="nama" name="nama" id="nama" value="{{ $product->nama }}" placeholder="Masukkan Nama Product">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{ $product->deskripsi }}" placeholder="Masukkan Deskripsi">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga" value="{{ $product->harga }}" placeholder="Masukkan Harga">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label for="foto">Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-3">
                            <input type="submit" value="{{ $tombol }}" class="form-control btn text-white" style="background-color: #718893">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
</body>
</html>
