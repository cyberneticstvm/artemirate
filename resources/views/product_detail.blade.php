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
                <div class="productList">
                    <div class="grid-products grid--view-items product-four-load-more">
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection