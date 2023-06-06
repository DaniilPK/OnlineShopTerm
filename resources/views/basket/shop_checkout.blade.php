<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Neoncart</title>

    @include('basket.shop_carts_elements')

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favourite_icon_01.png') }}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>


<body>


@yield('header')


<!-- main body - start
================================================== -->
<main>

    @yield('breadcrumb_section')

    <!-- checkout_section - start
    ================================================== -->
    <section class="checkout_section sec_ptb_140 clearfix">
        <div class="container">

            <ul class="checkout_step ul_li clearfix">
                <li class="activated"><a href="{{ route('main.shop_cart') }}"><span>01.</span> Shopping Cart</a></li>
                <li class="active"><a href="#"><span>02.</span> Checkout</a></li>
                <li><a href="#"><span>03.</span> Order Completed</a></li>
            </ul>

            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout_collapse_content">
                        <div id="loginform_collapse" class="collapse_form_wrap collapse">
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_item">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_item">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login_button">
                                        <div class="checkbox_item">
                                            <label for="remember_checkbox"><input id="remember_checkbox"
                                                                                  type="checkbox"> Remember me</label>
                                        </div>
                                        <button type="submit" class="custom_btn bg_default_red">Login Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="checkout_collapse_content">
                        <div class="wrap_heade">
                            <p class="mb-0">
                                <i class="ti-info-alt"></i>
                                Have a coupon? <a class="collapsed" data-toggle="collapse" href="#coupon_collapse"
                                                  aria-expanded="false">Click here to enter your code</a>
                            </p>
                        </div>
                        <div id="coupon_collapse" class="collapse_form_wrap collapse">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form_item">
                                        <input type="text" name="coupon" placeholder="Coupon Code">
                                    </div>
                                    <button type="submit" class="custom_btn bg_default_red">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('main.shop_order_completed') }}" method="post">
                @csrf
                <div class="billing_form mb_50">
                    <h3 class="form_title mb_30">Billing details</h3>
                    <div class="form_wrap">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_item">
                                    <span class="input_title">First Name<sup>*</sup></span>
                                    <input type="text" name="firstname">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_item">
                                    <span class="input_title">Last Name<sup>*</sup></span>
                                    <input type="text" name="lastname">
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <span class="input_title">Company Name<sup>*</sup></span>
                            <input type="text" name="company">
                        </div>

                        <div class="option_select">
                            <span class="input_title">Country<sup>*</sup></span>
                            <select name="country">
                                <option value="USA" selected>United States</option>
                                <option value="USA">United States</option>
                                <option value="USA">United States</option>
                                <option value="USA">United States</option>
                            </select>
                        </div>

                        <div class="form_item">
                            <span class="input_title">Address<sup>*</sup></span>
                            <input type="text" name="address" placeholder="House number and street name">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Town/City<sup>*</sup></span>
                            <input type="text" name="city">
                        </div>

                        <div class="form_item">
                            <span class="input_title">County<sup>*</sup></span>
                            <input type="text" name="county">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Postcode / Zip<sup>*</sup></span>
                            <input type="text" name="postcode">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Phone<sup>*</sup></span>
                            <input type="tel" name="phone">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Email Address<sup>*</sup></span>
                            <input type="email" name="email">
                        </div>


                        <hr>


                        <div class="form_item mb-0">
                            <span class="input_title">Order notes<sup>*</sup></span>
                            <textarea name="note"
                                      placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                        </div>

                    </div>
                </div>

                <div class="billing_form">
                    <h3 class="form_title mb_30">Your order</h3>
                    <div class="form_wrap">
                        <div class="checkout_table">
                            <table class="table text-center mb_50">
                                <thead class="text-uppercase text-uppercase">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($baskets))
                                    @foreach($baskets as $basket)
                                        <tr>
                                            <td>
                                                <div class="cart_product">
                                                    <div class="item_image">
                                                        <img
                                                            src="{{ isset($basket->image) ? asset($basket->image) : asset('assets/images/cart/img_04.jpg') }}"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="item_content">
                                                        <h4 class="item_title mb-0"
                                                            id="{{ $basket->id }}">{{ $basket->name }}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price_text">${{ $basket->price }}</span>
                                            </td>
                                            <td>
                                                <span class="quantity_text">{{ $basket->products_count }}</span>
                                            </td>
                                            <td><span
                                                    class="total_price">${{ $basket->price*$basket->products_count }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="subtotal_text">Subtotal</span>
                                    </td>
                                    <td><span class="total_price">${{ $subtotal }}</span></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="subtotal_text">Shipping</span>
                                    </td>
                                    <td class="text-left">
                                        <div class="checkbox_item mb_15">
                                            <label for="shipping_checkbox"><input id="shipping_checkbox" name="shipping"
                                                                                  type="radio" checked value="1"> Local
                                                Pickup</label>
                                        </div>
                                        <div class="checkbox_item mb_15">
                                            <label for="flatrate_checkbox"><input id="flatrate_checkbox" name="shipping"
                                                                                  type="radio" value="2"> Flat rate:
                                                $5.00</label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-left">
                                        <span class="subtotal_text">TOTAL</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="total_price">$135.00</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="billing_payment_mathod">
                            <button type="submit" class="custom_btn bg_default_red">PLACE ORDER</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout_section - end
    ================================================== -->


</main>
<!-- main body - end
================================================== -->


<!-- footer_section - start
================================================== -->
@yield('footer')
<!-- footer_section - end
================================================== -->

@yield('scripts')

</body>
