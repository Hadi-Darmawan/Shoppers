@extends('layout/admin')

@section('title', 'Shoppers - Category')

@section('contentTitle', 'Product Category Detail')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h3 class="card-title mb-5">{{ $product_category->category_name }}</h3>
        <div class="form-group mb-3 px-4">
            <form class="d-inline" method="post" action="{{ $product_category->id }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-outline-danger mx-2">Delete</button>
            </form>
            <a href="{{ route('addCategory')}}" class="btn btn-outline-secondary mx-1">All Product Category</a>
            <a href="{{ route('addProduct')}}" class="btn btn-outline-primary mx-1">Add New Product</a>
        </div>
        <div class="form-group mb-3">
            <form class="input-group mb-3" method="post" action="{{ route('updateCategory', $product_category->id)}}">
                @method('patch')
                @csrf
                <input type="text" class="form-control mx-1" name="category_name" value="{{ $product_category->category_name }}" placeholder="Edit Product Category Name">
                <button class="btn btn-outline-primary mx-1" type="submit">Save Change</button>
            </form>
        </div>
        @error('category_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

@endsection