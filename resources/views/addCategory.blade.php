@extends('layout/admin')

@section('title', 'Shoppers - Category')

@section('contentTitle', 'Category Page')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h4 class="card-title">Product Category</h4>
    </div>
    <ul class="list-group py-4 px-4">
        @foreach($product_categories as $product_category)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $product_category->category_name }}
            <a href="{{ route('detailCategory', $product_category->id)}}" class="badge badge-info px-2 py-2">Detail</a>
        </li>
        @endforeach
    </ul>
    <div class="form-group mb-3 px-4">
        <form class="input-group mb-3" method="post" action="{{ route('addNewCategory') }}">
        @csrf
        <input type="text" class="form-control" name="category_name" placeholder="Add New Product Category" aria-label="Recipient's username" >
            <button class="btn btn-outline-secondary" type="submit">Add Category</button>
        </form>
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

@endsection