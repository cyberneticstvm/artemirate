@extends("admin/base")

@section("content")
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 box">
            <form method="post" accept-charset="UTF-8" class="customer-form" action="{{ route('product.save') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Collection<span class="required">*</span></label>
                            <select class="form-control" name="collection_id" required="required">
                                <option value="">Select</option>
                                @foreach($collections as $collection)
                                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Product Name<span class="required">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name" required="required"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Product Description<span class="required">*</span></label>
                            <input type="text" name="description" class="form-control" placeholder="Product Description" required="required"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Main Image<span class="required">*</span></label>
                            <input type="file" name="main_image" class="form-control" required="required"/>
                        </div>
                    </div>
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="">Hover Image</label>
                            <input type="file" class="form-control" name="hover_image"/>
                        </div>
                    </div>-->
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