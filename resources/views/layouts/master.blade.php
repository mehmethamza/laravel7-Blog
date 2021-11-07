<!DOCTYPE html>
<html class="no-js" lang="tr">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title',config("app.name"))</title>
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="tr" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="/js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="/images/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="/images/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


     @include('layouts.partials.header')




    <!-- masonry
    ================================================== -->

    @yield('content')
     <!-- end s-bricks -->


    <!-- footer
    ================================================== -->
    @include('layouts.partials.footer')
     <!-- end s-footer -->


   <!-- Java Script
   ================================================== -->
   <script src="/js/jquery-3.2.1.min.js"></script>
   <script src="/js/plugins.js"></script>
   <script src="/js/main.js"></script>

</body>

</html>
