@extends('layouts.app')
@section('content')
<div class="container">
    <main>
        <h1>Products</h1>
        <a href="{{route('products.create')}}"><button class="btn btn-primary">Tambah Product</button></a>
        <table class="table table-striped mb-2 mt-2">
            <thead class="table-dark text-center">
                <th>id</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Retail Price</th>
                <th>Wholesale Price</th>
                <th>Min. Wholesale Qty</th>
                <th>Quantity</th>
                <th>Actions</th>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->retail_price }}</td>
                    <td>{{ $product->wholesale_price }}</td>
                    <td>{{ $product->min_wholesale_qty }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('products.edit', $product) }}"><button class="btn btn-primary">Edit</button></a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection

