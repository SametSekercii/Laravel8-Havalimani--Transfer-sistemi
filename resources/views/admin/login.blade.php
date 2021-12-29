<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel Giriş</title>

    <link href="{{asset("assets/admin")}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset("assets/admin")}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset("assets/admin")}}/css/animate.css" rel="stylesheet">
    <link href="{{asset("assets/admin")}}/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

        </div>
        <h3>SMT TRANSFER Panel</h3>

        <p>Giriş Yap</p>

        @include("home.flash-message")

        <form class="m-t" role="form" method="POST" action="{{ route('login_check') }}">
            @csrf
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Şifre" required="">
            </div>
            <label> <input type="checkbox" class="i-checks"  name="remember"> Beni Hatırla </label>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ route('password.request') }}"><h3>Şifreni mi unuttun ?</h3></a>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset("assets/admin")}}/js/jquery-3.1.1.min.js"></script>
<script src="{{asset("assets/admin")}}/js/popper.min.js"></script>
<script src="{{asset("assets/admin")}}/js/bootstrap.js"></script>

</body>

</html>
