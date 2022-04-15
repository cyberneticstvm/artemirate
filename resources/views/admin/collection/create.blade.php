@extends("admin/base")

@section("content")
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 box">
            <form method="post" accept-charset="UTF-8" class="customer-form" action="{{ route('collection.save') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Collection Name<span class="required">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Collection Name" required="required" autofocus />
                        </div>
                    </div>
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="">Slug<span class="required">*</span></label>
                            <input type="text" name="slug" class="form-control" placeholder="Slug" required="required"/>
                        </div>
                    </div>-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Main Image<span class="required">*</span></label>
                            <input type="file" name="main_image" class="form-control" required="required"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Hover Image<span class="required">*</span></label>
                            <input type="file" class="form-control" name="hover_image" required="required"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2"><button type="submit" class="btn w-100">SAVE</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection