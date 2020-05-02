@extends('layout/admin')

@section('title', 'Shoppers - Courier')

@section('contentTitle', 'Courier Detail')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h3 class="card-title mb-5">{{ $courier->courier }}</h3>
        <div class="form-group mb-3 px-4">
            <form class="d-inline" method="post" action="{{ $courier->id }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-outline-danger mx-2">Delete</button>
            </form>
            <a href="{{ route('addCourier')}}" class="btn btn-outline-secondary mx-1">All Courier List</a>
        </div>
        <div class="form-group mb-3">
            <form class="input-group mb-3" method="post" action="{{ route('updateCourier', $courier->id)}}">
                @method('patch')
                @csrf
                <input type="text" class="form-control mx-1 @error('courier') is-invalid @enderror" name="courier" value="{{ $courier->courier }}" placeholder="Edit Courier Name">
                <button class="btn btn-outline-primary mx-1" type="submit">Save Change</button>
                @error('courier')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </form>
        </div>
    </div>
</div>

@endsection