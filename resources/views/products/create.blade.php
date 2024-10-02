@extends('layouts.app')

@section('content')

<div class="container">
    <main>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class=col-12>
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="retail_price">Retail Price</label>
                    <input class="form-control @error('retail_price') is-invalid @enderror" type="number" name="retail_price" id="retail_price" value="{{old('retail_price')}}">
                    @error('retail_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="wholesale_price">Wholesale Price</label>
                    <input class="form-control @error('wholesale_price') is-invalid @enderror" type="text" name="wholesale_price" id="wholesale_price" value="{{old('wholesale_price')}}">
                    @error('wholesale_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="min_wholesale_qty">Min Wholesale Quantity</label>
                    <input class="form-control @error('min_wholesale_qty') is-invalid @enderror" type="number" name="min_wholesale_qty" id="min_wholesale_qty" value="{{old('min_wholesale_qty')}}">
                    @error('min_wholesale_qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input class="form-control @error('quantity') is-invalid @enderror" type="text" name="quantity" id="quantity" value="{{old('quantity')}}">
                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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

