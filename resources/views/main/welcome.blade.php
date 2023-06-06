<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Neoncart</title>

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/logo/favourite_icon_01.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
{{--<div id="preloader">--}}
{{--    <img class="logo" src="assets/images/logo/logo_01_1x.png" alt="" width="119" height="58">--}}
{{--    <div id="status">--}}
{{--    </div>--}}
{{--</div>--}}
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
                            <img src="assets/images/logo/logo_01_1x.png" srcset="assets/images/logo/logo_01_2x.png 2x"
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
                                        <img src="assets/images/icons/user.png" alt="user_icon">
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
                                                    <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
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
                                        <img src="assets/images/icons/shopping_cart.png" alt="user_icon">
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
                                                                            <img src="{{ !is_null($category->image) ? $category->image : "assets/images/home_pages/carparts.png" }}"
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
                <li><a href="{{ route('main.shop_cart') }}">View Cart</a></li>
            </ul>
        </div>

        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="{{ route("main") }}">
                    <img src="assets/images/logo/logo_25_1x.png" srcset="assets/images/logo/logo_25_2x.png 2x"
                         alt="logo_not_found">
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
                            <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
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
    <div
        class="breadcrumb_section carparts_breadcrumb text-white text-center text-uppercase d-flex align-items-end clearfix"
        data-background="assets/images/breadcrumb/bg-02.avif">
        <div class="container">
            <ul class="breadcrumb_nav ul_li_center clearfix">
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->




    <div class="container">
        <hr class="m-0">
    </div>

    <!-- product_section - start
			================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_filetr_bar clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ul class="carparts_layout_btns nav ul_li" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#grid_layout"><i class="fas fa-th"></i></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#list_layout"><i class="fas fa-list"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h4 class="result_text text-center">
                            {!! __('Showing') !!}
                            <span class="fw-semibold">{{ $all->firstItem() }}</span>
                            {!! __('to') !!}
                            <span class="fw-semibold">{{ $all->lastItem() }}</span>
                            {!! __('of') !!}
                            <span class="fw-semibold">{{ $all->total() }}</span>
                            {!! __('results') !!}
                        </h4>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="option_select d-flex align-items-center mb-0">
                            <span class="option_title text-uppercase">Sort by:</span>
                            <form id="sortForm" action="/" method="GET">
                                <select name="sort" onchange="updateSort()">
                                    <option value="id=desc" {{ (isset($sort['id']) && $sort['id'] == "desc") ? 'selected disabled' : (isset($sort) ? '' : 'selected disabled') }}>New</option>
                                    <option value="id=asc" {{ (isset($sort['id']) && $sort['id'] == "asc") ? 'selected disabled' : '' }}>Old</option>
                                    <option value="price=desc" {{ (isset($sort['price']) && $sort['price'] == "desc") ? 'selected disabled' : '' }}>Price Up</option>
                                    <option value="price=asc" {{ (isset($sort['price']) && $sort['price'] == "asc") ? 'selected disabled' : '' }}>Price Down</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <script>
                        function updateSort() {
                            var select = document.getElementById('sortForm').querySelector('select');
                            var selectedValue = select.value;

                            var sortParam = '';

                            if (selectedValue.includes('id=')) {
                                var sortValue = selectedValue.split('=')[1];
                                sortParam = 'sort[id]=' + sortValue;
                            } else if (selectedValue.includes('price=')) {
                                var sortValue = selectedValue.split('=')[1];
                                sortParam = 'sort[price]=' + sortValue;
                            }

                            var url = window.location.pathname + '?' + sortParam;
                            window.location.href = url;
                        }
                    </script>
                </div>
            </div>
            <div class="tab-content">
                <div id="grid_layout" class="tab-pane active">
                    <div class="row mb_50 justify-content-center">
                        @foreach($all as $data)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee"
                                     style="background: rgb(240, 238, 238);">
                                    <div class="item_image" data-bg-color="#f8f8f8"
                                         style="background: rgb(248, 248, 248);">
                                        <img src="{{ !is_null($data->image) ? $data->image : "assets/images/shop/car_parts/img_01.png"    }}" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                   href="#!"><i class="fal fa-shopping-basket" onclick="addToCart.call(this);"></i></a></li>
                                            <li><a class="tooltips fal fa-search" data-placement="top"
                                                   title="Quick View" href="{{ route('product.detail',$data->id) }}"
                                                   data-target="#quickview_modal"></a></li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            @for($i = 0; $i < $data->grade; $i++)
                                                <li><i class="fas fa-star"></i></li>
                                            @endfor
                                            @for($i = $data->grade; $i < 5; $i++)
                                                <li><i class="fal fa-star"></i></li>
                                            @endfor
                                        </ul>
                                        <h3 class="item_title" id="{{$data->id}}">
                                            <a href="{{ route('product.detail',$data->id) }}">{{ $data->name  }}</a>
                                        </h3>
                                        <span class="price_text"><strong>${{ $data->price }}</strong><del>${{ $data->old_price }}</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        @if($data->hot)
                                            <li class="bg_carparts_red">Hot</li>
                                        @endif
                                        @if($data->new)
                                            <li class="bg_carparts_red">New</li>
                                        @endif
                                        @if($data->sale)
                                            <li class="bg_carparts_red">Sale</li>
                                        @endif
                                        @if($data->discount)
                                            <li class="bg_carparts_red">DISCOUNT</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="carparts_pagination_wrap clearfix center d-flex justify-content-center">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                {{ $all->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                <div id="list_layout" class="tab-pane fade">
                    <div class="mb_50">
                        @foreach($all as $data)
                            <div class="carparts_product_listlayout" data-bg-color="#f0eeee"
                                 style="background: rgb(240, 238, 238);">
                                <div class="item_image" data-bg-color="#f8f8f8" style="background: rgb(248, 248, 248);">
                                    <img src="{{!is_null($data->image) ? $data->image :"assets/images/shop/car_parts/img_01.png"}}" alt="image_not_found">
{{--                                    <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">--}}
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        @if($data->hot)
                                            <li class="bg_carparts_red">Hot</li>
                                        @endif
                                        @if($data->new)
                                            <li class="bg_carparts_red">New</li>
                                        @endif
                                        @if($data->sale)
                                            <li class="bg_carparts_red">Sale</li>
                                        @endif
                                        @if($data->discount)
                                            <li class="bg_carparts_red">DISCOUNT</li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        @for($i = 0; $i < $data->grade; $i++)
                                            <li><i class="fas fa-star"></i></li>
                                        @endfor
                                        @for($i = $data->grade; $i < 5; $i++)
                                            <li><i class="fal fa-star"></i></li>
                                        @endfor
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="{{ route('product.detail',$data->id) }}">{{ $data->name  }}</a>
                                    </h3>
                                    <p class="mb-0">
                                        {{ $data->description }}
                                    </p>
                                    <div class="action_btns_wrap">
                                        <span class="price_text"><strong>${{ $data->price }}</strong> <del>${{ $data->old_price }}</del></span>
                                        <ul class="product_action_btns ul_li clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                   href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips fal fa-search" data-placement="top"
                                                   title="Quick View" href="{{ route('product.detail',$data->id) }}"
                                                   data-target="#quickview_modal"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="carparts_pagination_wrap clearfix d-flex justify-content-lg-end">
                        <div class="row align-items-center justify-content-lg-between">

                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <ul class="carparts_pagination_nav ul_li_right clearfix">
                                    {{$all->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- product_section - end
			================================================== -->


    <!-- carparts_newsletter - start
    ================================================== -->
    <section class="carparts_newsletter sec_ptb_100 clearfix" data-bg-color="#ebebeb">
        <div class="container">
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
                            <a href="{{ route("main") }}">
                                <img src="{{ asset("assets/images/logo/logo_02_1x.png") }}"
                                     srcset="{{ asset("assets/images/logo/logo_02_2x.png") }} 2x" alt="logo_not_found">
                            </a>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci animi distinctio earum eligendi eos excepturi exercitationem hic iste magnam molestias
                            non obcaecati.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom clearfix" data-bg-color="#000000">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="copyright_text mb-0">© <a href="#!" class="author_link text-white">Neoncart</a> - All
                        rights Reserved</p>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="payment_methods float-lg-right">
                        <img src="assets/images/payment_methods_01.png" alt="image_not_found">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_section - end
================================================== -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
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

<!-- fraimwork - jquery include -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- mobile menu - jquery include -->
<script src="assets/js/mCustomScrollbar.js"></script>

<!-- google map - jquery include -->
<script src="assets/js/gmaps.min.js"></script>

<!-- animation - jquery include -->
<script src="assets/js/parallaxie.js"></script>
<script src="assets/js/wow.min.js"></script>

<!-- nice select - jquery include -->
<script src="assets/js/nice-select.min.js"></script>

<!-- carousel - jquery include -->
<script src="assets/js/slick.min.js"></script>

<!-- countdown timer - jquery include -->
<script src="assets/js/countdown.js"></script>

<!-- popup images & videos - jquery include -->
<script src="assets/js/magnific-popup.min.js"></script>

<!-- filtering & masonry layout - jquery include -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<!-- jquery ui - jquery include -->
<script src="assets/js/jquery-ui.js"></script>

<!-- custom - jquery include -->
<script src="assets/js/custom.js"></script>

<!-- shop_section - end
    ================================================== -->


</body>
</html>
