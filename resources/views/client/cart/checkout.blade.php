@extends('client.layouts.app')

@section('title', 'Checkout')
@section('content')
    <main class="main checkout">
        <div class="page-content pt-7 pb-10 mb-10">
            <div class="step-by pr-4 pl-4">
                <h3 class="title title-simple title-step"><a href="{{ route('cart.index') }}">1. Shopping Cart</a></h3>
                <h3 class="title title-simple title-step active"><a href="{{ route('checkout.index') }}">2. Checkout</a></h3>
                <h3 class="title title-simple title-step"><a href="#">3. Order Complete</a></h3>
            </div>
            <div class="container mt-7">
                <div class="card accordion">
                    <form action="{{ route('coupon.apply') }}" method="POST">
                        <div class="alert alert-light alert-primary alert-icon mb-4 card-header">
                            <i class="fas fa-exclamation-circle"></i>
                            <span class="text-body">Have a coupon?</span>
                            <a href="#alert-body2" class="text-primary">Click here to enter your code</a>
                        </div>
                        <div class="alert-body collapsed" id="alert-body2">
                            <p>If you have a coupon code, please apply it below.</p>
                            <div class="check-coupon-box d-flex">
                                @csrf
                                <input type="text" name="coupon_code"
                                    class="input-text form-control text-grey ls-m mr-4 mb-4" id="coupon_code" value
                                    placeholder="Coupon code">
                                <button type="submit" class="btn btn-dark btn-rounded btn-outline mb-4">Apply
                                    Coupon</button>
                            </div>
                        </div>
                        @error('coupon_code')
                            <div class="text-danger" style="color: red; margin-bottom: 1rem">{{ $message }}</div>
                        @enderror
                        @if (session('message'))
                            <div class="text-danger" style="color: green; margin-bottom: 1rem">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="text-danger" style="color: red; margin-bottom: 1rem">{{ session('error') }}
                            </div>
                        @endif
                    </form>
                </div>
                <form action="{{ route('order.store') }}" class="form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 mb-6 mb-lg-0 pr-lg-4">
                            <h3 class="title title-simple text-left text-uppercase">Order Details</h3>
                            <label>Customer Name</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" disabled />
                            <label>Email Address *</label>
                            <input type="text" class="form-control" value="{{ $user->email }}" required />
                            <label> Address *</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" />
                            @error('address')
                                <label style="color: red; margin-bottom: 1rem">{{ $message }}</label>
                            @enderror
                            <label>Phone Number *</label>
                            <input type="text" class="form-control" name="phone" id=""
                                value="{{ old('phone') }}">
                            @error('phone')
                                <label style="color: red; margin-bottom: 1rem">{{ $message }}</label>
                            @enderror
                            <h2 class="title title-simple text-uppercase text-left">Additional Information</h2>
                            <label>Order Notes (Optional)</label>
                            <textarea class="form-control pb-2 pt-2 mb-0" name="inquiry_details" cols="30" rows="5"
                                placeholder="Notes about your order, e.g. special notes for delivery">{{ old('inquiry_details') }}</textarea>
                        </div>
                        <aside class="col-lg-5 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar mt-1" data-sticky-options="{'bottom': 50}">
                                <div class="summary pt-5">
                                    <h3 class="title title-simple text-left text-uppercase">Your Order</h3>
                                    <table class="order-table">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $cart)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $cart->product->name . ' ' . $cart->color->display_name . ' - ' . $cart->storage->name }}<span
                                                            class="product-quantity">×&nbsp;{{ $cart->quantity }}</span>
                                                    </td>
                                                    <td class="product-total text-body">
                                                        {{ number_format($cart->amount) . 'đ' }}</td>
                                                </tr>
                                            @endforeach
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Subtotal</h4>
                                                </td>
                                                <td class="summary-subtotal-price pb-0 pt-0">
                                                    {{ number_format($totalAmount) . 'đ' }}
                                                </td>
                                            </tr>
                                            @if (Session::has('coupon'))
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">You save</h4>
                                                    </td>
                                                    <td class="summary-subtotal-price pb-0 pt-0">
                                                        {{ number_format(Session::get('coupon')['value']) . 'đ' }}
                                                    </td>
                                                </tr>
                                            @endif
                                            @if (Session::has('coupon'))
                                                <tr class="summary-total">
                                                    <td class="pb-0">
                                                        <h4 class="summary-subtitle">Total</h4>
                                                    </td>
                                                    <td class=" pt-0 pb-0">
                                                        <p class="summary-total-price ls-s text-primary">
                                                            {{ number_format($totalAmount - Session::get('coupon')['value']) . 'đ' }}
                                                        </p>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="summary-total">
                                                    <td class="pb-0">
                                                        <h4 class="summary-subtitle">Total</h4>
                                                    </td>
                                                    <td class=" pt-0 pb-0">
                                                        <p class="summary-total-price ls-s text-primary">
                                                            {{ number_format($totalAmount) . 'đ' }}</p>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="payment accordion radio-type">
                                        <h4 class="summary-subtitle ls-m pb-3">Payment Methods</h4>
                                        <div class="card">
                                            <div class="custom-radio">
                                                <input type="radio" id="cash_on_delivery" name="payment_method"
                                                    value="cash_on_delivery"
                                                    {{ old('payment_method') == 'cash_on_delivery' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="cash_on_delivery">Cash on
                                                    delivery</label>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="custom-radio">
                                                <input type="radio" id="banking" name="payment_method"
                                                    value="banking"
                                                    {{ old('payment_method') == 'banking' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="banking">
                                                    Online banking
                                                </label>
                                            </div>
                                        </div>
                                        @error('payment_method')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-rounded btn-order">Place
                                    Order</button>
                            </div>
                    </div>
                    </aside>
            </div>
            </form>
        </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script type="text/javascript">
        const couponName = document.querySelector('#coupon_code');

        couponName.addEventListener('input', () => {
            couponName.value = couponName.value.toUpperCase();
        });
    </script>
@endpush
