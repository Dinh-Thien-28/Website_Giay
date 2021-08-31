<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/shop-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <title>Shop 4 Column</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/elasic-slider/elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/iconmoon/linea-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default-theme.css')}}">
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/vendor/backward/html5shiv.js')}}"></script>
    <script src="{{asset('assets/vendor/backward/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <header class="l-header">

            <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky" style="background-color: #BEC3C9">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="{{ route('home') }}" class="logo-brand">
                            <img class="retina" src="{{asset('assets/img/logo-dark.png')}}" alt="Massive">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard">

                            <li class=""><a href="{{route('home')}}">Pages</a>

                            </li>

                            <li class="active"><a href="#">Home</a>

                                <ul class="dropdown">
                                    @foreach ($cate as $c)
                                    <li>
                                        <a href="{{route('category',$c->id) }}">{{ $c->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>

                            <li class=""><a href="#">Features</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sliders</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Slider Revolution</a>
                                                <ul class="dropdown">
                                                    <li><a href="slider-revolution-fullscreen.html">Full Screen</a>
                                                    </li>
                                                    <li><a href="slider-revolution-fullwidth.html">Full Width</a>
                                                    </li>
                                                    <li><a href="slider-revolution-kenburns.html">Kenburns</a>
                                                    </li>
                                                    <li><a href="slider-revolution-video-bg.html">Video Banner</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Slider flex</a>
                                                <ul class="dropdown">
                                                    <li><a href="slider-flex-fullwidth.html">Full Width</a>
                                                    </li>
                                                    <li><a href="slider-flex-boxed.html">Boxed</a>
                                                    </li>
                                                    <li><a href="slider-flex-boxed-thumb.html">Thumbnail Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Slider Owl</a>
                                                <ul class="dropdown">
                                                    <li><a href="slider-owl-fullwidth.html">Full Width</a>
                                                    </li>
                                                    <li><a href="slider-owl-boxed.html">Boxed</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Parallax</a>
                                                <ul class="dropdown">
                                                    <li><a href="static-parallax.html">Full Screen</a>
                                                    </li>
                                                    <li><a href="static-parallax-2.html">Full Screen 2</a>
                                                    </li>
                                                    <li><a href="static-parallax-short.html">Full Width</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="slider-bs.html">Slider BS</a>
                                            </li>
                                            <li><a href="slider-elastic.html">Slider Elastic</a>
                                            </li>
                                            <li><a href="slider-typist-blink.html">Slider Rotate Text 1</a>
                                            </li>
                                            <li><a href="slider-typist-mark.html">Slider Rotate Text 2</a>
                                            </li>
                                            <li><a href="static-html5-video.html">HTML5 Video</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Navbar</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="#">Color Variants</a>
                                                <ul class="dropdown">
                                                    <li><a href="navbar-light.html">Light / White</a>
                                                    </li>
                                                    <li><a href="navbar-dark.html">Dark / Black</a>
                                                    </li>
                                                    <li><a href="navbar-light-trans.html">Light Transparent</a>
                                                    </li>
                                                    <li><a href="navbar-dark-trans.html">Dark Transparent</a>
                                                    </li>
                                                    <li><a href="navbar-semi-trans.html">Semi Transparent</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Center Styles</a>
                                                <ul class="dropdown">
                                                    <li><a href="navbar-center.html">Light / White</a>
                                                    </li>
                                                    <li><a href="navbar-center-dark.html">Dark / Black</a>
                                                    </li>
                                                    <li><a href="navbar-center-light-trans.html">Light Transparent</a>
                                                    </li>
                                                    <li><a href="navbar-center-dark-trans.html">Dark Transparent</a>
                                                    </li>
                                                    <li><a href="navbar-center-semi-trans.html">Semi Transparent</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Floating Styles</a>
                                                <ul class="dropdown">
                                                    <li><a href="navbar-floating.html">Light / White</a>
                                                    </li>
                                                    <li><a href="navbar-floating-dark.html">Dark / Black</a>
                                                    </li>
                                                    <li><a href="navbar-floating-semi-trans.html">Semi Transparent</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Left Styles</a>
                                                <ul class="dropdown">
                                                    <li><a href="navbar-left.html">Light / White</a>
                                                    </li>
                                                    <li><a href="navbar-left-dark.html">Dark / Black</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Other Styles</a>
                                                <ul class="dropdown">
                                                    <li><a href="navbar-expand.html">Expand</a>
                                                    </li>
                                                    <li><a href="navbar-compact.html">Compact</a>
                                                    </li>
                                                    <li><a href="navbar-wide.html">Wide</a>
                                                    </li>
                                                    <li><a href="navbar-sticky-off.html">Sticky Off</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Link Styles</a>
                                                <ul class="dropdown">
                                                    <li><a href="menu-standard.html">Standard</a>
                                                    </li>
                                                    <li><a href="menu-bg.html">Background / Bg</a>
                                                    </li>
                                                    <li><a href="menu-outline.html">Outline</a>
                                                    </li>
                                                    <li><a href="menu-underline.html">Underline</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Special Menus</a>
                                                <ul class="dropdown">
                                                    <li><a href="menu-push.html">Push</a>
                                                    </li>
                                                    <li><a href="menu-dotted.html">Dotted</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Topbar</a>
                                                <ul class="dropdown">
                                                    <li><a href="menu-top-bar.html">Menu Topbar 1</a>
                                                    </li>
                                                    <li><a href="menu-top-bar-alt.html">Menu Topbar 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Page Title</a>
                                        <ul class="dropdown">
                                            <li><a href="page-title.html"> Default Title</a>
                                            </li>
                                            <li><a href="page-title-background.html"> Background Title</a>
                                            </li>
                                            <li><a href="page-title-bg-transparent-header.html"> Bg Transparent Title</a>
                                            </li>
                                            <li><a href="page-title-parallax-transparent-header.html"> Parallax Transparent</a>
                                            </li>
                                            <li><a href="page-title-nobg.html"> No Background</a>
                                            </li>
                                            <li><a href="page-title-pattern.html"> Pattern Title</a>
                                            </li>
                                            <li><a href="page-title-center.html"> Center Align</a>
                                            </li>
                                            <li><a href="page-title-right.html"> Right Align</a>
                                            </li>
                                            <li><a href="page-title-dark.html"> Dark Title</a>
                                            </li>
                                            <li><a href="page-title-mini.html"> Mini Title</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Footer</a>
                                        <ul class="dropdown">
                                            <li><a href="footer1.html"> Footer Layout 1</a>
                                            </li>
                                            <li><a href="footer2.html"> Footer Layout 2</a>
                                            </li>
                                            <li><a href="footer3.html"> Footer Layout 3</a>
                                            </li>
                                            <li><a href="footer4.html"> Footer Layout 4</a>
                                            </li>
                                            <li><a href="footer5.html"> Footer Layout 5</a>
                                            </li>
                                            <li><a href="footer6.html"> Footer Layout 6</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Gallery</a>
                                        <ul class="dropdown">
                                            <li><a href="gallery-3.html"> Default Gallery</a>
                                            </li>
                                            <li><a href="gallery-masonry.html"> Masonry Gallery 1</a>
                                            </li>
                                            <li><a href="gallery-masonry-2.html"> Masonry Gallery 2</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>


                            <li><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">Classic</a>
                                        <ul class="dropdown ">
                                            <li><a href="blog-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li><a href="blog-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li><a href="blog-fullwidth.html">Fullwidth</a>
                                            </li>
                                            <li><a href="blog-list.html">Blog List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Grid</a>
                                        <ul class="dropdown ">
                                            <li><a href="blog-grid-2.html">Grid 2</a>
                                            </li>
                                            <li><a href="blog-grid-3.html">Grid 3</a>
                                            </li>
                                            <li><a href="blog-grid-4.html">Grid 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry</a>
                                        <ul class="dropdown ">
                                            <li><a href="blog-2-masonry.html">Masonry 2</a>
                                            </li>
                                            <li><a href="blog-3-masonry.html">Masonry 3</a>
                                            </li>
                                            <li><a href="blog-4-masonry.html">Masonry 4</a>
                                            </li>
                                            <li><a href="blog-masonry-fullwidth.html">Masonry Fullwidth</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Blog Details</a>
                                        <ul class="dropdown ">
                                            <li><a href="blog-single-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li><a href="blog-single.html">Sidebar Right</a>
                                            </li>
                                            <li><a href="blog-single-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('login')}}">Đăng Nhập</a>
                            </li>
                            <div class="megamenu">
                                <div class="megamenu-row">
                                    <div class="col3">
                                        <ul class="list-unstyled">
                                            <li><a href="shortcode-alert.html">Alert</a>
                                            </li>
                                            <li><a href="shortcode-buttons.html">Buttons</a>
                                            </li>
                                            <li><a href="shortcode-career.html">Career</a>
                                            </li>
                                            <li><a href="shortcode-carousel.html">Carousel</a>
                                            </li>
                                            <li><a href="shortcode-clients.html">Clients</a>
                                            </li>
                                            <li><a href="shortcode-countdown.html">Countdown</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled">
                                            <li><a href="shortcode-divider.html">Divider</a>
                                            </li>
                                            <li><a href="shortcode-featured-box.html">Featured Box</a>
                                            </li>
                                            <li><a href="shortcode-fun-factors.html">Fun Factors</a>
                                            </li>
                                            <li><a href="shortcode-heading-style.html">Heading Style</a>
                                            </li>
                                            <li><a href="shortcode-icon-list.html">Icon List</a>
                                            </li>
                                            <li><a href="shortcode-post.html">Post</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled">
                                            <li><a href="shortcode-pricing-table.html">Pricing Table </a>
                                            </li>
                                            <li><a href="shortcode-progress-bar.html">Progress Bar </a>
                                            </li>
                                            <li><a href="shortcode-promo-box.html">Promo box </a>
                                            </li>
                                            <li><a href="shortcode-subscribe.html">Subscribe</a>
                                            </li>
                                            <li><a href="shortcode-tabs.html">Tabs</a>
                                            </li>
                                            <li><a href="shortcode-tables.html">Tables</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled">
                                            <li><a href="shortcode-team.html">Team</a>
                                            </li>
                                            <li><a href="shortcode-testimonial.html">Testimonials </a>
                                            </li>
                                            <li><a href="shortcode-timeline.html">Timeline </a>
                                            </li>
                                            <li><a href="shortcode-toggle-accordion.html">Toggle Accordion </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>



                            <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a>
                            </li>

                            <li class="cart-info">
                                <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> cart(2)</a>
                                <div class="megamenu megamenu-quarter-width ">
                                    <div class="megamenu-row">
                                        <div class="col12">

                                            <!--cart-->
                                            <table class="table cart-table-list table-responsive">
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="{{asset('assets/img/product/1.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td><a href="#"> Women's Top</a>
                                                    </td>
                                                    <td>X4</td>
                                                    <td>$ 122.00</td>
                                                    <td>
                                                        <a href="#" class="close">
                                                            <img src="{{asset('assets/img/product/close.png')}}" alt="" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="{{asset('assets/img/product/2.jpg')}}" alt="" />
                                                        </a>
                                                    </td>
                                                    <td><a href="#"> Men's T-shirt</a>
                                                    </td>
                                                    <td>X4</td>
                                                    <td>$ 122.00</td>
                                                    <td>
                                                        <a href="#" class="close">
                                                            <img src="{{asset('assets/img/product/close.png')}}" alt="" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>

                                            <div class="total-cart pull-right">
                                                <ul>
                                                    <li><span>Sub Total</span>  <span>$ 2000.00 </span>
                                                    </li>
                                                    <li><span>Total </span>  <span>$ 2000.00 </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="s-cart-btn pull-right">
                                                <a href="shop-cart.html" class="btn btn-small btn-theme-color"> View cart</a>
                                                <a href="#" class="btn btn-small btn-dark-solid"> Checkout</a>
                                            </div>
                                            <!--cart-->

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                                <div class="megamenu megamenu-quarter-width navbar-search">
                                    <form role="searchform">
                                        <input type="text" class="form-control" placeholder="Search Here">
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->


        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase">Shop - 4 Column</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Product</a>
                    </li>
                    <li class="active">Shop - 4 Column</li>
                </ol>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content product-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--product option-->
                            <div class="clearfix m-bot-30 inline-block">
                                <div class="pull-left">
                                    <form method="post" action="#">
                                        <select class="form-control">
                                            <option>Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average ratings</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>

                                <div class="pull-left m-top-5 m-left-10">
                                    Showing 1–10 of 55 results
                                </div>

                                <div class="pull-right shop-view-mode">
                                    <a href="#"> <i class="fa fa-th-large"></i>
                                    </a>
                                    <a href="#"> <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--product option-->
                            <div class="row">
                                @foreach($products as $key => $item)
                                <div class="col-md-3">
                                <!--product list-->
                                <div class="product-list">
                                    <div class="product-img">
                                        <a href="{{ route('product_detail',$item->id) }}">
                                            <img src="{{asset('upload/' . $item->image)}}" alt="" width="150" height="200">
                                        </a>
                                        @if($item->sale_price > 0)
                                        <div class="sale-label">
                                            Sale
                                        </div>
                                        @endif
                                    </div>
                                    <div class="product-title">
                                        <h5><a href="#">{{$item->name}}</a></h5>
                                    </div>
                                    <div class="product-price">
                                        @if($item->sale_price > 0)
                                        <del>{{$item->price}}</del> {{$item->sale_price}}
                                        @else
                                        {{$item->price}}
                                        @endif
                                    </div>

                                    <div class="product-btn">
                                        <a href="{{ route('product_detail',$item->id) }}" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <!--product list-->
                                </div>
                                @endforeach
                                            <!--product list-->

                                    <!--product list-->
                                </div>

                                <div class="text-center col-md-12">
                                    <ul class="pagination custom-pagination">
                                        <li><a href="#">Prev</a>
                                        </li>
                                        <li class="active"><a href="#">1</a>
                                        </li>
                                        <li><a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li>
                                        <li><a href="#">4</a>
                                        </li>
                                        <li><a href="#">5</a>
                                        </li>
                                        <li><a href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

        <!--footer start 1-->
        <footer id="footer" class="dark">
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="m-bot-20 footer-logo">
                                <img class="retina" src="{{asset('assets/img/logo-dark.png')}}" alt="" />
                            </a>
                            <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">recent posts</h5>
                            <ul class="f-list">
                                <li><a href="#">Standard Blog post</a>
                                </li>
                                <li><a href="#">Quotation post</a>
                                </li>
                                <li><a href="#">Audio Post</a>
                                </li>
                                <li><a href="#">Massive Video Demo</a>
                                </li>
                                <li><a href="#">Blog Image Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">quick link</h5>
                            <ul class="f-list">
                                <li><a href="#">About Massive</a>
                                </li>
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Terms & Condition</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Recent Work</h5>
                            <ul class="r-work">
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/1.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/2.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/3.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/4.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/5.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/6.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/7.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/8.jpg')}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('assets/img/recent-work/9.jpg')}}" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer 1 end-->

    </div>


    <!-- inject:js -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-validator/validator.min.js')}}"></script>
    <script src="{{asset('assets/vendor/breakpoint/breakpoint.js')}}"></script>
    <script src="{{asset('assets/vendor/count-to/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/vendor/countdown/jquery.countdown.js')}}"></script>
    <script src="{{asset('assets/vendor/easing/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/vendor/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/elasic-slider/jquery.eislideshow.js')}}"></script>
    <script src="{{asset('assets/vendor/flex-slider/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('assets/vendor/gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/images-loaded/imagesloaded.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope/jquery.isotope.js')}}"></script>
    <script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/mailchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/vendor/menuzord/menuzord.js')}}"></script>
    <script src="{{asset('assets/vendor/nav/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/parallax-js/parallax.min.js')}}"></script>
    <script src="{{asset('assets/vendor/smooth/smooth.js')}}"></script>
    <script src="{{asset('assets/vendor/sticky/jquery.sticky.min.js')}}"></script>
    <script src="{{asset('assets/vendor/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('assets/vendor/typist/typist.js')}}"></script>
    <script src="{{asset('assets/vendor/visible/visible.js')}}"></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
