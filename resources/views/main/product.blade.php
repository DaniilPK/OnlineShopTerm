<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Shop Details - Neoncart HTML5 Template</title>
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/favourite_icon_01.png") }}" >

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.min.css") }}">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/fontawesome.css") }}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/animate.css") }}">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/nice-select.css") }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/slick.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/slick-theme.css") }}">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/magnific-popup.css") }}">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/jquery-ui.css") }}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body class="home_carparts">


<!-- backtotop - start -->
<div id="thetop"></div>
<div class="backtotop bg_default_red">
    <a href="#" class="scroll">
        <i class="far fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader - start -->
<!-- <div id="preloader"></div> -->
<!-- preloader - end -->


<!-- header_section - start
================================================== -->
<header class="header_section carparts_header clearfix">
    <div class="container">
        <div class="content_wrap">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ route("main") }}">
                            <img src="{{ asset('assets/images/logo/logo_01_1x.png') }}" srcset="{{ asset('assets/images/logo/logo_01_2x.png') }} 2x"
                                 alt="logo_not_found">
                        </a>

                        <ul class="mh_action_btns ul_li clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse"
                                        data-target="#search_body_collapse" aria-expanded="false"
                                        aria-controls="search_body_collapse">
                                    <i class="fal fa-search"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge"></span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="header_top">
                        <div class="row w-100 d-flex align-items-center justify-content-lg-between">
                            <div class="col-lg-6">
                                <form action="#">
                                    <div class="form_item search_box">
                                        <input type="search" name="search" placeholder="Search">
                                        <button type="submit" class="submit_btn bg_carparts_red"><i
                                                class="fal fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-3">
                                <div class="login_cart_btn user_btn" data-toggle="collapse" role="button"
                                     data-target="#use_deropdown" aria-expanded="false" aria-controls="use_deropdown">
                                    <div class="item_icon">
                                        <img src="{{ asset('assets/images/icons/user.png') }}" alt="user_icon">
                                    </div>
                                    <div class="item_content">
                                        @if(!Auth::user())
                                            <a href="{{route('login')}}"><strong>Login</strong></a>
                                        @else
                                            <strong>My Account</strong>
                                        @endif
                                    </div>
                                </div>
                                @if(Auth::user())
                                    <div id="use_deropdown" class="collapse_dropdown collapse">
                                        <div class="dropdown_content">
                                            <div class="profile_info clearfix">
                                                <div class="user_thumbnail">
                                                    <img src="{{ asset('assets/images/meta/img_01.png') }}" alt="thumbnail_not_found">
                                                </div>
                                                <div class="user_content">
                                                    <h4 class="user_name">{{ Auth::user()->name }}</h4>
                                                </div>
                                            </div>
                                            <ul class="settings_options ul_li_block clearfix">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fal fa-sign-out-alt"></i> Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="col-lg-3">
                                <div class="login_cart_btn cart_btn">
                                    <div class="item_icon">
                                        <img src="{{ asset('assets/images/icons/shopping_cart.png') }}" alt="user_icon">
                                    </div>
                                    <div class="item_content">
                                        <span>Shopping Cart</span>
                                        <strong class="cart">$0.00</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header_bottom">
                        <nav class="main_menu clearfix">
                            <ul class="ul_li clearfix">
                                <li class="menu_item_has_child">
                                    <a href="#!">Home</a>
                                    <div class="mega_menu pt-0 text-center">
                                        <div class="background" data-bg-color="#ffffff">
                                            <div class="container">
                                                <ul class="home_pages ul_li clearfix">
                                                    @foreach($categories as $category)
                                                        <li>
                                                            <a href="{{ route('list.category',$category->id) }}">
                                                                        <span class="item_image">
                                                                            <img src="{{ !is_null($category->image) ? $category->image : asset('assets/images/home_pages/carparts.png') }}"
                                                                                 alt="image_not_found">
                                                                        </span>
                                                                <span class="item_title">{{$category->name}}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

            <div id="search_body_collapse" class="search_body_collapse collapse">
                <div class="search_body">
                    <div class="container-fluid prl_90">
                        <form action="#">
                            <div class="form_item mb-0">
                                <input type="search" name="search" placeholder="Type here...">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header_section - end
================================================== -->


<!-- main body - start
================================================== -->
<main>


    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="cart_sidebar">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <ul class="cart_items_list ul_li_block mb_30 clearfix">
                @if(isset($baskets))
                    @foreach($baskets as $basket)

                        <li>
                            <div class="item_image">
                                <img src="{{ isset($basket->image) ? asset($basket->image) : "assets/images/cart/img_01.jpg" }}" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title" id="{{ $basket->id }}">{{ $basket->name }}</h4>
                                <span class="item_price">${{ $basket->price}}</span>

                                <span class="item_count"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left decrease_count" viewBox="0 0 16 16">
                                      <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                                    </svg>
                                   {{ $basket->products_count  }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right increase_count" viewBox="0 0 16 16">
                                      <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                                    </svg>
                                </span>
                            </div>
                            <button type="button" class="remove_btn" ><i class="fal fa-trash-alt"></i></button>
                        </li>
                    @endforeach
                @endif
            </ul>

            <ul class="total_price ul_li_block mb_30 clearfix">
                <li>
                    <span>Subtotal:</span>
                    <span>$90</span>
                </li>
                <li>
                    <span>Vat 5%:</span>
                    <span>$4.5</span>
                </li>
                <li>
                    <span>Discount 20%:</span>
                    <span>- $18.9</span>
                </li>
                <li>
                    <span>Total:</span>
                    <span>$75.6</span>
                </li>
            </ul>

            <ul class="btns_group ul_li_block clearfix">
                <li><a href="shop_cart.html">View Cart</a></li>
            </ul>
        </div>

        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="{{ route('main') }}">
                    <img src="{{ asset("assets/images/logo/logo_25_1x.png") }}"  srcset="{{ asset("assets/images/logo/logo_25_2x.png") }} 2x"  alt="logo_not_found">
                </a>
            </div>

            <div class="msb_widget mobile_menu_list clearfix">
                <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="ul_li_block dropdown-menu">
                            @foreach($categories as $category)
                                <li><a href="{{ route('list.category',$category->id) }}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="user_info">
                @if(Auth::user())
                    <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                    <div class="profile_info clearfix">
                        <div class="user_thumbnail">
                            <img src="{{ asset('assets/images/meta/img_01.png') }}" alt="thumbnail_not_found">
                        </div>
                        <div class="user_content">
                            <h4 class="user_name">{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                    <ul class="settings_options ul_li_block clearfix">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"><i class="fal fa-sign-out-alt"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('login') }}"><h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i>Login</h3></a>
                @endif
            </div>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->


    <!-- breadcrumb_section - start
    ================================================== -->
    <div class="breadcrumb_section carparts_breadcrumb text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="{{ asset("assets/images/breadcrumb/bg-02.avif") }}" >
        <div class="container">
            <ul class="breadcrumb_nav ul_li_center clearfix">
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- details_section - start
    ================================================== -->
    <section class="details_section shop_details sec_ptb_140 pb-0 clearfix">
        <div class="container">
            <div class="row mb_100 justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="shop_details_image">
                        <div class="tab-content">
                            <div id="tab_1" class="tab-pane active">
                                <img src="{{ isset($product->image) ? asset($product->image) : asset("assets/images/details/carparts/img_01.jpg") }}"  alt="image_not_found">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="shop_details_content">
                        <div class="rating_review_wrap d-flex align-items-center mb_15 clearfix">
                            <ul class="rating_star ul_li">
                                @for($i = 0; $i < $product->grade; $i++)
                                    <li><i class="fas fa-star"></i></li>
                                @endfor
                                @for($i = $product->grade; $i < 5; $i++)
                                    <li><i class="fal fa-star"></i></li>
                                @endfor
                            </ul>
                        </div>
                        <h2 class="item_title mb-2">{{ $product->name }}</h2>
                        <p class="mb-0">
                            {{ $product->description }}
                        </p>

                        <hr>



                        <ul class="btns_group_1 ul_li mb_30 clearfix">
                            <li>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" type="text" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <a class="custom_btn bg_black text-uppercase" href="#!" id="{{ $product->id }}" onclick="addToCartProduct.call(this);"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
                            </li>
                        </ul>

                        <hr>

                        <ul class="product_info ul_li_block mb_30 clearfix">
                            <li class="price"><strong>Price:</strong>
                                ${{ $product->price }}
                            </li>
                            <li><strong>Categories:</strong>
                                <a href="{{ route('list.category',$category->id) }}">{{ $category->name }}</a>
                            </li>
                            <li><strong>Tags:</strong>
                                @if($product->hot)
                                    <a href="#!">Hot</a>
                                @endif
                                @if($product->new)
                                    <a href="#!">New</a>
                                @endif
                                @if($product->sale)
                                    <a href="#!">Sale</a>
                                @endif
                                @if($product->discount)
                                    <a href="#!">DISCOUNT</a>
                                @endif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="details_description_tab">
                <ul class="nav ul_li_center text-uppercase" role="tablist">
                    <li>
                        <a class="active" data-toggle="tab" href="#description_tab">Product Description</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#reviews_tab">Reviews</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="description_tab" class="tab-pane active">
                        <p class="mb-0">
                            {{ $product->description }}
                        </p>
                    </div>

                    <div id="reviews_tab" class="tab-pane fade">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="custom_btn bg_default_red text-uppercase">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_section_title text-center mb_15">
                <h2 class="title_text mb-0">Related Products</h2>
            </div>

            <div class="row">
                @foreach($latestProducts as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="carparts_product_grid" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="{{ isset($product->image) ? asset($product->image) : asset("assets/images/shop/car_parts/img_01.png") }}"  alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                       href="#!"><i class="fal fa-shopping-basket" onclick="addToCart.call(this);"></i></a></li>
                                <li><a class="tooltips fal fa-search" data-placement="top"
                                       title="Quick View" href="{{ route('product.detail',$product->id) }}"
                                       data-target="#quickview_modal"></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                @for($i = 0; $i < $product->grade; $i++)
                                    <li><i class="fas fa-star"></i></li>
                                @endfor
                                @for($i = $product->grade; $i < 5; $i++)
                                    <li><i class="fal fa-star"></i></li>
                                @endfor
                            </ul>
                            <h3 class="item_title" id="{{$product->id}}">
                                <a href="{{ route('product.detail',$product->id) }}">{{ $product->name  }}</a>
                            </h3>
                            <span class="price_text"><strong>${{ $product->price }}</strong><del>${{ $product->old_price }}</del></span>
                        </div>
                        <ul class="product_label ul_li text-uppercase clearfix">
                            @if($product->hot)
                                <li class="bg_carparts_red">Hot</li>
                            @endif
                            @if($product->new)
                                <li class="bg_carparts_red">New</li>
                            @endif
                            @if($product->sale)
                                <li class="bg_carparts_red">Sale</li>
                            @endif
                            @if($product->discount)
                                <li class="bg_carparts_red">DISCOUNT</li>
                            @endif
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- carparts_newsletter - start
    ================================================== -->
    <section class="carparts_newsletter sec_ptb_100 clearfix" data-bg-color="#ebebeb">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                    <h2 class="newsletter_title">
                        <i class="fal fa-paper-plane"></i>
                        Join Our Newsletter Now
                    </h2>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="form_item">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <button type="submit" class="custom_btn bg_carparts_red">SUBCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carparts_newsletter - end
    ================================================== -->


</main>
<!-- main body - end
================================================== -->


<!-- footer_section - start
================================================== -->
<footer class="footer_section carparts_footer text-white clearfix">
    <div class="footer_widget_area sec_ptb_100 clearfix" data-bg-color="#131313">
        <div class="container">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_about">
                        <div class="brand_logo mb_30">
                            <a href="{{ route('main') }}">
                                <img src="{{ asset("assets/images/logo/logo_02_1x.png") }}"  srcset="{{ asset("assets/images/logo/logo_02_2x.png") }}  2x"  alt="logo_not_found">
                            </a>
                        </div>

                        <p>
                            This gearbox is an OEM Saginaw casting, fully remanufactured in the USA. All our remanufactured steering gearboxes and racks receive a thorough cleaning and inspection,
                        </p>

                        <div class="footer_carparts_hotline">
                            <h4>Got questions? Call us 24/7!</h4>
                            <span>(800) 8001-8588, (0600) 874 548</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title text-white">Find it Fast</h3>
                        <ul class="ul_li_block">
                            <li><a href="#!">Laptops & Computers</a></li>
                            <li><a href="#!">Cameras & Photography</a></li>
                            <li><a href="#!">Smart Phones & Tablets</a></li>
                            <li><a href="#!">Video Games & Consoles</a></li>
                            <li><a href="#!">TV & Audio</a></li>
                            <li><a href="#!">Gadgets</a></li>
                            <li><a href="#!">Car Electronic & GPS</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_useful_links clearfix">
                        <h3 class="footer_widget_title text-white">Customer Care</h3>
                        <ul class="ul_li_block">
                            <li><a href="#!">My Account</a></li>
                            <li><a href="#!">Order Tracking</a></li>
                            <li><a href="#!">Wish List</a></li>
                            <li><a href="#!">Customer Service</a></li>
                            <li><a href="#!">Returns / Exchange</a></li>
                            <li><a href="#!">FAQs</a></li>
                            <li><a href="#!">Product Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_widget footer_instagram">
                        <h3 class="footer_widget_title text-white">Customer Care</h3>
                        <ul class="zoom-gallery ul_li clearfix">
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_01.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_01.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_02.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_02.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_03.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_03.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_04.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_04.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_05.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_05.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_06.jpg") }}" >
                                    <img src="{{ asset("assets/images/instagram/img_06.jpg") }}"  alt="image_not_found">
                                </a>
                            </li>
                        </ul>
                        <strong class="brand_name">@neoncart</strong>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom clearfix" data-bg-color="#000000">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="copyright_text mb-0">© <a href="#!" class="author_link text-white">Neoncart</a> - All rights Reserved</p>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="payment_methods float-lg-right">
                        <img src="{{ asset("assets/images/payment_methods_01.png") }}"  alt="image_not_found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_section - end
================================================== -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset("assets/js/jquery-3.7.0.min.js") }}"></script>
<script>
    $(document).ready(function(){
        calculateTotal();
    });

    const decreaseIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left decrease_count" viewBox="0 0 16 16">' +
        '<path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>' +
        '</svg>';

    const increaseIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right increase_count" viewBox="0 0 16 16">' +
        '<path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>' +
        '</svg>';

    function addToCart(){
        console.log('add');

        var id = $(this).closest('.carparts_product_grid').find('.item_title').attr('id');
        console.log(id);


        // Проверяем, существует ли уже элемент с таким же id в корзине
        var existingItem = $('.cart_items_list').find('.item_title[id="' + id + '"]');
        if (existingItem.length > 0) {
            // Элемент уже существует, увеличиваем значение count
            var countElement = existingItem.closest('.item_content').find('.item_count');
            var count = parseInt(countElement.text().replace('count: ', '')) + 1;

            countElement.html(decreaseIcon + count + increaseIcon);

            $.ajax({
                url: "{{ route('main.post.add')}}",
                type: "POST",
                data: { id },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data){
                        console.log(data)
                        calculateTotal();
                    } else {
                        console.log('false')
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'You need to sign in',
                            footer: '<a href="{{ route('login') }}">sign in</a>'
                        })
                    }

                }
            })
        } else {
            // Элемент еще не добавлен, создаем новый элемент корзины
            var itemImage = $(this).closest('.carparts_product_grid').find('.item_image img').attr('src');
            var itemTitle = $(this).closest('.carparts_product_grid').find('.item_title a').text();
            var itemPrice = parseFloat($(this).closest('.carparts_product_grid').find('.price_text strong').text().replace('$', '').replace(',', ''));

            var cartItem = '<li>' +
                '<div class="item_image">' +
                '<img src="' + itemImage + '" alt="image_not_found">' +
                '</div>' +
                '<div class="item_content">' +
                '<h4 class="item_title" id="' + id + '">' + itemTitle + '</h4>' +
                '<span class="item_price">$' + itemPrice.toFixed(2) + '</span>' +
                '<span class="item_count">' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left decrease_count" viewBox="0 0 16 16">' +
                '<path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>' +
                '</svg>' +
                '1' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right increase_count" viewBox="0 0 16 16">' +
                '<path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>' +
                '</svg>' +
                '</span>' +
                '</div>' +
                '<button type="button" class="remove_btn" ><i class="fal fa-trash-alt"></i></button>' +
                '</li>';

            $.ajax({
                url: "{{ route('main.post.add')}}",
                type: "POST",
                data: { id },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    if (data){
                        $('.cart_items_list').append(cartItem);
                        calculateTotal();
                        console.log(data)
                    } else {
                        console.log('false')
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'You need to sign in',
                            footer: '<a href="{{ route('login') }}">sign in</a>'
                        })
                    }

                }
            })
        }




    }

    function addToCartProduct() {
        console.log('addToCartProduct');

        var id = $(this).attr('id');
        var itemCount = $(this).closest('ul').find('.quantity_input .input_number').val();

        var existingItem = $('.cart_items_list').find('.item_title[id="' + id + '"]');
        if ( itemCount > 0 ) {
            if (existingItem.length > 0) {
                var countElement = existingItem.closest('.item_content').find('.item_count');
                var count = parseInt(countElement.text().replace('count: ', '')) + parseInt(itemCount);

                countElement.html(decreaseIcon + count + increaseIcon);

                $.ajax({
                    url: "{{ route('main.post.add_many')}}",
                    type: "POST",
                    data: {id, itemCount},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        if (data) {
                            console.log(data)
                            calculateTotal();
                        } else {
                            console.log('false')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'You need to sign in',
                                footer: '<a href="{{ route('login') }}">sign in</a>'
                            })
                        }

                    }
                })
            } else {
                // Элемент еще не добавлен, создаем новый элемент корзины
                var itemImage = $('.shop_details_image img').attr('src');
                var itemTitle = $('.shop_details_content .item_title').text();
                var itemPrice = $(this).closest('div').find('ul.product_info li.price').text().trim();
                itemPrice = itemPrice.substring(itemPrice.indexOf('$') + 1).trim();

                var cartItem = '<li>' +
                    '<div class="item_image">' +
                    '<img src="' + itemImage + '" alt="image_not_found">' +
                    '</div>' +
                    '<div class="item_content">' +
                    '<h4 class="item_title" id="' + id + '">' + itemTitle + '</h4>' +
                    '<span class="item_price">$' + itemPrice + '</span>' +
                    '<span class="item_count">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left decrease_count" viewBox="0 0 16 16">' +
                    '<path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>' +
                    '</svg>' +
                    itemCount +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right increase_count" viewBox="0 0 16 16">' +
                    '<path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>' +
                    '</svg>' +
                    '</span>' +
                    '</div>' +
                    '<button type="button" class="remove_btn" ><i class="fal fa-trash-alt"></i></button>' +
                    '</li>';

                $.ajax({
                    url: "{{ route('main.post.add_many')}}",
                    type: "POST",
                    data: {id, itemCount},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        if (data) {
                            $('.cart_items_list').append(cartItem);
                            calculateTotal();
                            console.log(data)
                        } else {
                            console.log('false')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'You need to sign in',
                                footer: '<a href="{{ route('login') }}">sign in</a>'
                            })
                        }

                    }
                })
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'quantity must be positive',
            })
        }

    }


    $(document).ready(function() {
        $('.cart_items_list').on('click', '.decrease_count', function() {
            var id = $(this).closest('.item_content').find('.item_title').attr('id')
            var countElement = $(this).closest('.item_count');
            var count = parseInt(countElement.text());
            if (!isNaN(count) && count > 1) {
                count--;
                $.ajax({
                    url: "{{ route('main.post.count')}}",
                    type: "POST",
                    data: {
                        id,
                        count
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        if (data){
                            countElement.html(decreaseIcon + count + increaseIcon);
                            calculateTotal();
                        } else {
                            console.log('false')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Error',
                            })
                        }

                    }
                })
            }


        });

        $('.cart_items_list').on('click', '.increase_count', function() {
            var id = $(this).closest('.item_content').find('.item_title').attr('id')
            var countElement = $(this).closest('.item_count');
            var count = parseInt(countElement.text());
            if (!isNaN(count)) {
                count++;

                $.ajax({
                    url: "{{ route('main.post.count')}}",
                    type: "POST",
                    data: {
                        id,
                        count
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        if (data){
                            countElement.html(decreaseIcon + count + increaseIcon);
                            calculateTotal();
                        } else {
                            console.log('false')
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Error',
                            })
                        }

                    }
                })
            }
        });

    });




    $(document).ready(function() {
        $(document).on('click', '.remove_btn', function() {
            var id = $(this).closest('li').find('.item_title').attr('id');
            if (id !== undefined) {
                console.log(id);
                $.ajax({
                    url: "{{ route('main.post.dell')}}",
                    type: "POST",
                    data: { id },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            }
            $(this).closest('li').remove();
            calculateTotal();
        });
    });

    function calculateTotal() {
        var subtotal = 0;
        var totalCount = 0;

        $('.item_content').each(function() {
            var priceElement = $(this).find('.item_price');
            var countElement = $(this).find('.item_count');

            if (priceElement.length > 0 && countElement.length > 0) {
                var price = parseFloat(priceElement.text().replace('$', ''));
                var count = parseInt(countElement.text().replace('count: ', ''));

                if (!isNaN(price) && !isNaN(count)) {
                    subtotal += price * count;
                    totalCount += count;
                }
            }
        });

        // Вычисляем значения НДС (5%) и скидки (20%)
        var vat = subtotal * 0.05;
        var discount = subtotal * 0.2;

        // Вычисляем общую стоимость
        var total = subtotal + vat - discount;

        // Обновляем значения в соответствующих элементах
        $('.total_price li:nth-child(1) span:nth-child(2)').text('$' + subtotal.toFixed(2));
        $('.total_price li:nth-child(2) span:nth-child(2)').text('$' + vat.toFixed(2));
        $('.total_price li:nth-child(3) span:nth-child(2)').text('- $' + discount.toFixed(2));
        $('.total_price li:nth-child(4) span:nth-child(2)').text('$' + total.toFixed(2));

        // Обновляем итоговую сумму в элементе "Shopping Cart"
        $('.item_content strong.cart').text('$' + total.toFixed(2));


        if (totalCount > 99) {
            $('.cart_btn span.btn_badge').text('99+');
        } else {
            $('.cart_btn span.btn_badge').text(totalCount);
        }
    }



</script>


<script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
<script src="{{ asset("assets/js/popper.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>

<!-- mobile menu - jquery include -->
<script src="{{ asset("assets/js/mCustomScrollbar.js") }}"></script>

<!-- google map - jquery include -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
<script src="{{ asset("assets/js/gmaps.min.js") }}"></script>

<!-- animation - jquery include -->
<script src="{{ asset("assets/js/parallaxie.js") }}"></script>
<script src="{{ asset("assets/js/wow.min.js") }}"></script>

<!-- nice select - jquery include -->
<script src="{{ asset("assets/js/nice-select.min.js") }}"></script>

<!-- carousel - jquery include -->
<script src="{{ asset("assets/js/slick.min.js") }}"></script>

<!-- countdown timer - jquery include -->
<script src="{{ asset("assets/js/countdown.js") }}"></script>

<!-- popup images & videos - jquery include -->
<script src="{{ asset("assets/js/magnific-popup.min.js") }}"></script>

<!-- filtering & masonry layout - jquery include -->
<script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/masonry.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>

<!-- jquery ui - jquery include -->
<script src="{{ asset("assets/js/jquery-ui.js") }}"></script>

<!-- custom - jquery include -->
<script src="{{ asset("assets/js/custom.js") }}"></script>

<!-- product quick view - start -->
{{--<div class="quickview_modal modal fade" id="quickview_modal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content clearfix">--}}
{{--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--            </button>--}}
{{--            <div class="item_image">--}}
{{--                <img src="{{ asset() }}" "assets/images/shop/fashion_minimal/img_07.jpg" alt="image_not_found">--}}
{{--            </div>--}}
{{--            <div class="item_content">--}}
{{--                <h2 class="item_title mb_15">Digital Infrared Thermometer</h2>--}}
{{--                <div class="rating_star mb_30 clearfix">--}}
{{--                    <ul class="float-left ul_li mr-2">--}}
{{--                        <li class="active"><i class="las la-star"></i></li>--}}
{{--                        <li class="active"><i class="las la-star"></i></li>--}}
{{--                        <li class="active"><i class="las la-star"></i></li>--}}
{{--                        <li class="active"><i class="las la-star"></i></li>--}}
{{--                        <li><i class="las la-star"></i></li>--}}
{{--                    </ul>--}}
{{--                    <span class="review_text">(12 Reviews)</span>--}}
{{--                </div>--}}
{{--                <span class="item_price mb_15">$49.50</span>--}}
{{--                <p class="mb_30">--}}
{{--                    Best Electronic Digital Thermometer adipiscing elit, sed do eiusmod teincididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse us ultrices gravidaes. Risus commodo viverra maecenas accumsan lacus vel facilisis.--}}
{{--                </p>--}}
{{--                <div class="quantity_form mb_30 clearfix">--}}
{{--                    <strong class="list_title">Quantity:</strong>--}}
{{--                    <div class="quantity_input">--}}
{{--                        <form action="#">--}}
{{--                            <span class="input_number_decrement">–</span>--}}
{{--                            <input class="input_number" type="text" value="1">--}}
{{--                            <span class="input_number_increment">+</span>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <ul class="btns_group ul_li mb_30 clearfix">--}}
{{--                    <li><a href="#!" class="custom_btn bg_carparts_red">Add to Cart</a></li>--}}
{{--                    <li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare Product"><i class="fal fa-sync"></i></a></li>--}}
{{--                    <li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Wishlist"><i class="fal fa-heart"></i></a></li>--}}
{{--                </ul>--}}
{{--                <ul class="info_list ul_li_block clearfix">--}}
{{--                    <li><strong class="list_title">Category:</strong> <a href="#!">Medical Equipment</a></li>--}}
{{--                    <li class="social_icon">--}}
{{--                        <strong class="list_title">Share:</strong>--}}
{{--                        <ul class="ul_li clearfix">--}}
{{--                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- product quick view - end -->
<!-- shop_section - end
    ================================================== -->

</body>
</html>
