<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from d-themes.com/html/riode/shop-grid-4cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 15:26:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Riode - Ultimate eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <link rel="icon" type="image/png" href="{{ asset('client/images/icons/favicon.png') }}">
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{ asset('client/js/webfont.js') }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/animate/animate.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/vendor/sticky-icon/stickyicon.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/style.min.css') }}">
</head>

<body>
    @include('client.layouts.header')

    <div class="page-content mb-10 pb-6">
        <div class="container">
            <div class="row gutter-lg main-content-wrap">
                @include('client.layouts.aside')
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/13.jp') }}" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
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
                                        <a href="shop-grid-4cols.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Coast Pool Comfort Jacket</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/1.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashionable Hooded Coat</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$35.00</span>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/2.jpg') }}" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">27% off</label>
                                    </div>
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
                                        <a href="shop-grid-4cols.html">bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Women's Fashion Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$19.00</span>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/4.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashionable Padded Jacket</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/14.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Cavin Fashion Suede Handbag</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/3.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">shoes</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Women's Fashion Hood</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/5.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Watches</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Converse Blue Training Shoes</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/12.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Watches</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Beyond OTP Jacket</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/15.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="product.html">Fashion Overnight Bag</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/7.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">shoes</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashion Brown Suede Shoes</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/8.jpg') }}" alt="product" width="280" height="315">
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/9.jpg') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">electronics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashion Cowboy Hat</a>
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
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/16.jp') }}" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
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
                                        <a href="shop-grid-4cols.html">Bags & Backpacks</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">A Dress-suit Valise</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$189.23</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:80%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 26 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/11.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">men</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Converse Season Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$135.26</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 7 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/6.jpg') }}" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">27% off</label>
                                    </div>
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
                                        <a href="shop-grid-4cols.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Men Beautiful Clothing</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$93.42</ins><del class="old-price">$127.72</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 36 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/17.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">men</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Black House Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$26.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:20%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 3 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/18.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Bags & Backpacks</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashional Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$52.62</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 16 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/19.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Solid Pattern in Summer Dress</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$140.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 12 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/20.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Bags & Backpacks</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Fashion Women Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$83.29</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 35 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrap">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('client/images/shop/21.jp') }}" alt="product" width="280" height="315">
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
                                        <a href="shop-grid-4cols.html">Men</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="product.html">Season Sports Cap</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$64.27</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:20%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( 3 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            </div>
        </div>
    </div>
    
    @include('client.layouts.footer')

    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i
            class="d-icon-arrow-up"></i></a>
    <div class="minipopup-box cart-added-box original">
        <p class="minipopup-title">
            Successfully added.
            <a href="#" class="btn btn-link btn-sm btn-slide-right btn-infinite">View Cart<i
                    class="d-icon-arrow-right"></i></a>
        </p>
        <div class="product product-cart">
            <figure class="product-media">
                <a href="#">
                    <img src="images/cart/product-1.jpg" alt="product" width="90" height="90" />
                </a>
            </figure>
            <div class="product-detail">
                <a href="product.html" class="product-name">Coast Pool Comfort Jacket</a>
                <div class="price-box">
                    <span class="product-quantity">1</span>
                    <span class="product-price">$21.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="minipopup-box purchased-box">
        <p class="minipopup-title">Someone just purchased below.</p>
        <div class="product product-list-sm mb-4">
            <figure class="product-media">
                <a href="#">
                    <img src="images/cart/product-1.jpg" alt="product" width="90" height="90" />
                </a>
            </figure>
            <div class="product-detail">
                <a href="product.html" class="product-name">Daisy Bag Sonia by Sonia Rykiel</a>
                <span class="product-price">$199.00</span>
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width:100%"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('client.layouts.mobile-menu');

    <div class="sticky-icons-wrapper">
        <div class="sticky-icon-links">
            <ul>
                <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
                <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
                </li>
                <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
                            now!</span></a></li>
            </ul>
        </div>
        <div class="demos-list">
            <div class="demos-overlay"></div>
            <a class="demos-close" href="#"><i class="close-icon"></i></a>
            <div class="demos-content scrollable scrollable-light">
                <h3 class="demos-title">Demos</h3>
                <div class="demos">
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="{{ asset('client/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/vendor/sticky/sticky.min.js') }}"></script>
    <script src="{{ asset('client/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('client/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/vendor/nouislider/nouislider.min.js') }}"></script>

    <script src="{{ asset('client/js/main.min.js') }}"></script>
</body>

<!-- Mirrored from d-themes.com/html/riode/shop-grid-4cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 15:27:04 GMT -->

</html>
