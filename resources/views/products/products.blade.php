<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Carparts Shop Grid - Neoncart HTML5 Template</title>
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/favourite_icon_01.png")  }}">

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
<header class="header_section simple_shop_header sticky_header clearfix">
    <div class="header_content_wrap d-flex align-items-center">
        <div class="container maxw_1480">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-4">
                    <nav class="main_menu clearfix">
                        <ul class="ul_li clearfix">
                            <li class="menu_item_has_child">
                                <a href="#!">Home</a>
                                <div class="mega_menu text-center">
                                    <div class="background" data-bg-color="#ffffff">
                                        <div class="container">
                                            <ul class="home_pages ul_li clearfix">
                                                <li>
                                                    <a href="home_carparts.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/carparts.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Car Parts</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_classic_ecommerce.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/classic_ecommarce.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Classic Ecommerce</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_creative_onelook.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/creative_onelook.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Creative Onelook</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_electronic.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/electronic.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Electronic</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_fashion.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/fashion.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Fashion</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_fashion_minimal.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/fashion_minimal.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Fashion Minimal</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_furniture.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/furniture.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Furniture</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_gadget.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/gadget.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Gadget</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_lookbook_creative.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/lookbook_creative.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Lookbook Creative</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_lookbook_slide.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/lookbook_slide.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Lookbook Slide</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_medical.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/medical.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Medical</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_modern.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/modern.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Modern</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_modern_minimal.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/modern_minimal.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Modern Minimal</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_motorcycle.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/motorcycle.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Motorcycle</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_parallax_shop.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/parallax_shop.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Parallax Shop</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_simple_shop.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/simple_shop.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Simple Shop</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_single_story_black.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/single_story_black.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Single Story Black</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_single_story_white.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/single_story_white.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Single Story White</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_sports.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/sports.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Sports Shop</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_supermarket.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/supermarket.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Supermarket</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="home_watch.html">
																<span class="item_image">
																	<img
                                                                        src="{{ asset("assets/images/home_pages/watch.png")  }}"
                                                                        alt="image_not_found">
																</span>
                                                        <span class="item_title">Watch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-4">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ route('main') }}">
                            <img src="{{ asset("assets/images/logo/logo_25_1x.png")  }}"
                                 srcset="{{ asset("assets/images/logo/logo_25_2x.png")  }} 2x" alt="logo_not_found">
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
                                    <span class="btn_badge">2</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <ul class="action_btns_group ul_li_right clearfix">
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
                                <span class="btn_badge" data-bg-color="#bf2626">2</span>
                            </button>
                        </li>
                    </ul>
                </div>
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
                <a href="index.html">
                    <img src="{{ asset("assets/images/logo/logo_25_1x.png")  }}" srcset="assets/images/logo/logo_25_2x.png 2x"
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

    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <div class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 order-last">
                    <div class="carparts_filetr_bar clearfix">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <ul class="carparts_layout_btns nav ul_li" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#grid_layout"><i
                                                class="fas fa-th"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list_layout"><i class="fas fa-list"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4 class="result_text text-center">
                                    {!! __('Showing') !!}
                                    <span class="fw-semibold">{{ $products->firstItem() }}</span>
                                    {!! __('to') !!}
                                    <span class="fw-semibold">{{ $products->lastItem() }}</span>
                                    {!! __('of') !!}
                                    <span class="fw-semibold">{{ $products->total() }}</span>
                                    {!! __('results') !!}
                                </h4>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="option_select d-flex align-items-center mb-0">
                                    <span class="option_title text-uppercase">Sort by:</span>
                                    <form id="sortForm" action="/" method="GET">
                                        <select name="sort" onchange="updateSort()">
                                            <option
                                                value="id=desc" {{ (isset($sort['id']) && $sort['id'] == "desc") ? 'selected disabled' : (isset($sort) ? '' : 'selected disabled') }}>
                                                New
                                            </option>
                                            <option
                                                value="id=asc" {{ (isset($sort['id']) && $sort['id'] == "asc") ? 'selected disabled' : '' }}>
                                                Old
                                            </option>
                                            <option
                                                value="price=desc" {{ (isset($sort['price']) && $sort['price'] == "desc") ? 'selected disabled' : '' }}>
                                                Price Up
                                            </option>
                                            <option
                                                value="price=asc" {{ (isset($sort['price']) && $sort['price'] == "asc") ? 'selected disabled' : '' }}>
                                                Price Down
                                            </option>
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
                            <div class="row mb_50">
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                            <div class="item_image" data-bg-color="#f8f8f8">
                                                <img src="{{ !is_null($product->image) ? $product->image : asset("assets/images/shop/car_parts/img_01.png") }}"
                                                     alt="image_not_found">
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

                            <div class="carparts_pagination_wrap clearfix">
                                <div class="row align-items-center justify-content-lg-between">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="list_layout" class="tab-pane fade">
                            <div class="mb_50">
                                @foreach($products as $product)
                                <div class="carparts_product_listlayout" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="{{ !is_null($product->image) ? $product->image :"assets/images/shop/car_parts/img_01.png"}}" alt="image_not_found">
                                        <ul class="product_label ul_li text-uppercase clearfix">
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
                                        <h3 class="item_title text-uppercase" id="{{$product->id}}">
                                            <a href="{{ route('product.detail',$product->id) }}">{{ $product->name  }}</a>
                                        </h3>
                                        <p class="mb-0">
                                            {{ $product->description }}
                                        </p>
                                        <div class="action_btns_wrap">
                                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                            <ul class="product_action_btns ul_li clearfix">
                                                <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                       href="#!"><i class="fal fa-shopping-basket" onclick="addToCart.call(this);"></i></a></li>
                                                <li><a class="tooltips fal fa-search" data-placement="top"
                                                       title="Quick View" href="{{ route('product.detail',$product->id) }}"
                                                       data-target="#quickview_modal"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="carparts_pagination_wrap clearfix">
                                <div class="row align-items-center justify-content-lg-between">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <ul class="carparts_pagination_nav ul_li_right clearfix">
                                            {{ $products->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="carparts_sidebar sidebar_section">


                        <div class="sb_widget sb_color_checkbox">
                            <h3 class="sb_widget_title text-uppercase">Tags</h3>
                            <form action="#" onchange="checkbox()">
                                <ul class="ul_li_block clearfix">
                                    <li>
                                        <div class="checkbox_item">
                                            <input type="checkbox" {{ $request->has('param1') ? 'checked' : ''}}>
                                            <label>New</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input type="checkbox" {{ $request->has('param2') ? 'checked' : ''}}>
                                            <label>Sale</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input type="checkbox" {{ $request->has('param3') ? 'checked' : ''}}>
                                            <label>Hot</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input type="checkbox" {{ $request->has('param4') ? 'checked' : ''}}>
                                            <label>discount</label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <script>
                            function checkbox() {
                                var selectedValues = []; // Массив выбранных значений

                                    // Перебираем все выбранные чекбоксы
                                $('input[type="checkbox"]:checked').each(function() {
                                    // Получаем значение метки, связанной с выбранным чекбоксом
                                    var value = $(this).next('label').text();
                                    selectedValues.push(value); // Добавляем значение в массив
                                });

                                            // Получаем текущий URL страницы
                                var currentUrl = window.location.href;

                                // Создаем объект URLSearchParams с существующими параметрами URL
                                var searchParams = new URLSearchParams(window.location.search);

                                        // Удаляем все существующие параметры 'param'
                                var paramCount = 1;
                                while (searchParams.has('param' + paramCount)) {
                                    searchParams.delete('param' + paramCount);
                                    paramCount++;
                                }

                                // Добавляем новые значения 'param' в объект URLSearchParams с разными именами параметров
                                for (var i = 0; i < selectedValues.length; i++) {
                                    searchParams.append('param' + (i + 1), selectedValues[i]);
                                }

                                // Формируем новый URL с обновленными параметрами
                                var newUrl = currentUrl.split('?')[0] + '?' + searchParams.toString();

                                // Перезагружаем страницу с новым URL
                                window.location.href = newUrl;
                            }

                        </script>
                    </aside>
                </div>

            </div>
        </div>
    </div>
    <!-- product_section - end
    ================================================== -->


    <!-- carparts_newsletter - start
    ================================================== -->
    <section class="carparts_newsletter sec_ptb_100 clearfix" data-bg-color="#ebebeb">
        <div class="container">
            <div
                class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
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
                                <img src="{{ asset("assets/images/logo/logo_02_1x.png") }}"
                                     srcset="{{ asset('assets/images/logo/logo_02_2x.png') }} 2x" alt="logo_not_found">
                            </a>
                        </div>

                        <p>
                            This gearbox is an OEM Saginaw casting, fully remanufactured in the USA. All our
                            remanufactured steering gearboxes and racks receive a thorough cleaning and inspection,
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
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_01.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_01.jpg") }}" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_02.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_02.jpg") }}" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_03.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_03.jpg") }}" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_04.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_04.jpg") }}" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_05.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_05.jpg") }}" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a class="popup_image" href="{{ asset("assets/images/instagram/img_06.jpg") }}">
                                    <img src="{{ asset("assets/images/instagram/img_06.jpg") }}" alt="image_not_found">
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
    $('#amount').on('change', function () {
        var value = $(this).val();
        console.log(value);
    });
    $('#amount').on('input', function () {
        var value = $(this).val();
        console.log(value);
    });
</script>

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
            $('.cart_items_list').append(cartItem);
        }

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

        calculateTotal();

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

<script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery-3.7.0.min.js") }}"></script>
<script src="{{ asset("assets/js/popper.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>

<!-- mobile menu - jquery include -->
<script src="{{ asset("assets/js/mCustomScrollbar.js") }}"></script>

<!-- google map - jquery include -->
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


<!-- shop_section - end
    ================================================== -->


</body>
</html>
