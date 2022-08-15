<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Kairos</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href={{ asset("css/base.css") }}>
        <link rel="stylesheet" href={{ asset("css/vendor.css") }}>
        <link rel="stylesheet" href={{ asset("css/main.css") }}>
        

        <!-- script
        ================================================== -->
        <script src={{ asset("js/modernizr.js") }}></script>
        <script src={{ asset("js/pace.min.js") }}></script>

        <!-- favicons



        ================================================== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="shortcut icon"  href={{ asset("images/home/favicon.ico") }}  type="image/x-icon">
        <link rel="icon" href={{ asset("images/home/favicon.ico") }} type="image/x-icon">

    </head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>



    @include('layout.header')
    @yield('content')
    @include('layout.footer')





    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


</body>
</html>
