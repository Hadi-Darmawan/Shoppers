@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Page')

@section('content')
<div class="card">
    <div class="card-body text-center">
        See all product that had posted
        <a href="{{ route('addProduct') }}" class="btn btn-outline-secondary btn-lg btn-block">Add Product</a>
    </div>
</div>

@endsection