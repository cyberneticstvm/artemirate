<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Artemirate Global</title>
        <meta name="description" content="description" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ public_path().'/images/favicon.png' }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ public_path().'/css/plugins.css' }}" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ public_path().'/css/style.css' }}" />
        <link rel="stylesheet" href="{{ public_path().'/css/responsive.css' }}" />
    </head>

    <body class="template-index diva">
        <!-- Page Loader -->
        <div id="pre-loader"><img src="{{ public_path().'/images/loader.gif' }}" alt="Artemirate..." /></div>
        <!-- End Page Loader -->

        <!-- Page Wrapper -->
        <div class="pageWrapper">
            <!-- Search Form Drawer -->
            <div class="search">
                <div class="search__form">
                    <form class="search-bar__form" action="#">
                        <button class="go-btn search__button" type="submit"><i class="icon an an-search"></i></button>
                        <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
                    </form>
                    <button type="button" class="search-trigger close-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"><i class="icon an an-times"></i></button>
                </div>
            </div>
            <!-- End Search Form Drawer -->

            <!-- Main Header -->
            <div class="header-section clearfix animated hdr-sticky">
                <!-- Desktop Header -->
                <div class="header-6 classic-style">
                    <!-- Header -->
                    <div class="header-wrap d-flex border-bottom">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-4 col-md-5 col-lg-8 d-block d-lg-none">
                                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i class="icon an an-times"></i><i class="icon an an-bars"></i></button>
                                    <!-- Mobile Search -->
                                    <div class="site-header__search d-block d-lg-none mobile-search-icon">
                                        <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                                    </div>
                                    <!-- End Mobile Search -->
                                </div>

                                <div class="col-4 col-sm-4 col-md-4 col-lg-5 d-none d-lg-block">
                                    <!-- Search -->
                                    <div class="site-header__search search-bar-inline">
                                        <form action="#" class="search-bar__form d-flex position-relative">
                                            <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
                                            <button class="go-btn search__button" type="submit"><i class="icon an an-search"></i></button>
                                        </form>
                                    </div>
                                    <!-- End Search -->
                                </div>

                                <!-- Desktop Logo -->
                                <div class="logo col-4 col-sm-4 col-md-2 col-lg-2 text-center">
                                    <a href="/"><img src="{{ public_path().'/images/logo/artemirate-logo.png' }}" alt="Artemirate" title="Artemirate" width="70%"/></a>
                                </div>
                                <!-- End Desktop Logo -->

                                <!-- Right Side -->
                                <div class="col-4 col-sm-4 col-md-5 col-lg-5">
                                    <div class="right-action text-action d-flex-align-center justify-content-end">
                                        <!-- Search -->
                                        <div class="item site-header__search d-none">
                                            <button type="button" class="search-trigger"><i class="icon an an-search"></i><span class="text align-middle ms-1 d-none d-md-inline-block">Search</span></button>
                                        </div>
                                        <!-- End Search -->
                                        <!-- User Links -->
                                        <div class="item site-user-menu d-none d-sm-inline-block">
                                            
                                        </div>
                                        <!-- End User Links -->
                                        <!-- Wishlist -->
                                        <div class="item site-header-wishlist">
                                            
                                        </div>
                                        <!-- End Wishlist -->
                                        <!-- Minicart -->
                                        <div class="item site-cart">
                                            
                                        </div>
                                        <!-- End Minicart -->
                                    </div>
                                </div>
                                <!-- End Right Side -->
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Desktop Navigation -->
                    <div class="main-navigation d-none d-lg-block">
                        <!-- Desktop Menu -->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="d-flex flex-wrap site-nav medium center m-auto hidearrow">
                                <li class="lvl1 parent dropdown">
                                    <a href="/">HOME <i class="an an-angle-down"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu">
                                    <a href="/collection/">DINNERWARE <i class="an an-angle-down"></i></a>
                                    <div class="megamenu style2">
                                        <ul class="row mmWrapper">
                                            @foreach($collections as $collection)
                                            <li class="lvl-1 col-md-3 col-lg-3">
                                                <a href="/collection/{{ $collection->slug }}" class="site-nav lvl-1 menu-title">{{ $collection->name }}</a>
                                                <a href="/collection/{{ $collection->slug }}" class="catalogueImg mb-2"><img src="{{ public_path().'/storage/'.$collection->main_image }}" alt="{{ $collection->name }}" /></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="lvl1 parent dropdown">
                                    <a href="/cutlery/">CUTLERY <i class="an an-angle-down"></i></a>
                                </li>
                                <li class="lvl1 parent dropdown">
                                    <a href="/about-us/">ABOUT US <i class="an an-angle-down"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Desktop Menu -->
                    </div>
                    <!-- End Desktop Navigation -->
                </div>
                <!-- End Desktop Header -->
            </div>
            <!-- End Main Header -->

            <!-- Mobile Menu -->
            <div class="mobile-nav-wrapper dark-wrapper" role="navigation">
                <div class="closemobileMenu"><i class="icon an an-times-circle closemenu"></i> Close Menu</div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 parent megamenu">
                        <a href="/">HOME<i class="an an-plus"></i></a>
                    </li>
                    <li class="lvl1 parent megamenu">
                        <a href="#">DINNERWARE <i class="an an-plus"></i></a>
                        <ul>
                            <li>
                                <a href="#" class="site-nav">Clothing <i class="an an-plus"></i></a>
                                <ul>
                                    <li><a href="#" class="site-nav">Tops &amp; Tees</a></li>
                                    <li><a href="#" class="site-nav">Dresses &amp; Jumpsuits</a></li>
                                    <li><a href="#" class="site-nav">Trousers &amp; Jeans</a></li>
                                    <li><a href="#" class="site-nav">Winter Jackets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="site-nav">Bags <i class="an an-plus"></i></a>
                                <ul>
                                    <li><a href="#" class="site-nav">Hobo Bags</a></li>
                                    <li><a href="#" class="site-nav">Satchel Bags</a></li>
                                    <li><a href="#" class="site-nav">Clutch Handbags</a></li>
                                    <li><a href="#" class="site-nav">Crossbody Bags</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="site-nav">Footwear <i class="an an-plus"></i></a>
                                <ul>
                                    <li><a href="#" class="site-nav">Outdoor Shoes</a></li>
                                    <li><a href="#" class="site-nav">Costume Footwear</a></li>
                                    <li><a href="#" class="site-nav">Girl's Boots</a></li>
                                    <li><a href="#" class="site-nav">Rain Footwear</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="site-nav">Accessories <i class="an an-plus"></i></a>
                                <ul>
                                    <li><a href="#" class="site-nav">Watches</a></li>
                                    <li><a href="#" class="site-nav">Bracelets</a></li>
                                    <li><a href="#" class="site-nav">Pedometers</a></li>
                                    <li><a href="#" class="site-nav">Necklaces</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu">
                        <a href="/cutlery/">CUTLERY <i class="an an-plus"></i></a>
                    </li>
                    <li class="lvl1 parent megamenu">
                        <a href="/about-us/">ABOUT US <i class="an an-plus"></i></a>
                    </li>
                </ul>
            </div>
            <!-- End Mobile Menu -->

            @yield("content")

            <!-- Footer -->
            <footer id="footer" class="footer-3">
                <div class="site-footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <!-- Custom block -->
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 custom-block">
                                    <div class="footer-logo"><img src="{{ public_path().'/images/logo/artemirate-logo.png' }}" alt="Artemirate" title="Artemirate" width="50%" /></div>
                                    <div class="text mb-2 mb-md-0 mt-3">Style, elegance and sophistication. Everything on your table. Artemirate is connected with premium international tableware brands. We cater to hotels, restaurants, cafes, or catering companies and offer you personalized services.</div>
                                </div>
                                <!-- End Custom block -->
                                <!-- Footer Links -->
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                    <h4 class="h4">Quick Links</h4>
                                    <ul>
                                        <li><a href="#">Bowls</a></li>
                                        <li><a href="#">Plates</a></li>
                                        <li><a href="#">Coffee & Tea</a></li>
                                        <li><a href="#">Cups & Mugs</a></li>
                                        <li><a href="#">Service Accessories</a></li>
                                    </ul>
                                </div>
                                <!-- End Footer Links -->
                                <!-- Contact box -->
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                    <h4 class="h4">Contact Us</h4>
                                    <ul class="addressFooter">
                                        <li>
                                            <i class="icon an an-map-marker"></i>
                                            <p>ARTEMIRATE LLC, Al Fahidi,<br>Office No. 43-44, Bur Dubai, Dubai,<br>UAE</p>
                                        </li>
                                        <li class="phone">
                                            <i class="icon an an-phone-volume"></i>
                                            <p><a href="tel:+971569665128">(+971) 569665128</a></p>
                                        </li>
                                        <li class="email">
                                            <i class="icon an an-envelope"></i>
                                            <p><a href="mailto:sales@yousite.com">info@artemirate.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Contact box -->
                                <!-- Newsletter -->
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 newsletter">
                                    <div class="display-table">
                                        <div class="display-table-cell footer-newsletter">
                                            <form action="#" method="post">
                                                <label class="h4">Newsletter</label>
                                                <p>sign up for newsletter to know our latest news and offers.</p>
                                                <div class="input-group">
                                                    <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required />
                                                    <span class="input-group__btn">
                                                        <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Sign Up</span></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Newsletter -->
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row flex-row-reverse">
                                <!-- Footer Menu -->
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center justify-content-md-end align-items-center">
                                    <ul class="d-flex flex-wrap justify-content-center justify-content-md-end mb-2 mb-md-0">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="shop-left-sidebar.html">Search</a></li>
                                        <li><a href="contactus-style1.html">Contact Us</a></li>
                                        <li><a href="about-us-style1.html">About Us</a></li>
                                    </ul>
                                </div>
                                <!-- End Footer Menu -->
                                <!-- Footer Copyright -->
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 copyright d-flex justify-content-center justify-content-md-start align-items-center"><span>&copy; 2022 Artemirate.</span> All Rights Reserved.</div>
                                <!-- End Footer Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <!-- Scoll Top -->
            <div id="site-scroll"><i class="icon an an-angle-up"></i></div>
            <!-- End Scoll Top -->

            <!-- Including Javascript -->
            <!-- Plugins JS -->
            <script src="{{ public_path().'/js/plugins.js' }}"></script>
            <!-- Main JS -->
            <script src="{{ public_path().'/js/main.js' }}"></script>

        </div>
        <!-- End Page Wrapper -->
    </body>
</html>

