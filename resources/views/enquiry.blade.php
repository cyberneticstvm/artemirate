@extends("base")

@section("content")
<!-- Body Content -->
<div id="page-content">
    <!-- Page Title -->
    <div class="page section-header text-center mb-0">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Enquiry Form</h1></div>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 box">	
                <div class="mb-4">
                    <h3>Personal Information</h3>
                    <form method="post" action="#" accept-charset="UTF-8" class="customer-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerFirstName">First Name <span class="required">*</span></label>
                                    <input id="CustomerFirstName" type="text" name="customer[first-name]" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerLastName">Last Name <span class="required">*</span></label>
                                    <input id="CustomerLastName" type="text" name="customer[Last-name]" placeholder="" />                        	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerContact">Contact Number <span class="required">*</span></label>
                                    <input id="CustomerContact" type="text" name="customer[contact]" placeholder="" />                        	
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email Address <span class="required">*</span></label>
                                    <input id="CustomerEmail" type="email" name="customer[email]" placeholder="" />                        	
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3">Product Information</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">                                	
                                <div class="form-group">
                                    <label for="sku">SKU <span class="required">*</span></label>
                                    <input id="sku" type="text" name="customer[sku]" value="{{ $sku }}" placeholder="" readonly />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="qty">QTY <span class="required">*</span></label>
                                    <input id="qty" type="number" name="customer[qty]" value="{{ $qty }}" placeholder="" />                        	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="submit" class="btn mb-3" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Body Content -->
@endsection