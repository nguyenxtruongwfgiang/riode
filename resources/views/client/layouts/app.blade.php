<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from d-themes.com/html/riode/shop-grid-4cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 15:26:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>
        @yield('title')
    </title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    @stack('styles')
</head>

<body>
    <div class="page-wrapper">
        @include('client.layouts.header')

        <div class="page-content mb-10 pb-6">
            <div class="container">
                <div class="row gutter-lg main-content-wrap">

                    @yield('content')

                </div>
            </div>
        </div>

        @include('client.layouts.footer')
    </div>

    @include('client.layouts.partials.scroll-top')

    @include('client.layouts.mobile-menu');

    @include('client.layouts.partials.sticky-icon')

    <script data-cfasync="false" src="{{ asset('client/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/vendor/sticky/sticky.min.js') }}"></script>
    <script src="{{ asset('client/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('client/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('client/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/vendor/owl-carousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('client/js/main.js') }}"></script>

    @stack('scripts')
</body>

<!-- Mirrored from d-themes.com/html/riode/shop-grid-4cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 15:27:04 GMT -->

</html>
