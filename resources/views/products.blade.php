@extends("base")

@section("content")
<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <div class="section-header text-center mt-5">                    
                        <h2 class="h2">{{ $collection->name }}</h2>               
                    
                    <p>Here you can set up to 8 tabs for your store collection.<br/>This will look perfect on all device.</p>
                </div>
                <div class="productList">
                    <div class="grid-products grid--view-items product-four-load-more">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item" style="display: block;">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <!-- Product Image -->
                                    <a href="/">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyloaded" data-src="{{ public_path().'/storage/'.$product->main_image }}" src="{{ public_path().'/storage/'.$product->main_image }}" alt="{{ $product->name }}" title="{{ $product->name }}">
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyloaded" data-src="{{ public_path().'/storage/'.$product->main_image }}" src="{{ public_path().'/storage/'.$product->main_image }}" alt="{{ $product->name }}" title="{{ $product->name }}">
                                        <!-- End Hover Image -->
                                        <!-- Product Label -->
                                        <div class="product-labels rectangular"><span class="lbl pr-label1">new</span></div>
                                        <!-- End Product Label -->
                                    </a>
                                    <!-- End Product Image -->
                                </div>
                                <!-- End Product Image -->

                                <!-- Product Details -->
                                <div class="product-details text-center">
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="/">{{ $product->name }}</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star"></i>
                                        <i class="an an-star-half-alt"></i>
                                    </div>
                                    <!-- End Product Review -->
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
@endsection