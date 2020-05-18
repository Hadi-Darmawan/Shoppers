@extends('layout/user')

@section('title', 'Shoppers - My Page')

@section('contentTitle', 'Shoppers')

@section('content')

        <!-- <div id="demo" class="carousel slide pt-3" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-inner" style="width: 800px;">
                @foreach($products->take(1)->sortByDesc('id') as $product)
                    @foreach ($product->Product_Image->take(3)->sortByDesc('id') as $image)
                    <div class="carousel-item @if($loop->first) active @endif align-middle">
                        <img src="{{ asset('storage/' . $image->image_name) }}" alt="Los Angeles" class="mx-auto d-block">
                    </div>
                    @endforeach
                @endforeach
            </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div> -->
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-5 text-left bg-light">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach($products as $product)
                <div class="col mb-4">
                    <div class="card" style="height: 23rem;">
                    @foreach ($product->Product_Image->sortByDesc('id')->take(1) as $image)
                    <div class="carousel-inner my-auto" style="height: 11rem;">
                        <img src="{{ asset('storage/' . $image->image_name) }}" class="d-block w-100" alt="{{ $image->image_name }}">
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
                    <form class="d-inline" action="#" method="">
                        @csrf
                        <button class="btn btn-outline-info text-justify">Detail</button>
                    </form>
                </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
 @endsection
