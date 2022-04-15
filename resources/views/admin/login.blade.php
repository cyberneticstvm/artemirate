@extends("admin/base")

@section("content")
<div class="container mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-4"></div>
        <div class="col-md-4 box">
            <div class="mb-4">
                <form method="post" accept-charset="UTF-8" class="customer-form">
                    @csrf	
                    <h3>Artemirate Admin</h3>
                    <p>If you have an account with us, please log in.</p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">Username <span class="required">*</span></label>
                                <input type="text" name="username" placeholder="Username" required="required" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Password <span class="required">*</span></label>
                                <input type="password" value="" name="password" placeholder="Password" required="required" class="">                        	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn mb-3" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
        <!-- End Main Content -->
    </div>
</div>
@endsection