<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to Riode store message or remove it!</p>
            </div>
            <div class="header-right">

                <span class="divider"></span>
                <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                @auth
                    <a href="{{ route('profile.index') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a style="cursor: pointer"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                    </form>
                @else
                    <a href="{{ route('login') }}" data-toggle="login-modal"><i style="margin-right: 1rem"
                            class="d-icon-user"></i>Login</a>
                    <span class="delimiter">/</span>
                    <a class="ml-0" href="{{ route('register') }}" data-toggle="login-modal">Register</a>
                @endauth

            </div>
        </div>
    </div>

    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('client/images/logo.png') }}" alt="logo" width="153" height="44" />
                </a>

                <div class="header-search hs-simple">
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                            placeholder="Search..." required />
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>

            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-0 mr-lg-2">
                        <i class="d-icon-phone"></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title">Call Us Now:</h4>
                        <p>+84 971-631-797</p>
                    </div>
                </a>
                <span class="divider"></span>
                <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                    <a href="{{ route('cart.index') }}" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show">
                            <span class="cart-name">Shopping Cart:</span>
                            <span class="cart-price summary-subtotal-price"
                                style="text-transform: lowercase">{{ number_format($totalAmount) . 'đ' }}</span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count" id="count-cart" data-count="{{ $cartItemCount }}">{{ $cartItemCount }}</span></i>
                    </a>

                    <div class="dropdown-box">
                        @if ($cartItems)
                            <div class="products scrollable">

                                @foreach ($cartItems as $cartItem)
                                    <div id="cart-item-{{ $cartItem->id }}" class="product product-cart">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ asset($cartItem->product->image) }}" alt="product"
                                                    width="80" height="88" />
                                            </a>
                                            <a href="{{ route('cart.delete', $cartItem->id) }}"><button
                                                    class="btn btn-link btn-close">

                                                    <i class="fas fa-times"></i>
                                                </button></a>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="{{ route('products.detail', $cartItem->product->id) }}"
                                                class="product-name">{{ $cartItem->product->name . ' ' . $cartItem->color->display_name . ' - ' . $cartItem->storage->name }}</a>
                                            <div class="price-box">
                                                <span class="product-quantity" id="quantity-product-{{ $cartItem->id }}" data-quantity="{{ $cartItem->quantity }}">{{ $cartItem->quantity }}</span>
                                                <span
                                                    class="product-price">{{ number_format($cartItem->product->price) . 'đ' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price summary-subtotal-price">{{ number_format($totalAmount) . 'đ' }}</span>
                            </div>

                            <div class="cart-action">
                                <a href="{{ route('cart.index') }}" class="btn btn-dark btn-link">View Cart</a>
                                <a href="{{ route('checkout.index') }}" class="btn btn-dark"><span>Go To Checkout</span></a>
                            </div>
                        @else
                            <div class="cart-action">
                                <span>No item in your cart.</span>
                            </div>

                        @endif
                    </div>

                </div>
                <div class="header-search hs-toggle mobile-search">
                    <a href="#" class="search-toggle">
                        <i class="d-icon-search"></i>
                    </a>
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                            placeholder="Search your keyword..." required />
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom d-lg-show">
        <div class="container">
            <div class="header-left">
                <nav class="main-nav">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li>
                            <a href="shop.html">Categories</a>
                            <div class="megamenu" style="min-width: 30rem">
                                <div class="row">
                                    <div>
                                        <ul>
                                            @foreach ($categories as $category)
                                                <li><a
                                                        href="{{ route('products.category', $category->id) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="product.html">Products</a>
                            <div class="megamenu" style="min-width: 30rem">
                                <div class="row">
                                    <div>
                                        <ul>
                                            @foreach ($categories as $category)
                                                <li><a
                                                        href="{{ route('products.category', $category->id) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="about-us.html">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
