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

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body>

@yield('header')




<!-- main body - start
================================================== -->
<main>

    @yield('breadcrumb_section')


    <section class="cart_section sec_ptb_140 clearfix">
        <div class="container">

            <ul class="checkout_step ul_li clearfix">
                <li class="active"><a href="shop_checkout.html"><span>01.</span> Shopping Cart</a></li>
                <li><a href="{{ route('main.shop_checkout') }}"><span>02.</span> Checkout</a></li>
                <li><a href="#"><span>03.</span> Order Completed</a></li>
            </ul>

            <div class="cart_table mb_50">
                <table class="table">
                    <thead class="text-uppercase bg-white border-bottom">
                    <tr>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($baskets))
                            @foreach($baskets as $basket)
                                <tr>
                                    <td>
                                        <div class="cart_product">
                                            <div class="item_image">
                                                <img src="{{ isset($basket->image) ? asset($basket->image) : asset('assets/images/cart/img_04.jpg') }}" alt="image_not_found">
                                            </div>
                                            <button type="button" class="remove_btn">
                                                <i class="fal fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price_text" id="{{ $basket->id }}">{{ $basket->name }}</span>
                                    </td>
                                    <td>
                                        <div class="quantity_input">
                                            <form action="#">
                                                <span class="input_number_decrement">–</span>
                                                <input class="input_number" type="text" value="{{ $basket->products_count }}">
                                                <span class="input_number_increment">+</span>
                                            </form>
                                        </div>
                                    </td>
                                    <td><span class="total_price">${{ $basket->price }}</span></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5" style="background: rgb(242, 243, 245);">
                    <h3 class="table_title text-center" data-bg-color="#ededed" style="background: rgb(237, 237, 237);">Cart Total</h3>
                    <ul class="ul_li_block clearfix">
                        <li>
                            <span>Subtotal</span>
                            <span class="subtotal_price_cart">$0.00</span>
                        </li>
                        <li>
                            <span>VAT (5%)</span>
                            <span class="vat_price">$0.00</span>
                        </li>
                        <li>
                            <span>Discount (20%)</span>
                            <span class="discount_price">$0.00</span>
                        </li>
                        <li>
                            <span>Total</span>
                            <span class="total_price_cart">$0.00</span>
                        </li>
                    </ul>
                    <a href="{{ route('main.shop_checkout') }}" class="custom_btn bg_success">Proceed to Checkout</a>
                </div>
            </div>

        </div>
    </section>
    <!-- cart_section - end
    ================================================== -->



</main>
<!-- main body - end
================================================== -->


@yield('footer')


<script src="{{ asset("assets/js/jquery-3.7.0.min.js") }}"></script>
<script>
    $(document).ready(function() {

        $('.input_number').on('change', function() {
            var id = $(this).closest('tr').find('.price_text').attr('id');
            var count = parseInt($(this).val());
            if (!isNaN(count)) {
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
                        if (data) {
                            updateCartTotal();
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
        $('.remove_btn').on('click', function() {
            var id = $(this).closest('tr').find('.price_text').attr('id');
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
            $(this).closest('tr').remove();
            updateCartTotal();
        });

        function updateCartTotal() {
            var subtotal = 0;
            $('.total_price').each(function() {
                var productRow = $(this).closest('tr');
                var price = parseFloat($(this).text().replace('$', ''));
                var quantity = parseInt(productRow.find('.input_number').val());
                var total = price * quantity;
                subtotal += total;
            });
            var vat = subtotal * 0.05;
            var discount = subtotal * 0.2;
            var total = subtotal + vat - discount;

            $('.subtotal_price_cart').text('$' + subtotal.toFixed(2));
            $('.vat_price').text('$' + vat.toFixed(2));
            $('.discount_price').text('$' + discount.toFixed(2));
            $('.total_price_cart').text('$' + total.toFixed(2));
        }

        updateCartTotal();
    });
</script>


@yield('scripts')


</body>
</html>
