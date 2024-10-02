@extends('layouts.app')

@section('content')

<div class="container">
    <main>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
                </div>
                <div class="col-6  mt-2 mb-2">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description">{{ old('description', $product->description) }}</textarea>
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="retail_price">Retail Price</label>
                    <input class="form-control" type="number" name="retail_price" id="retail_price" value="{{ old('retail_price', $product->retail_price) }}">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="wholesale_price">Wholesale Price</label>
                    <input class="form-control" type="number" name="wholesale_price" id="wholesale_price" value="{{ old('wholesale_price', $product->wholesale_price) }}">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="min_wholesale_qty">Min Wholesale Quantity</label>
                    <input class="form-control" type="number" name="min_wholesale_qty" id="min_wholesale_qty" value="{{ old('min_wholesale_qty', $product->min_wholesale_qty) }}">
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input class="form-control" type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}">
                </div>
                <div class="col-12 mt-4 mb-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </main>
</div>

@endsection

