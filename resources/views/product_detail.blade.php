@extends("base")

@section("content")
<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <div class="section-header text-center mt-5">                    
                        <h2 class="h2">{{ $product->product_name }}</h2>               
                    
                    <p>Here you can set up to 8 tabs for your store collection.<br/>This will look perfect on all device.</p>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="ProductSection-product-template" class="product-template__container prstyle2">
            <!-- #ProductSection product template -->
            <div class="product-single product-single-1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img product-single__photos bottom">
                            <!-- Product Images -->
                            <div class="zoompro-wrap product-zoom-right pl-20">
                                <div class="zoompro-span">
                                    <img class="blur-up lazyload zoompro" data-zoom-image="{{ public_path().'/storage/'.$product->main_image }}" alt="{{ $product->product_name }}" src="{{ public_path().'/storage/'.$product->main_image }}" />               
                                </div>
                                <div class="product-labels"><span class="lbl pr-label1">new</span><span class="lbl on-sale">Exclusive</span></div>
                                <div class="product-buttons">
                                    <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" data-bs-toggle="tooltip" data-bs-placement="left" title="Watch Video"><i class="icon an an-play" aria-hidden="true"></i></a>
                                    <a href="#" class="btn prlightbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom Image"><i class="icon an an-expand-arrows-alt" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- End Product Images -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- Product Info -->
                        <div class="product-single__meta">
                            <h1 class="product-single__title">{{ $product->product_name }}</h1>
                            <h5>{{ $product->name }}</h5>
                            <!-- Product Description -->
                            <div class="product-single__description rte">
                                <ul class="checkmark">
                                    <li>Category: {{ $collection->name }}</li>
                                    <li>Material: {{ $product->material }}</li>
                                    <li>Shape: {{ $product->shape }}</li>
                                    <li>Dimension: {{ $product->dimension }}</li>
                                    <li>Usage: {{ $product->usages }}</li>
                                </ul>
                            </div>
                            <!-- End Product Description -->
                            <!-- Form -->
                            <form method="post" action="/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template product-form-border hidedropdown" enctype="multipart/form-data">
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus" aria-hidden="true"></i></a>
                                                <input type="text" name="quantity" value="1" class="product-form__input qty" />
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="payment-button" data-shopify="payment-button">
                                        <button type="button" class="payment-button__button payment-button__button--unbranded">SEND ENQUIRY</button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <!-- End Form -->
                            <!-- Product Intro -->
                            <div class="product-info">
                                <p class="product-stock">Availability: <span class="instock">In Stock</span><span class="outstock hide">Unavailable</span></p> 
                                <p class="product-type">Product Type: <span>unique</span></p>  
                                <p class="product-type">Vendor: <span>Sibel Saral</span></p>  
                                <p class="product-sku">SKU: <span class="variant-sku">3435DT-1</span></p>
                            </div>
                            <!-- End Product Intro -->
                        </div>
                        <!-- End Product Info -->
                    </div>
                </div>
                <!-- End Product single -->
            </div>
            <!-- #ProductSection product template -->
        </div>
        <!-- End Main Content -->
    </div>
</div>
@endsection