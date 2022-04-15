@extends("base")

@section("content")
<!-- Body Content -->
<div id="page-content">
    <!-- Home Banner slider -->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow slideshow--large">
            <div class="slide slide1 d-block">
                <div class="slideimg blur-up lazyload">
                    <a href="/"><img class="blur-up lazyload" data-src="{{ public_path().'/storage/gallery/artemirate-banner1.webp' }}" src="{{ public_path().'/storage/gallery/artemirate-banner1.webp' }}" alt="banner" title="" /></a>
                </div>
            </div>
            <div class="slide slide2 d-block">
                <div class="slideimg blur-up lazyload">
                    <a href="collection-4columns.html"><img class="blur-up lazyload" data-src="{{ public_path().'/storage/gallery/artemirate-banner2.webp' }}" src="{{ public_path().'/storage/gallery/artemirate-banner2.webp' }}" alt="banner" title="" /></a>
                </div>
            </div>
            <div class="slide slide2 d-block">
                <div class="slideimg blur-up lazyload">
                    <a href="collection-4columns.html"><img class="blur-up lazyload" data-src="{{ public_path().'/storage/gallery/artemirate-banner3.webp' }}" src="{{ public_path().'/storage/gallery/artemirate-banner3.webp' }}" alt="banner" title="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Banner slider -->

    <!-- Weekly featured items -->
    <div class="section custom-content-style1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Favorite pieces handpicked for you</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center custom-content">
                <!-- Product List -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 custom-item grid-products grid-products-hover-btn">   
                    <div class="centerMode-slider">
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">Edna Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Hover Image -->
                                </a>
                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">Elastic Waist Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product">
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">3/4 Sleeve Kimono Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                    <!-- Product Label -->
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End Product Label -->
                                </a>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">Cape Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="old-price">$900.00</span>
                                        <span class="price">$788.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">Paper Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$550.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- Product Image -->
                                <a href="product-layout7.html" class="grid-view-item__link">
                                    <!-- Image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="/images/product-images/product-image1_500x700.jpg" src="/images/product-images/product-image1_500x700.jpg" alt="image" title="product" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout7.html">Buttercup Dress</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$420.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-set style4 mobile">
                                        <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                            <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                        </div>
                                        <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                            </form>
                                        </div>
                                        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                            <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                        </div>
                                        <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                            <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product List -->
            </div>
        </div>
    </div>
    <!-- End Weekly featured items -->

    <!-- Collection -->
    <div class="collection-box tle-bold section">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2 class="h2">Fashion Clothing and Accessories</h2>
            </div>
            <!-- Collection Box -->
            <div class="collection-grid-3item">
                <div class="collection-grid-item">
                    <img class="blur-up lazyload" data-src="/images/collection/home7-collection1_640x800.jpg" src="/images/collection/home7-collection1_640x800.jpg" alt="collection" title="" />
                    <a href="shop-left-sidebar.html" class="collection-grid-item__title-wrapper">
                        <div class="title-wrapper">
                            <h3 class="collection-grid-item__title fw-bold">Formal Wear <span>Be the best dressed guest</span></h3>
                            <span class="btn btn--secondary border-btn-1">Shop Formal Wear</span>
                        </div>
                    </a>
                </div>
                <div class="collection-grid-item">
                    <img class="blur-up lazyload" data-src="/images/collection/home7-collection1_640x800.jpg" src="/images/collection/home7-collection1_640x800.jpg" alt="collection" title="" />
                    <a href="shop-right-sidebar.html" class="collection-grid-item__title-wrapper">
                        <div class="title-wrapper">
                            <h3 class="collection-grid-item__title fw-bold">Shoes <span>Romantic party styles</span></h3>
                            <span class="btn btn--secondary border-btn-1">Shop Shoes</span>
                        </div>
                    </a>
                </div>
                <div class="collection-grid-item">
                    <img class="blur-up lazyload" data-src="/images/collection/home7-collection1_640x800.jpg" src="/images/collection/home7-collection1_640x800.jpg" alt="collection" title="" />
                    <a href="shop-listview-sidebar.html" class="collection-grid-item__title-wrapper">
                        <div class="title-wrapper">
                            <h3 class="collection-grid-item__title fw-bold">Jewellery <span>Want to shine?</span></h3>
                            <span class="btn btn--secondary border-btn-1">Shop Jewellery</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Collection Box -->
        </div>
    </div>
    <!-- End Collection -->

    <!-- Custom Content -->
    <div class="section custom-content-section">
        <div class="container">
            <div class="row custom-content">
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-text text-md-left">
                        <h2 class="h3">Welcome to diva template</h2>
                        <p>We create minimal, functional and design-focused beautiful themes that fit seamlessly with your store</p>
                        <a href="shop-left-sidebar.html" class="btn border-btn-2">Find Blouses Here</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-image">
                        <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="/images/collection/home7-collection4_700x500.jpg" src="/images/collection/home7-collection4_700x500.jpg" alt="collection" title="" />
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-image">
                        <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="/images/collection/home7-collection4_700x500.jpg" src="/images/collection/home7-collection4_700x500.jpg" alt="collection" title="" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-text text-md-left">
                        <h2 class="h3">Simple, yet significant</h2>
                        <p>We have created a Store  that looks Awesome and performs <strong>Brilliantly</strong></p>
                        <a href="shop-listview-sidebar.html" class="btn border-btn-2">Discover More</a>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Custom Content -->

    <!-- Instagram -->
    <div class="section home-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Diva On Instagram</h2>
                        <p>Phasellus lorem malesuada ligula pulvinar commodo maecenas suscipit auctom.</p>
                    </div>
                </div>
            </div>

            <!-- Instagram Slider -->
            <div class="instagram-section instagram-slider">
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
                <div class="instagram-item">
                    <a href="#">
                        <img class="blur-up lazyload" src="/images/instagram/instagram-1_600x600.jpg" data-src="/images/instagram/instagram-1_600x600.jpg" alt="image" title="" />
                        <span class="inst-icon"><i class="icon an an-instagram"></i></span>
                    </a>
                </div>
            </div>
            <!-- End Instagram Slider -->

            <div class="followus text-center mt-3">
                <a href="#" target="_blank" class="btn">View Gallery</a>
            </div>
        </div>
    </div>
    <!-- End Instagram -->

    <!-- Store Feature -->
    <div class="section store-feature style3 no-pb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
                    <div class="store-info px-3 py-3 text-center">
                        <div class="icons mb-3"><i class="icon an an-truck"></i></div>
                        <div class="store-info-text">
                            <h5>Free Worldwide Shipping</h5>
                            <span class="sub-text">Free shipping on all US orders</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
                    <div class="store-info px-3 py-3 text-center">
                        <div class="icons mb-3"><i class="icon an an-lock"></i></div>
                        <div class="store-info-text">
                            <h5>Secure Payment System</h5>
                            <span class="sub-text">All payment are Secured, trusted.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Store Feature -->

</div>
<!-- End Body Content -->
@endsection