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
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif	
                <div class="mb-4 mt-4">
                    <h3>Personal Information</h3>
                    <form method="post" action="{{ route('send-enquiry-email') }}" accept-charset="UTF-8" class="customer-form">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerFirstName">First Name <span class="required">*</span></label>
                                    <input id="CustomerFirstName" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="" />
                                </div>
                                @error('first_name')
                                <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerLastName">Last Name <span class="required">*</span></label>
                                    <input id="CustomerLastName" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="" />                        	
                                </div>
                                @error('last_name')
                                <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerContact">Contact Number <span class="required">*</span></label>
                                    <input id="CustomerContact" type="text" name="contact" value="{{ old('contact') }}" placeholder="" />                        	
                                </div>
                                @error('contact')
                                <small class="text-danger">{{ $errors->first('contact') }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email Address <span class="required">*</span></label>
                                    <input id="CustomerEmail" type="email" name="email" value="{{ old('email') }}" placeholder="" />                        	
                                </div>
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerMessage">Message <span class="required">*</span></label>
                                    <textarea id="CustomerMessage" rows="5" name="message">{{ old('message') }}</textarea>                     	
                                </div>
                                @error('message')
                                <small class="text-danger">{{ $errors->first('message') }}</small>
                                @enderror
                            </div>
                        </div>
                        <h3 class="mt-3">Product Information</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">                                	
                                <div class="form-group">
                                    <label for="sku">SKU <span class="required">*</span></label>
                                    <input id="sku" type="text" name="sku" value="{{ $sku }}" value="{{ old('sku') }}" placeholder="" readonly />
                                </div>
                                @error('sku')
                                <small class="text-danger">{{ $errors->first('sku') }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="qty">QTY <span class="required">*</span></label>
                                    <input id="qty" type="number" name="qty" value="{{ $qty }}" value="{{ old('qty') }}" placeholder="" />                        	
                                </div>
                                @error('qty')
                                <small class="text-danger">{{ $errors->first('qty') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-left col-12 col-sm-12 col-md-6 col-lg-6">
                                <button type="submit" class="btn btn-form-submit mb-3">SUBMIT</button>
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