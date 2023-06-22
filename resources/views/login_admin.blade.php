<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOP | Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {

            background-color: #e7cd37;
            font-family: Verdana;
        }
    </style>
</head>
<body>
    <form action="{{ url('login/admin') }}" method="post" >
        @csrf
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">L O G I N | A D M I N</h3>
                    <div class="form-group">
                        <div class="col-mb-2">
                            <label class="form-label fw-bold" for="">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-2">
                            <label class="form-label fw-bold" for="">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-3">
                            <input type="submit" value="LOGIN" class="form-control btn text-white" style="background-color: #718893">
                        </div>
                    </div>
                    <p>Or login <a href="/login/member">Member</a></p>
                </div>
                <p class="text-center text-secondary">Don't you have an account?<a href="/register/admin" class="fw-bold"><br> Sign Up</a></p>

            </div>
        </div>
    </form>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
