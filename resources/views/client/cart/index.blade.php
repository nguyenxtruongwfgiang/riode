@extends('client.layouts.app')

@section('title', 'Shopping Cart')
@section('content')
    <div class="page-content pt-7 pb-10">
        <div class="step-by pr-4 pl-4">
            <h3 class="title title-simple title-step active"><a href="cart.html">1. Shopping Cart</a></h3>
            <h3 class="title title-simple title-step"><a href="checkout.html">2. Checkout</a></h3>
            <h3 class="title title-simple title-step"><a href="order.html">3. Order Complete</a></h3>
        </div>
        <div class="container mt-7 mb-2">
            <div class="row">
                <div class="col-lg-9 col-md-12 pr-lg-4">
                    <table class="shop-table cart-table">
                        <thead>
                            <tr>
                                <th><span>Product</span></th>
                                <th></th>
                                <th><span>Color</span></th>
                                <th><span>Price</span></th>
                                <th><span>quantity</span></th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="product-thumbnail">
                                        <figure>
                                            <a href="{{ route('products.detail', $cart->product->id) }}">
                                                <img src="{{ asset($cart->product->image) }}" width="100" height="100"
                                                    alt="product">
                                            </a>
                                        </figure>
                                    </td>
                                    <td class="product-name">
                                        <div class="product-name-section">
                                            <a
                                                href="{{ route('products.detail', $cart->product->id) }}">{{ $cart->product->name }}</a>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">{{ $cart->color->display_name }}</span>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">{{ number_format($cart->product->price) . 'đ' }}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="input-group">
                                            <button data-action="{{ route('cart.update', $cart->id) }}"
                                                data-id="{{ $cart->id }}" type="button"
                                                class="quantity-minus d-icon-minus btn-update-quantity"></button>
                                            <input class="cart-quantity form-control" type="number" min="1"
                                                max="1000000" value="{{ $cart->quantity }}"
                                                id="productQuantity-{{ $cart->id }}">
                                            <button data-action="{{ route('cart.update', $cart->id) }}"
                                                data-id="{{ $cart->id }}" type="button"
                                                class="quantity-plus d-icon-plus btn-update-quantity"></button>
                                        </div>
                                    </td>
                                    <td class="product-price">
                                        <span>{{ number_format($cart->amount) . 'đ' }}</span>
                                    </td>
                                    <td class="product-close">
                                        <a href="{{ route('cart.delete', $cart->id) }}" class="product-remove"
                                            title="Remove this product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="cart-actions mb-6 pt-4">
                        <a href="{{ route('products.index') }}"
                            class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i
                                class="d-icon-arrow-left"></i>Continue Shopping</a>
                        <button type="submit" class="btn btn-outline btn-dark btn-md btn-rounded">Update
                            Cart</button>
                    </div>
                    <div class="cart-coupon-box mb-8">
                        <h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
                        <input type="text" name="coupon_code" class="input-text form-control text-grey ls-m mb-4"
                            id="coupon_code" value placeholder="Enter coupon code here...">
                        <button type="submit" class="btn btn-md btn-dark btn-rounded btn-outline">Apply
                            Coupon</button>
                    </div>
                </div>
                <aside class="col-lg-3 sticky-sidebar-wrapper">
                    <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                        <div class="summary mb-4">
                            <h3 class="summary-title text-left">Cart Totals</h3>
                            <table class="shipping">
                                <tr class="summary-subtotal">
                                    <td>
                                        <h4 class="summary-subtitle">Subtotal</h4>
                                    </td>
                                    <td>
                                        <p class="summary-subtotal-price">{{ number_format($totalAmount) . 'đ' }}</p>
                                    </td>
                                </tr>
                            </table>
                            <a style="margin-top: 1rem; font-size: 1.2rem" href="{{ route('checkout.index') }}"
                                class="btn btn-dark btn-rounded btn-checkout">Proceed to
                                checkout</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
        integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('client/js/app.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            const TIME_TO_UPDATE = 1000;

            $(document).on('click', '.btn-update-quantity', _.debounce(function(e) {
                let url = $(this).data('action')
                let id = $(this).data('id')

                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                let data = {
                    quantity: $(`#productQuantity-${id}`).val()
                }

                $.post(url, data, res => {
                    console.log(res);
                })
            }, TIME_TO_UPDATE))
        });
    </script>
@endsection
