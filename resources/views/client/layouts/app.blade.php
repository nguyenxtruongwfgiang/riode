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

                @yield('content')
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

    <script src="{{ asset('client/js/main.js') }}"></script>
</body>

<!-- Mirrored from d-themes.com/html/riode/shop-grid-4cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 15:27:04 GMT -->

</html>
