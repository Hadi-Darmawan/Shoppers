@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Page')

@section('content')
<div class="card">
    <div class="card-body text-center">
        See all product that had posted
        <a href="{{ route('allProduct') }}" class="btn btn-outline-secondary btn-lg btn-block">All Product</a>
    </div>
</div>
<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h4 class="card-title">Product Detail</h4>
    </div>
      
    <form class="mt-2" method="post" action="{{ route('newProduct') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="font-weight-bolder" for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->product_name}}">
        </div>
        <div class="form-group">
            <label class="font-weight-bolder" for="product_kategory">Product Ketegory</label>
            <div class="input-group mb-1">
                <select class="custom-select" id="product_kategory" name="category" multiple="">
                    @foreach($product_category as $categories)
                        <option value="{{ $categories->id }}" @foreach($product->product_category as $category) @if($categories->id == $category->id)selected @endif @endforeach> {{ $categories->category_name }}
                        </option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="product_kategory">Kategory</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bolder" for="description">Product Description</label>
            <textarea class="form-control" id="description" name="description" style="resize:none;height:120px;">{{$product->description}}</textarea>
        </div>
        <div class="card px-2 my-4">
            <label class="mt-2 ml-2 font-weight-bolder text-center">Product Images</label>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-4">
                    @foreach($product->product_image as $image)
                        <div class="card text-right" style="height: 14rem;">
                            <div class="carousel-inner" style="height: 15rem;">
                                <div class="carousel-item active p-2">
                                    <img src="{{ asset('storage/' . $image->image_name) }}" alt="{{ $image->image_name }}" class="d-block w-100">
                                </div>
                            </div>
                            <div class="card-footer">
                                <form class="d-inline" action="image/delete/{{$image->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger" @if($loop->first) disabled @endif>Delete Image</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" accept="image/*" name="image_name[]" id="product_image" class="custom-file-input" multiple="true">
                    <label class="custom-file-label" for="product_image">Add another product image</label>
                    <script>
                    $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                    </script>
                </div>
                @if (session('images_status'))
                    <div class="alert alert-danger alert-dismissible text-center" id="myAlert">
                        <button type="button" class="close">&times;</button>
                        {{ session('images_status') }}
                    </div>
                    <script>
                        $(document).ready(function(){
                            $(".close").click(function(){
                                $("#myAlert").alert("close");
                            });
                        });
                    </script>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="font-weight-bolder" for="product_price">Product Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" id="product_price" class="form-control text-right" name="price" placeholder="Enter the product price" value="{{ number_format($product->price) }}">
                    <div class="input-group-append">
                        <span class="input-group-text">,-</span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label class="font-weight-bolder" for="product_price">Product Weight</label>
                <div class="input-group mb-3">
                    <input type="text" id="product_price" class="form-control text-right" name="weight" placeholder="Enter the product weight" value="{{ $product->weight }}">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label class="font-weight-bolder" for="product_price">Product Stock</label>
                <div class="input-group mb-3">
                    <input type="text" id="product_price" class="form-control text-right" name="stock" placeholder="Enter the product stock" value="{{ $product->stock }}">
                    <div class="input-group-append">
                        <span class="input-group-text">Pcs</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card p-3 my-4">
            @foreach($product->discount as $discount)
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount">{{ $loop->iteration}} Discount</label>
                    <div class="input-group">
                        <input type="text" id="discount" class="form-control text-right" name="percentage" placeholder="Enter the product discount" value="{{ $discount->percentage }}">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount_start">Start at</label>
                    <div class="input-group">
                        <input type="date" id="discount_start" class="form-control text-right" name="start" placeholder="Product discount start" value="{{ $discount->start }}">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount_end">End at</label>
                    <div class="input-group">
                        <input type="date" id="discount_end" class="form-control text-right" name="end" placeholder="Product discount end" value="{{ $discount->end }}">
                    </div>
                </div>
            </div>
            @endforeach
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount">New Discount</label>
                    <div class="input-group">
                        <input type="text" id="discount" class="form-control text-right" name="percentage" placeholder="Enter the product discount">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount_start">Start at</label>
                    <div class="input-group">
                        <input type="date" id="discount_start" class="form-control text-right" name="start" placeholder="Product discount start">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-bolder" for="discount_end">End at</label>
                    <div class="input-group">
                        <input type="date" id="discount_end" class="form-control text-right" name="end" placeholder="Product discount end">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Save change</button>
    </form>

</div>
@endsection