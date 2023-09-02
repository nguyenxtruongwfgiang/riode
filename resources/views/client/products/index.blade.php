@extends('client.layouts.app')

@section('title', 'Riode')
@section('content')
    <main class="main">
        {{-- <div class="page-header"
            style="background-image: url({{ asset('client/images/shop/page-header-back.jpg') }}); background-color: #3C63A4;">
            <h3 class="page-subtitle">Categories</h3>
            <h1 class="page-title">4 Columns</h1>
            <ul class="breadcrumb">
                <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                <li class="delimiter">/</li>
                <li><a href="shop.html">Categories</a></li>
                <li class="delimiter">/</li>
                <li>4 Columns</li>
            </ul>
        </div> --}}
        <div class="page-content mb-10 pb-6">
            @if (session('message'))
                <div class="alert alert-simple alert-btn" style="margin-top: 2rem">
                    <a href="cart.html" class="btn btn-success btn-md">View Cart</a>
                    <span>{{ session('message') }}</span>
                    <button type="button" class="btn btn-link btn-close"><i class="d-icon-times"></i></button>
                </div>
            @endif

            @if ($errors->any())
                {{ dd($errors->all()) }}
                <div class="alert alert-simple alert-btn">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                    @endforeach
                </div>
            @endif

            <div class="container">
                <div class="row gutter-lg main-content-wrap">

                    {{-- aside --}}
                    @include('client.layouts.aside')
                    {{-- end aside --}}

                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                            <div class="toolbox-left">
                                <a href="#"
                                    class="toolbox-item left-sidebar-toggle btn btn-outline btn-primary
                            btn-rounded btn-icon-right  d-lg-none">Filter<i
                                        class="d-icon-arrow-right"></i></a>
                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                    <label>Sort By :</label>
                                    <select name="orderby" class="form-control">
                                        <option value="default">Default</option>
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="rating">Average rating</option>
                                        <option value="date">Latest</option>
                                        <option value="price-low">Sort forward price low</option>
                                        <option value="price-high">Sort forward price high</option>
                                        <option value>Clear custom sort</option>
                                    </select>
                                </div>
                            </div>
                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show select-box text-dark">
                                    <label>Show :</label>
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <div class="toolbox-item toolbox-layout">
                                    <a href="shop-list-mode.html" class="d-icon-mode-list btn-layout"></a>
                                    <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                                </div>
                            </div>
                        </nav>
                        <div class="row cols-2 cols-sm-3 cols-md-4 product-wrapper">
                            @foreach ($products as $product)
                                <div class="product-wrap">
                                    <form action="{{ route('cart.add', $product->id) }}" method="post">
                                        @csrf
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset($product->image) }}" alt="product" width="280"
                                                        height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <button style="cursor: pointer" type="submit" class="btn-product-icon"
                                                        data-toggle="modal" data-target="#addCartModal"
                                                        title="Add to cart"><i class="d-icon-bag"></i></button>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="{{ route('products.detail', $product) }}" class="btn-product"
                                                        title="Quick View">Quick
                                                        View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a
                                                        href="/categories/{{ $product->category->id }}/products">{{ $product->category->name }}</a>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="product-color" name="color_id">
                                                            <option selected value="">Choose color</option>
                                                            @foreach ($product->colors as $color)
                                                                <option value="{{ $color->id }}">
                                                                    {{ $color->display_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select class="product-color" name="storage_id">
                                                            <option value="" selected>Choose storage</option>
                                                            @foreach ($product->storages as $storage)
                                                                <option value="{{ $storage->id }}">
                                                                    {{ $storage->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mr-2 product-quantity">
                                                            <i class="control quantity-minus d-icon-minus"></i>
                                                            <input class="quantity" name="quantity" type="number"
                                                                min="1" max="1000000">
                                                            <i class="control quantity-plus d-icon-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="product-name">
                                                    <a
                                                        href="{{ route('products.detail', $product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">{{ number_format($product->price) . 'đ' }}</ins>
                                                    @if ($product->sale)
                                                        <del class="old-price">$210.00</del>
                                                    @endif
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="{{ route('products.detail', $product->id) }}"
                                                        class="rating-reviews">( 6
                                                        reviews )</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        {{ $products->links() }}
                        {{-- <nav class="toolbox toolbox-pagination">
        <p class="show-info">Showing 12 of 56 Products</p>
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link page-link-prev" href="#" aria-label="Previous"
                    tabindex="-1" aria-disabled="true">
                    <i class="d-icon-arrow-left"></i>Prev
                </a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link"
                    href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item page-item-dots"><a class="page-link" href="#">6</a>
            </li>
            <li class="page-item">
                <a class="page-link page-link-next" href="#" aria-label="Next">
                    Next<i class="d-icon-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('client/css/app.css') }}">
@endpush
