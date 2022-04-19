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
    <div class="tab-slider-product section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Featured Collections</h2>
                        <p>Here you can set up to 8 tabs for your store collection.<br/>This will look perfect on all device.</p>
                    </div>
                    <div class="tabs-listing">
                        <div class="tab_container">
                            <div class="tab_content grid-products grid-products-hover-btn">
                                <div class="productSlider">
                                    @foreach($collections as $collection)
                                    <div class="col-12 item">
                                        <div class="product-image">
                                            <!-- product Image -->
                                            <a href="/collection/{{ $collection->slug }}">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ public_path().'/storage/'.$collection->main_image }}" src="" alt="{{ $collection->name }}" title="{{ $collection->name }}" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ public_path().'/storage/'.$collection->hover_image }}" alt="image" title="{{ $collection->name }}" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels rectangular"><!--<span class="lbl on-sale">-16%</span>--> <span class="lbl pr-label1">new</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <h2><a href="/">{{ $collection->name }}</a></h2>
                                            </div>
                                            <!-- End Product Name -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly featured items -->
</div>
<!-- End Body Content -->
@endsection