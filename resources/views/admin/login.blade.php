<!DOCTYPE HTML>
<html>
<head>
    <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets')}}/admin/admin_login_assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('assets')}}/admin/admin_login_assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('assets')}}/admin/admin_login_assets/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/admin_login_assets/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets')}}/admin/admin_login_assets/js/bootstrap.min.js"></script>
</head>
<body id="login">
<div class="login-logo">
    <a href="index.html"><img src="{{asset('assets')}}/admin/admin_login_assets/images/logo.png" alt=""/></a>
</div>
<h2 class="form-heading">login</h2>
<div class="app-cam">
    @include('home.message')
    <form action="{{route('admin_logincheck')}}" method="post">
        @csrf
        <input type="text" id="email" name="email" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == ''){this.value = 'E-mail address';}">
        <input type="password" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
        <div class="submit"> <input type="submit" onclick="myFunction()" value="Login"></div>
        <div class="login-social-link">
            <a href="index.html" class="facebook">
                Facebook
            </a>
            <a href="index.html" class="twitter">
                Twitter
            </a>
        </div>
        <ul class="new">
            <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
            <li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
<div class="copy_layout login">
    <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
</body>
</html>
