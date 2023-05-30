<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AromaFlames</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/client/assets/images/favicon.png') }}"/>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('storage/client/assets/css/plugins.css') }}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('storage/client/assets/css/bootstrap.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('storage/client/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/client/assets/css/responsive.css') }}">
</head>

<body class="template-index belle template-index-belle">
<div id="pre-loader">
    <img src="{{ asset('storage/client/assets/images/loader.gif') }}" alt="Loading..."/>
</div>
<div class="pageWrapper">
    <!--Search Form Drawer-->
    <div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                       aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Header-->
    <!-- <div class="header-wrap classicHeader animated d-flex"> -->
    <div class="header-wrap animated d-flex">

        <!-- <div class="header-wrap classicHeader animated d-flex stickyNav fadeInDown"> -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('storage/client/assets/img/logo.png') }}" alt="AromaFlames"
                             title="AromaFlames" style="max-width: 50%;"/>
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                    <div class="d-block d-lg-none">
                        <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                    <!--Desktop Menu-->
                    <nav class="grid__item" id="AccessibleNav">
                        <!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1"><a href="{{ route('index') }}">Home <i class="anm anm-angle-down-l"></i></a></li>
                            <li class="lvl1"><a href="{{ route('index') }}">Blog <i class="anm anm-angle-down-l"></i></a></li>
                            <li class="lvl1 parent dropdown"><a href="#">Shop <i class="anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('categoryProduct', 'Toate-Lumânările') }}"
                                           class="site-nav">Toate Lumânările</a>
                                    </li>
                                    @foreach ($categories as $category)
                                            <li><a href="{{ route('categoryProduct', str_replace(' ', '-', $category->name)) }}"
                                               class="site-nav">{{ $category->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="lvl1"><a href="#"><b>Contacte!</b> <i class="anm anm-angle-down-l"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('storage/client/assets/img/logo.png') }}" alt="AromaFlames"
                                 title="AromaFlames"/>
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                    <div class="site-cart">
                        <a href="#;" class="site-header__cart" title="Cart">
                            <i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count"
                                  data-cart-render="item_count">2</span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">

                        </div>
                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1"><a href="{{ route('index') }}">Home </a></li>
            <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">SHOP <i class="anm anm-plus-l"></i></a>
                <ul style="display: none;">
                    <li><a href="{{ route('categoryProduct', 'Toate-Lumânările') }}"
                           class="site-nav">Toate Lumânările</a>
                    </li>
                    @foreach ($categories as $category)
                        <li><a href="{{ route('categoryProduct', str_replace(' ', '-', $category->name)) }}"
                               class="site-nav">{{ $category->name }}</a>
                        </li>
                    @endforeach
{{--                    <li><a href="blog-left-sidebar.html" class="site-nav">LUMÂNĂRI FORMĂ</a></li>--}}
{{--                    <li><a href="blog-right-sidebar.html" class="site-nav">LUMÂNĂRI ÎN RECIPIENT</a></li>--}}
{{--                    <li><a href="blog-fullwidth.html" class="site-nav">MĂRTURII EVENIMENT</a></li>--}}
{{--                    <li><a href="blog-grid-view.html" class="site-nav">WAX MELTS</a></li>--}}
{{--                    <li><a href="blog-article.html" class="site-nav">CADOURI</a></li>--}}
                </ul>
            </li>
            <li class="lvl1"><a href="{{ route('index') }}">Blog </a></li>
            <li class="lvl1"><a href="#"><b>Contacte!</b></a>
            </li>
        </ul>
    </div>
    <!--End Mobile Menu-->

    <!--Body Content-->
    @yield('content')
    <!--End Body Content-->

    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <div class="section-header text-center">
                                    <label class="h2"><span>sign up for </span>newsletter</label>
                                </div>
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input"
                                               name="EMAIL" value="" placeholder="Email address" required="">
                                        <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit"
                                                        id="Subscribe"><span
                                                        class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                        <div class="footer-social">
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" target="_blank"
                                       title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i
                                            class="icon icon-facebook"></i></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                       title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i
                                            class="icon icon-pinterest"></i> <span
                                            class="icon__fallback-text">Pinterest</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                       title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i
                                            class="icon icon-instagram"></i> <span
                                            class="icon__fallback-text">Instagram</span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
            <div class="container">
                <!--Footer Links-->
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Info</h4>
                            <ul>
                                <li><a href="#">Plata și Livrare</a></li>
                                <li><a href="#">Politica de retur produse</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Legal</h4>
                            <ul>
                                <li><a href="#">Politica de confidențialitate</a></li>
                                <li><a href="#">Politica de cookies</a></li>
                                <li><a href="#">Termeni și condiții</a></li>
                                <li><a href="#">ANPC</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Servicii pentru clienți</h4>
                            <ul>
                                <li><a href="#">Întrebări frecvente</a></li>
                                <li><a href="#">Contactați-ne</a></li>
                                <li><a href="#">Comenzi și retururi</a></li>
                                <li><a href="#">Centrul de asistență</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                            <h4 class="h4">Contactați-ne</h4>
                            <ul class="addressFooter">
                                <li><i class="icon anm anm-map-marker-al"></i>
                                    <p>Chisinau</p>
                                </li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i>
                                    <p> +373 611-09-404</p>
                                </li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i>
                                    <p>comanda@aromaflames.shop</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                    <div class="row">
                        <!--Footer Copyright-->
                        <div
                            class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                            <span></span> <a href="aromaflames.shop">© Toate drepturile rezervate 2023 AromaFlames</a>
                        </div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div
                            class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                            <ul class="payment-icons list--inline">
                                <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    <!--Quick View popup-->

    <!--End Quick View popup-->

    <!-- Newsletter Popup -->

    <!-- End Newsletter Popup -->

    <!-- Including Jquery -->
    <script src="{{ asset('storage/client/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/vendor/wow.min.js') }}"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('storage/client/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/lazysizes.js') }}"></script>
    <script src="{{ asset('storage/client/assets/js/main.js') }}"></script>

    @yield('script')

</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>
