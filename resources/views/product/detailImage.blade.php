@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Images')

@section('content')

<div class="card mb-5 p-2">
    <div class="card-body text-center">
        <h4 class="card-title">{{ $product->product_name }} Detail</h4>
        <p class="text-secondary">See <a href="{{ route('detailProduct', $product->id) }}" class="text-secondary text-decoration-none">product details</a></p>
    </div>
    <div class="row row-cols-1 row-cols-md-4 mt-2">
        @foreach($product->product_image->sortByDesc('id') as $image)
        <div class="col mb-4">
            <div class="card">
                <div class="carousel-inner my-auto" style="height: 8rem;">
                    <img src="{{ asset('storage/' . $image->image_name) }}" class="d-block w-100" alt=" {{ $image->image_name }} alt="...">
                </div>
                <div class="card-body">
                    <form class="d-inline" action="{{ route('deleteImage', $image->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-danger"
                        @if($loop->first) 
                            disabled
                        @endif
                        >Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <form class="mt-2" method="post" action="{{ route('updateImage', $product->id) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
            <div class="custom-file">
                <input type="file" accept="image/*" name="image_name[]" id="product_image" class="custom-file-input @error('image_name') is-invalid @enderror" multiple="true">
                <label class="custom-file-label" for="product_image">Add another product image</label>
                @error('image_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <script>
                    $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>
            </div>
        </div>
        <button class="btn btn-outline-secondary text-right" type="submit">Add Images</button>
    </form>
</div>

@endsection