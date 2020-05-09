@extends('layout/admin')

@section('title', 'Shoppers - Product')

@section('contentTitle', 'Product Dicounts')

@section('content')

<div class="card p-3 mb-5 pb-3 mt-4">
    <div class="card-body text-center">
        <h4 class="card-title">Details of Product Discounts</h4>
        <p class="text-secondary">See <a href="{{ route('detailDiscount', $discount->product_id) }}" class="text-secondary text-decoration-none">all product discount</a></p>
    </div>
    <form class="mb-3 mt-2" method="post" action="{{ route('updateDiscount', $discount->id) }}">
    @csrf
    @method('patch')
        <div class="row">
            <div class="col">
                <div class="input-group">
                    <input type="text" class="form-control text-right" name="percentage" value="{{$discount->percentage}}" placeholder="Percentage">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="date" class="form-control text-right" name="start" value="{{$discount->start}}" placeholder="Percentage">
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
                    <input type="date" class="form-control text-right" name="end" value="{{$discount->end}}" placeholder="Percentage">
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