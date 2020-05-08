@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Page')

@section('content')
<div class="card">
    <div class="card-body text-center">
        Add new product. Click the button below.
        <a href="{{ route('addProduct') }}" class="btn btn-outline-secondary btn-lg btn-block">Add Product</a>
    </div>
</div>
<div class="card-body text-center">
    <div class="row row-cols-1 row-cols-md-4 text-justify">
        @foreach($products as $product)
        <div class="col mb-4">
            <div class="card" style="height: 22rem;">
                @foreach ($product->Product_Image->take(1)->sortByDesc('id') as $image)
                <div class="carousel-inner my-auto" style="height: 15rem;">
                    <div class="carousel-item active" >
                        <img src="{{ asset('storage/' . $image->image_name) }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                @endforeach
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product->product_name }}</h5>
                        <ul class="list-inline text-right mt-4">
                            @foreach ($product->Product_Category as $category)
                            <li class="list-inline-item text-secondary">{{ $category->category_name }}</li>
                            @endforeach
                        </ul>
                </div>
                <div class="card-footer text-right">
                    <p class="card-text text-right">Rp {{ number_format($product->price) }}</p>
                    <p class="card-text text-left">
                        <a href="{{ route('detailProduct', $product->id) }}" class="btn btn-primary">Detail Product</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection