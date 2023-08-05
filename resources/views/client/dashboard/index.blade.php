@extends('client.layouts.app')

@section('content')
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
            <div class="product">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="{{ asset($product->image) }}" alt="product" width="280" height="315">
                    </a>
                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                            data-target="#addCartModal" title="Add to cart"><i
                                class="d-icon-bag"></i></a>
                        <a href="#" class="btn-product-icon btn-wishlist"
                            title="Add to wishlist"><i class="d-icon-heart"></i></a>
                    </div>
                    <div class="product-action">
                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                    </div>
                </figure>
                <div class="product-details">
                    <div class="product-cat">
                        <a href="shop-grid-4cols.html">Women’s</a>
                    </div>
                    <h3 class="product-name">
                        <a href="product.html">Men's Fashion Jacket</a>
                    </h3>
                    <div class="product-price">
                        <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                    </div>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width:100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <nav class="toolbox toolbox-pagination">
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
    </nav>
</div>
@endsection
