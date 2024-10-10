@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <h1 class="display-4 text-center">{{$product->name}}</h1>
        <p class="lead text-center">
            {{$product->description}}
        </p>
        <div class="d-flex justify-content-center">
            <img src="{{Storage::url($product->photo) }}" class="img-fluid rounded shadow" style="height: 200px; object-fit: cover;" alt="{{$product->name}}" onerror="this.onerror=null;this.src='https://placehold.co/200';">
        </div>
        <table class="table table-striped mt-4">
            <tbody>
                <tr>
                    <td><b>Retail Price</b></td>
                    <td>{{$product->retail_price}}</td>
                </tr>
                <tr>
                    <td><b>Wholesale Price</b></td>
                    <td>{{$product->wholesale_price}}</td>
                </tr>
                <tr>
                    <td><b>Min. Wholesale Quantity</b></td>
                    <td>{{$product->min_wholesale_qty}}</td>
                </tr>
                <tr>
                    <td><b>Quantity</b></td>
                    <td>{{$product->quantity}}</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </main>
</div>


@endsection

