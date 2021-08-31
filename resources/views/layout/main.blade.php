<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:24:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="corporate, creative, general, portfolio, photography, blog, e-commerce, shop, product, gallery, retina, responsive">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <title>@yield('title','Trang Chủ')</title>

    <!--common style-->
@include('layout.style')
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/vendor/backward/html5shiv.js')}}"></script>
    <script src="{{asset('assets/vendor/backward/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
    <!-- preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->

    <div class="wrapper">

        <!--header start-->
@include('layout.navbar')
        <!--header end-->

        <!--hero section-->
        <div id="fullscreen-banner" class="parallax text-center vertical-align home-banner">
            <div class="container-mid">
                <div class="container">
                    <div class="banner-title light-txt">
                        <h1 class="text-uppercase">Think Beyond</h1>
                        <h3 class="text-uppercase">Explore Limitless Possibilities</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--hero section-->

        <!--body content start-->
        <section class="body-content">
            @yield('content')
        </section>
        <!--body content end-->

        <!--footer 1 start -->
    @include('layout.footer')
        <!--footer 1 end-->
    </div>


    <!-- inject:js -->
   @include('layout.script')
    <!-- endinject -->
</body>


<!-- Mirrored from massive.markup.themebucket.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:24:17 GMT -->
</html>
