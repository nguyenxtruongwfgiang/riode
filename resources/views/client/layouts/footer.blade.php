</main>

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="demo1.html" class="logo-footer">
                        <img src="{{ asset('client/images/logo-footer.png') }}" alt="logo-footer" width="154" height="43" />
                    </a>

                </div>
                <div class="col-lg-9">
                    <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                        <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                            <h4 class="widget-title">Subscribe to our Newsletter</h4>
                            <p>Get all the latest information, Sales and Offers.</p>
                        </div>
                        <form action="#" class="input-wrapper input-wrapper-inline">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email address here..." required />
                            <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit">subscribe<i
                                    class="d-icon-arrow-right"></i></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-info">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="widget-body">
                            <li>
                                <label>Phone:</label>
                                <a href="tel:#">Toll Free (123) 456-7890</a>
                            </li>
                            <li>
                                <label>Email:</label>
                                <a
                                    href="https://d-themes.com/cdn-cgi/l/email-protection#1f727e76735f6d76707b7a317c7072"><span
                                        class="__cf_email__"
                                        data-cfemail="d8b5b9b1b498aab1b7bcbdf6bbb7b5">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <label>Address:</label>
                                <a href="#">123 Street Name, City, England</a>
                            </li>
                            <li>
                                <label>WORKING DAYS / HOURS:</label>
                            </li>
                            <li>
                                <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="#">Order History</a>
                            </li>
                            <li>
                                <a href="#">Returns</a>
                            </li>
                            <li>
                                <a href="#">Custom Service</a>
                            </li>
                            <li>
                                <a href="#">Terms &amp; Condition</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="#">Sign in</a>
                            </li>
                            <li>
                                <a href="cart.html">View Cart</a>
                            </li>
                            <li>
                                <a href="wishlist.html">My Wishlist</a>
                            </li>
                            <li>
                                <a href="#">Track My Order</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-instagram">
                        <h4 class="widget-title">Instagram</h4>
                        <figure class="widget-body row">
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/01.jpg') }}" alt="instagram 1" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/02.jpg') }}" alt="instagram 2" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/03.jpg') }}" alt="instagram 3" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/04.jpg') }}" alt="instagram 4" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/05.jpg') }}" alt="instagram 5" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/06.jpg') }}" alt="instagram 6" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/07.jpg') }}" alt="instagram 7" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('client/images/instagram/08.jpg') }}" alt="instagram 8" width="64" height="64" />
                            </div>
                        </figure>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-left">
                <figure class="payment">
                    <img src="{{ asset('client/images/payment.png') }}" alt="payment" width="159" height="29" />
                </figure>
            </div>
            <div class="footer-center">
                <p class="copyright">Riode &copy; {{ now()->year }}. All Rights Reserved</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>

    </div>
</footer>

</div>

<div class="sticky-footer sticky-content fix-bottom">
    <a href="demo1.html" class="sticky-link">
        <i class="d-icon-home"></i>
        <span>Home</span>
    </a>
    <a href="shop.html" class="sticky-link">
        <i class="d-icon-volume"></i>
        <span>Categories</span>
    </a>
    <a href="wishlist.html" class="sticky-link">
        <i class="d-icon-heart"></i>
        <span>Wishlist</span>
    </a>
    <a href="account.html" class="sticky-link">
        <i class="d-icon-user"></i>
        <span>Account</span>
    </a>
    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="d-icon-search"></i>
            <span>Search</span>
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
