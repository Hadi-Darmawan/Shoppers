@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Dicounts')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h4 class="card-title">Product Discounts</h4>
        <p class="text-secondary">See <a href="{{ route('detailProduct', $product->id) }}" class="text-secondary text-decoration-none">product details</a></p>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Percentage</th>
                <th scope="col">Start at</th>
                <th scope="col">End at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($product->discount->sortByDesc('id') as $discount)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $discount->percentage }}</td>
                <td>{{ $discount->start }}</td>
                <td>{{ $discount->end }}</td>
                <td><a href="{{ route('editDiscount', $discount->id) }}" class="badge badge-info px-2 py-2">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form class="mb-3 mt-2" method="post" action="{{ route('updateDiscount', $product->id) }}">
    @csrf
    @method('patch')
        <div class="row">
            <div class="col">
                <div class="input-group">
                    <input type="text" class="form-control text-right" name="percentage" placeholder="Percentage">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="date" class="form-control text-right" name="start" placeholder="Percentage">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="date" class="form-control text-right" name="end" placeholder="Percentage">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary mb-2" type="submit">Add Discount</button>
            </div>
        </div>
    </form>
</div>

@endsection