<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>
<body>
<body class="sidebar-menu-collapsed">
<div class="se-pre-con">
<section>
    @include('admin._sidebar')
    @include('admin._header')
    @yield('content')
    @include('admin._footer')
    @yield('footer')
</section>
</div>
</body>
</body>
</html>



