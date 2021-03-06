@extends('webclient.layout')
@section('title')
    Đăng kí
@endsection
@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- animation-effect -->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
@endsection
@section('content')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="trangchu"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
                <li class="active">Đăng ký</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h3 class="animated wow zoomIn" data-wow-delay=".5s">Đăng ký tại đây</h3>
            <p class="est animated wow zoomIn" data-wow-delay=".5s">Quý khách vui lòng đăng ký tài khoản tại đây để có thể
                đăng nhập sử dụng dịch vụ của hệ thống</p>
            <div class="login-form-grids">
                <h5 classưe="animated wow slideInUp">Thông tin khách hàng</h5>
                @if(session('status'))
                    <ul>
                        <li class="text-danger">
                            {{session('status')}}
                        </li>
                    </ul>
                @endif
                <form class="animated wow slideInUp" role="form" method="POST" action="{{route('register')}}">
                    @csrf
                    <input type="text" placeholder="FName..." required=" " name="user_fname">
                    <input type="text" placeholder="User Name..." required=" "name="user_name">
                    <h6 class="animated wow slideInUp">Thông tin đăng nhập</h6>
                    <input type="email" placeholder="Địa chỉ Email" required=" " name="user_email">
                    <input type="password" placeholder="Mật khẩu" required=" " name="password" id="password">
                    <input type="password" placeholder="Xác nhận mật khẩu" required=" " name="password_confirmation" id="confirmpassword">
                    <input type="submit" value="Đăng ký" id="register">
                </form>
            </div>
            <div class="register-home animated wow slideInUp">
                <a href="/">Trang chủ</a>
            </div>
        </div>
    </div>

@endsection
