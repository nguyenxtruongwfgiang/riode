@extends('client.layouts.app')

@section('title', 'Account')
@section('content')
    <main class="main account">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><i class="d-icon-home"></i></a></li>
                    <li>Account</li>
                </ul>
            </div>
        </nav>
        <div class="page-content mt-4 mb-10 pb-6">
            <div class="container">
                <h2 class="title title-center mb-10">My Account</h2>
                <div class="tab tab-vertical gutter-lg">
                    <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#orders">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#account">Account details</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    <a>
                            </form>
                        </li>
                    </ul>
                    <div class="tab-content col-lg-9 col-md-8">
                        <div class="tab-pane active" id="dashboard">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <p class="mb-0">
                                    Hello <span>{{ $user->name }}</span> (not <span>{{ $user->name }}</span>? <a
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                        class="text-primary">Log
                                        out</a>)
                                </p>
                                <p class="mb-8">
                                    From your account dashboard you can view your
                                    <a href="#orders" class="link-to-tab text-primary">recent orders, manage your
                                        shipping and
                                        billing
                                        addresses,<br>and edit your password and account details</a>.
                                </p>
                                <a href="shop.html" class="btn btn-dark btn-rounded">Go To Shop<i
                                        class="d-icon-arrow-right"></i></a>
                            </form>
                        </div>
                        <div class="tab-pane" id="orders">
                            <table class="order-table">
                                <thead>
                                    <tr>
                                        <th class="pl-2">Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th class="pr-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="order-number"><a href="#">#{{ $order->id }}</a></td>
                                            <td class="order-date"><span>{{ $order->ordered_at }}</span></td>
                                            <td class="order-status"><span>{{ $order->order_status }}</span></td>
                                            <td class="order-total">
                                                <span>{{ number_format($order->total_amount) . 'đ' }} for
                                                    {{ count($order->orderItems) }} items</span><br>
                                                @foreach ($order->orderItems as $orderItem)
                                                    <span>{{ $orderItem->product->name . $orderItem->color->display_name }}</span><br>
                                                    <hr>
                                                @endforeach
                                            </td>
                                            @if ($order->status == 'canceled')
                                                <td class="order-action"><button disabled
                                                        class="btn btn-secondary btn-link btn-underline">Order
                                                        Canceled</button></td>
                                            @else
                                                <td class="order-action">
                                                    <form action="{{ route('order.cancel', $order) }}" method="POST">
                                                        @csrf
                                                        <a href="{{ route('order.cancel', $order) }}"
                                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                            class="btn btn-primary btn-link btn-underline">Cancel Order</a>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="account" style="font-size: 20px">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('styles')
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
