<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Neoncart</title>
    @include('basket.shop_carts_elements')

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
                <li class="activated"><a href="#"><span>02.</span> Checkout</a></li>
                <li class="active"><a href="#"><span>03.</span> Order Completed</a></li>
            </ul>

            <div class="order_complete_alart text-center">
                <h2>Congratulation! You’ve <strong>Completed</strong> Payment.</h2>
            </div>

        </div>
    </section>
    <!-- checkout_section - end
    ================================================== -->


</main>
<!-- main body - end
================================================== -->


@yield('footer')


@yield('scripts')


</body>
</html>
