@extends('layout/admin')

@section('title', 'Shoppers - Courier')

@section('contentTitle', 'Courier Page')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h4 class="card-title">Courier List</h4>
    </div>
    <ul class="list-group py-4 px-4">
        @foreach($couriers as $courier)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $courier->courier }}
            <a href="{{ route('detailCourier', $courier->id)}}" class="badge badge-info px-2 py-2">Detail</a>
        </li>
        @endforeach
    </ul>
    <div class="form-group mb-3 px-4">
        <form class="input-group mb-3" method="post" action="{{ route('addNewCourier') }}">
        @csrf
        <input type="text" class="form-control @error('courier') is-invalid @enderror" name="courier" placeholder="Add New Courier" aria-label="Recipient's username" autocomplete="off">
        <button class="btn btn-outline-secondary" type="submit">Add Courier</button>
        @error('courier')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </form>
    </div>
</div>

@endsection