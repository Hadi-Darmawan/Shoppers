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
        <div class="col mb-4">
            <div class="card" style="height: 26rem;">
                <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="card-link stretched-link text-secondary" style="width: 18rem;">This is a longer card with supporting text below as a natural lead-in to additional content.</a>
                </div>
                <div class="card-footer text-right">
                    <p class="card-text text-left">Rp 50.000
                        <a href="#" class="btn btn-primary">Detail Product</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                <a href="#" class="btn btn-primary">Detail Product</a>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                <a href="#" class="btn btn-primary">Detail Product</a>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                <a href="#" class="btn btn-primary">Detail Product</a>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection