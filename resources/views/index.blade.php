@extends('layout.main')
@section('title','Trang Danh Sách Sản Phẩm')
@section('content')


<div class="page-content p-bot-0">
    <!--portfolio-->
    <div class="text-center">
        <ul class="portfolio-filter">
            <li class="active"><a href="#" data-filter="*"> All</a>
            </li>
            <li><a href="#" data-filter=".cat1">printing</a>
            </li>
            <li><a href="#" data-filter=".cat2">Web</a>
            </li>
            <li><a href="#" data-filter=".cat3">illustration</a>
            </li>
            <li><a href="#" data-filter=".cat4">media</a>
            </li>
            <li><a href="#" data-filter=".cat5">crafts</a>
            </li>
        </ul>
    </div>

    <div class="portfolio col-4 m-bot-0 inline-block">

        <div class="portfolio-item cat1 cat3 ">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/01.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="{{asset('assets/img/portfolio/01.jpg')}}" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{asset('assets/img/portfolio/01.jpg')}}" class="popup-link" title="lightbox view">lightbox view</a></h4>
                        <p><a href="#">category</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat2 cat4">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/02.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="portfolio-single.html"> <i class="icon-basic_link"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="portfolio-single.html">External link</a></h4>
                        <p><a href="#">category 1</a> , <a href="#">category 2</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat1 cat2">
            <div class="thumb">

                <div class="portfolio-slider">
                    <ul class="slides">
                        <li>
                            <a href="{{asset('assets/img/portfolio/07.jpg')}}" title="Freshness Photo">
                                <img src="{{asset('assets/img/portfolio/07.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/portfolio/07a.jpg')}}" title="Awesome Lightbox">
                                <img src="{{asset('assets/img/portfolio/07a.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/portfolio/07b.jpg')}}" title="Massive UI Components">
                                <img src="{{asset('assets/img/portfolio/07b.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/portfolio/07c.jpg')}}" title="Amazing Theme">
                                <img src="{{asset('assets/img/portfolio/07c.jpg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="#"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">lightbox Gallary</a></h4>
                        <p><a href="#">category</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat1 cat4">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/03.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a class="popup-vimeo" href="https://vimeo.com/45830194"> <i class="icon-arrows_keyboard_right"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a class="popup-vimeo" href="https://vimeo.com/45830194" >Video lightbox</a></h4>
                        <p><a href="#">category</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat2 cat4">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/04.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="{{asset('assets/img/portfolio/04.jpg')}}" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{asset('assets/img/portfolio/04.jpg')}}" class="popup-link" title="lightbox view">lightbox view</a></h4>
                        <p><a href="#">category 3</a> , <a href="#">category 4</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat3 ">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/05.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="portfolio-single.html"> <i class="icon-basic_link"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="portfolio-single.html">External link</a></h4>
                        <p><a href="#">category</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat2 cat5 ">
            <div class="thumb">

                <div class="portfolio-slider-alt">
                    <ul class="slides">
                        <li>
                            <a href="{{asset('assets/img/portfolio/08.jpg')}}" title="Freshness">
                                <img src="{{asset('assets/img/portfolio/08.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/portfolio/08a.jpg')}}" title="Massive">
                                <img src="{{asset('assets/img/portfolio/08a.jpg')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/portfolio/08b.jpg')}}" title="Bootstrap">
                                <img src="{{asset('assets/img/portfolio/08b.jpg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="#"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">lightbox gallery</a></h4>
                        <p><a href="#">category</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-item cat1 cat4 cat3 cat5">
            <div class="thumb">
                <img src="{{asset('assets/img/portfolio/06.jpg')}}" alt="">
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <a href="{{asset('assets/img/portfolio/06.jpg')}}" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                        </a>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="{{asset('assets/img/portfolio/06.jpg')}}" class="popup-link" title="lightbox view">lightbox view</a></h4>
                        <p><a href="#">category 5</a> , <a href="#">category 6</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--portfolio-->

</div>

<div class="page-content product-grid">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <!--product option-->
                <div class="clearfix m-bot-30 inline-block">

                    <div class="pull-left">
                        <form method="get" action="#" >
                            <div>
                            <select class="form-control" name="order_by">
                                <option value="">Mặc định</option>
                                @foreach(config('common.product_order_by') as $k => $val)
                                <option value="{{$k}}">{{$val}}
                                </option>
                                @endforeach
                            </select>
                            </div>

                            <button  type="submit"  >
                                Tìm Kiếm
                            </button>

                        </form>
                    </div>
                    </div>



                    <div class="pull-right shop-view-mode">
                        <a href="#"> <i class="fa fa-th-large"></i>
                        </a>
                        <a href="#"> <i class="fa fa-th-list"></i>
                        </a>
                    </div>

                </div>
                <!--product option-->
                <div class="">
                    @foreach($products as $key => $item)
                    <div class="col-md-4">
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
                                <del>{{$item->price}} VND</del> {{$item->sale_price}} VND
                                @else
                                {{$item->price}} VND
                                @endif
                            </div>

                            <div class="product-btn">
                                <a href="{{ route('product_detail',$item->id) }}" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    @endforeach



                </div>
            </div>

            <div class="col-md-3 ">
                <!--product category-->
                <div class="widget">


                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Category List</h6>
                    </div>
                    @foreach ($cate as $c)
                    <ul class="widget-category">
                        <li><a href="{{ route('category',$c->id) }}">{{$c->name}}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <!--product category-->

                <!--latest product-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Latest Products</h6>
                    </div>
                    <ul class="widget-latest-post">
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('assets/img/product/1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Praesent pellentesque</a>
                                <div class="price">$25.99</div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-cart">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('assets/img/product/2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Shirt With Mesh Sleeves</a>
                                <div class="price">$35.99</div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-cart">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('assets/img/product/3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Checked Short Dress</a>
                                <div class="price">$45.99</div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-cart">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--latest product-->


                <!--top rated product-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Top Rated Products</h6>
                    </div>
                    <ul class="widget-latest-post">
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('assets/img/product/4.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Praesent pellentesque</a>
                                <div class="price">$25.99</div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-cart">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('assets/img/product/5.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="w-desk">
                                <a href="#">Shirt With Mesh Sleeves</a>
                                <div class="price">$35.99</div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-cart">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--top rated product-->

            </div>
            
        </div>
    </div>
</div>
<hr/>

<!--clients-->
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="clients-1">
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-1.png')}}" alt="Clients">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-2.png')}}" alt="Clients">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-3.png')}}" alt="Clients">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-4.png')}}" alt="Clients">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-5.png')}}" alt="Clients">
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/img/clients/c-6.png')}}" alt="Clients">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--clients-->
@endsection
