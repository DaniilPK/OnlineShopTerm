

@section('header')
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
<header class="header_section default_header sticky_header clearfix">
    <div class="header_top text-white" data-bg-color="#000000">
        <div class="container">
            <div class="row align-items-center">

            </div>
        </div>
    </div>

    <div class="header_bottom clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand_logo">
                        <a class="brand_link" href="{{ route('main') }}">
                            <img src="{{ asset('assets/images/logo/logo_27_1x.png') }}"
                                 srcset="{{ asset('assets/images/logo/logo_27_2x.png') }} 2x" alt="logo_not_found">
                        </a>

                        <ul class="mh_action_btns ul_li clearfix">
                            <li>
                                <button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <nav class="main_menu clearfix">
                        <ul class="ul_li_center clearfix">
                            <li class="menu_item_has_child">
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3">
                    <ul class="action_btns_group ul_li_right clearfix">
                        <li>
                            <button type="button" class="user_btn" data-toggle="collapse" data-target="#use_deropdown"
                                    aria-expanded="false" aria-controls="use_deropdown">
                                <i class="fal fa-user"></i>
                            </button>
                            <div id="use_deropdown" class="collapse_dropdown collapse">
                                <div class="dropdown_content">
                                    <div class="profile_info clearfix">
                                        <div class="user_thumbnail">
                                            <img src="{{ asset('assets/images/meta/img_01.png') }}"
                                                 alt="thumbnail_not_found">
                                        </div>
                                        <div class="user_content">
                                            <h4 class="user_name">Jone Doe</h4>
                                            <span class="user_title">Seller</span>
                                        </div>
                                    </div>
                                    <ul class="settings_options ul_li_block clearfix">
                                        <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                                        <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                                        <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- header_section - end
================================================== -->
@endsection

@section('breadcrumb_section')
    <div class="sidebar-menu-wrapper">
        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="{{ route('main') }}">
                    <img src="assets/images/logo/logo_25_1x.png" srcset="assets/images/logo/logo_25_2x.png 2x" alt="logo_not_found">
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
    <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="{{ asset('assets/images/breadcrumb/bg-02.avif') }}">
        <div class="overlay" data-bg-color="#1d1d1d"></div>
        <div class="container">
            <h1 class="page_title text-white">Cart</h1>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->
@endsection

@section('footer')
    <!-- footer_section - start
================================================== -->
    <footer class="footer_section default_footer clearfix">
        <div class="footer_widget_area sec_ptb_100 clearfix" data-bg-color="#1f1f1f">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget df_about_area">
                            <div class="brand_logo mb_30">
                                <a href="{{ route('main') }}">
                                    <img src="{{ asset("assets/images/logo/logo_02_1x.png") }}"
                                         srcset="{{ asset("assets/images/logo/logo_02_2x.png") }} 2x" alt="logo_not_found">
                                </a>
                            </div>

                            <p class="mb_15">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>

                            <ul class="df_contact_info ul_li_block clearfix">
                                <li><i class="fas fa-phone-alt"></i> 001-6688-9999</li>
                                <li><i class="fas fa-envelope"></i> contact@site.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget product_list clearfix">
                            <h3 class="df_widget_title text-white text-uppercase">Hot Products</h3>
                            <ul class="ul_li_block">
                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="{{ asset("assets/images/shop/minimal/img_10.jpg") }}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="{{ asset("assets/images/shop/minimal/img_11.jpg") }}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget product_list clearfix">
                            <h3 class="df_widget_title text-white text-uppercase">Sale Products</h3>
                            <ul class="ul_li_block">
                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="{{ asset("assets/images/shop/minimal/img_12.jpg") }}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="{{ asset("assets/images/shop/minimal/img_13.jpg") }}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget df_newsletter">
                            <h3 class="df_widget_title text-white text-uppercase">Newsletter</h3>
                            <p class="mb_30">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex tortor
                            </p>
                            <form action="#">
                                <div class="form_item mb-0">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <button type="submit" class="submit_btn"><i class="fal fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom clearfix" data-bg-color="#1a1a1a">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="copyright_text mb-0">

                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul class="circle_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
    ================================================== -->
@endsection

@section('scripts')
    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>

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
@endsection
