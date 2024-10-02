@extends('layouts.app')

@section('content')

<div class="container">
    <main>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class=col-12>
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="retail_price">Retail Price</label>
                    <input class="form-control" type="number" name="retail_price" id="retail_price">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="wholesale_price" class="form-label">Wholesale Price</label>
                    <input class="form-control" type="text">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="min_wholesale_qty">Min Wholesale Quantity</label>
                    <input class="form-control" type="number" name="min_wholesale_qty" id="min_wholesale_qty">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input class="form-control" type="text" name="quantity" id="quantity">
                </div>
                <div class="col-12">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    <button class="btn btn-primary mb-4 mt-4">Submit</button>
                </div>
            </div>
        </form>
    </main>
</div>

@endsection
