<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content=@yield('keywords')>
    <meta name="author" content="Anıl Haydar Yılmaz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    @yield('css')
    @yield('headerjs')
</head>
<body>
@include('home._header')

@section('content')
    İçerik Alanı
@show

@include('home._footer')
@yield('footerjs')

</body>
</html>
