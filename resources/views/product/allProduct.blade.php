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
    <div class="row row-cols-1 row-cols-md-3 text-justify">
        @foreach($products as $product)
        <div class="col mb-4">
            <div class="card" style="height: 26rem;">
                @foreach ($product->Product_Image as $image)
                <img src="{{ asset('storage/' . $image->image_name) }}" class="card-img-top" alt="...">
                @endforeach
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text text-secondary" style="width: 18rem;">{{ $product->description }}</p>
                    <!-- <a href="#" class="card-link stretched-link text-secondary" style="width: 18rem;">{{ $product->description }}</a> -->
                </div>
                <div class="card-footer text-right">
                    <p class="card-text text-right">Rp {{ $product->price }}</p>
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