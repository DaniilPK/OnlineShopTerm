<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Simple Shop - Neoncart HTML5 Template</title>
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

</head>

<style>
    .ul_li {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

    .menu_item_has_child {
        position: relative;
    }

    .container {
        position: relative;
    }

    .home_pages {
        padding: 0;
        margin: 0;
    }

    .home_pages li {
        display: inline-block;
        margin-right: 20px; /* Увеличьте значение для большего отступа */
    }

    .item_image img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .item_title {
        display: block;
        margin-top: 10px; /* Увеличьте значение для большего отступа */
        text-align: center;
        font-weight: bold;
    }
</style>

<body class="home_simple_shop">


<!-- backtotop - start -->
<div id="thetop"></div>
<div class="backtotop bg_shop_red">
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
                            <li class="menu_item_has_child">
                                <a href="#!">Shop</a>
                                <div class="mega_menu">
                                    <div class="background" data-bg-color="#ffffff">
                                        <div class="container">
                                            <div class="row mt__30">
                                                <div class="col-lg-3">
                                                    <div class="page_links">
                                                        <h3 class="title_text">Carparts</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="carparts_shop.html">Shop Page</a></li>
                                                            <li><a href="carparts_shop_grid.html">Shop Grid</a></li>
                                                            <li><a href="carparts_shop_list.html">Shop List</a></li>
                                                            <li><a href="carparts_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Classic Ecommerce</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="classic_ecommerce_shop.html">Shop Page</a></li>
                                                            <li><a href="classic_ecommerce_shop_details.html">Shop
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Electronic</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="electronic_shop.html">Shop Page</a></li>
                                                            <li><a href="electronic_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Fashion</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="fashion_shop.html">Shop Page</a></li>
                                                            <li><a href="fashion_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="page_links">
                                                        <h3 class="title_text">Fashion Minimal</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                                            <li><a href="fashion_minimal_shop_details.html">Shop
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Fashion Minimal</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                                            <li><a href="fashion_minimal_shop_details.html">Shop
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Furniture</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="furniture_shop.html">Shop Page</a></li>
                                                            <li><a href="furniture_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Gadget</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="gadget_shop.html">Shop Page</a></li>
                                                            <li><a href="gadget_shop_details.html">Shop Details</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="page_links">
                                                        <h3 class="title_text">Medical</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="medical_shop.html">Shop Page</a></li>
                                                            <li><a href="medical_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Modern Minimal</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="modern_minimal_shop.html">Shop Page</a></li>
                                                            <li><a href="modern_minimal_shop_details.html">Shop
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Modern</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="modern_shop.html">Shop Page</a></li>
                                                            <li><a href="modern_shop_details.html">Shop Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Motorcycle</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="motorcycle_shop_grid.html">Shop Grid</a></li>
                                                            <li><a href="motorcycle_shop_list.html">Shop List</a></li>
                                                            <li><a href="motorcycle_shop_details.html">Shop Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="page_links">
                                                        <h3 class="title_text">Simple Shop</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="simple_shop.html">Shop Page</a></li>
                                                            <li><a href="simple_shop_details.html">Shop Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Sports</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="sports_shop.html">Shop Page</a></li>
                                                            <li><a href="sports_shop_details.html">Shop Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Lookbook</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="lookbook_creative_shop.html">Shop Page</a></li>
                                                            <li><a href="lookbook_creative_shop_details.html">Shop
                                                                    Details</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="page_links">
                                                        <h3 class="title_text">Shop Other Pages</h3>
                                                        <ul class="ul_li_block">
                                                            <li><a href="#!">
                                                                    <del>Shop Page</del>
                                                                </a></li>
                                                            <li><a href="shop_details.html">Shop Details</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu_item_has_child">
                                <a href="#!">Pages</a>
                                <ul class="submenu">
                                    <li class="menu_item_has_child">
                                        <a href="#!">Shop Inner Pages</a>
                                        <ul class="submenu">
                                            <li><a href="shop_cart.html">Shopping Cart</a></li>
                                            <li><a href="shop_checkout.html">Checkout Step 1</a></li>
                                            <li><a href="shop_checkout_step2.html">Checkout Step 2</a></li>
                                            <li><a href="shop_checkout_step3.html">Checkout Step 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li class="menu_item_has_child">
                                        <a href="#!">Blogs</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_has_child">
                                        <a href="#!">Compare</a>
                                        <ul class="submenu">
                                            <li><a href="compare_1.html">Compare V.1</a></li>
                                            <li><a href="compare_2.html">Compare V.2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_has_child">
                                        <a href="#!">Register</a>
                                        <ul class="submenu">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="signup.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#!">About us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-4">
                    <div class="brand_logo">
                        <a class="brand_link" href="index.html">
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
                            <button type="button" class="wishlist_btn"><i class="fal fa-heart"></i></button>
                        </li>
                        <li>
                            <button type="button" class="compair_btn"><i class="far fa-random"></i></button>
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

<main>
    <ul class="ul_li clearfix">
        <li class="menu_item_has_child">
            <div class="container">
                <ul class="home_pages ul_li clearfix">
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('list.category',$category->id) }}">
                                                                        <span class="item_image">
                                                                            <img
                                                                                src="{{ !is_null($category->image) ? $category->image : asset("assets/images/home_pages/carparts.png") }}"
                                                                                alt="image_not_found">
                                                                        </span>
                                <span class="item_title">{{$category->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>
</main>

<!-- fraimwork - jquery include -->
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


</body>
</html>
