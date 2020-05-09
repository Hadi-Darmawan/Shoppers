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
            <div class="card" style="height: 23rem;">
                @foreach ($product->Product_Image->take(1)->sortByDesc('id') as $image)
                <div class="carousel-inner my-auto" style="height: 11em;">
                    <div class="carousel-item active" >
                        <img src="{{ asset('storage/' . $image->image_name) }}" class="d-block w-100" alt=" {{ $image->image_name }}">
                    </div>
                </div>
                @endforeach
                <div class="card-body">
                    <p class="card-title text-center">{{ $product->product_name }}</p>
                    <p class="text-right text-secondary">
                        @foreach ($product->Product_Category as $category)
                            {{ $category->category_name }}
                        @endforeach
                    </p>
                </div>
                <div class="card-footer text-right">
                    <p class="card-text text-right">Rp {{ number_format($product->price) }}</p>
                    <form class="d-inline" action="{{ route('deleteProduct', $product->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-danger text-justify">Delete</button>
                            <a href="{{ route('detailProduct', $product->id) }}" class="btn btn-primary">Detail</a>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection