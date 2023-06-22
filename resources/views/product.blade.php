<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SHOP | Product</title>
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
    @extends('template')
    @section('content')
    <div class="container">
        <div class="card border-light mt-5">
            <div class="card-header text-white" style="background-color: #e7cd37">Data Product</div>
            <div class="card-body">
                <a href="{{ url('product/add') }}" class="btn plus float-right btn-sm mb-3" style="background-color: #718893"> + Tambah</a>
                <div class="col-md-12">
            <table class="table table-striped table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Product</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($product as $key => $item)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> deskripsi }}</td>
                    <td>{{ $item -> harga }}</td>
                    <td>
                        <img src="/storage/{{ $item->foto }}" alt="" width="70">
                    </td>
                    <td>
                        <a href="product/edit/{{ $item->id }}>" class="btn btn-success btn-sm">Edit</a>
                        <a href="product/hapus/{{ $item->id }}>" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
    </div>
    @endsection
</body>
</html>

