@extends('layouts.app')

@section('content')
    <h1 class="text-center">Daftar Produk</h1>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img
                            src="{{ Storage::url($product->photo) }}"
                            class="card-img-top img-fluid"
                            alt="{{ $product->name }}"
                            onerror="this.onerror=null;this.src='https://placehold.co/200';"
                            style="height: 200px; object-fit: contain;"
                        >
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Harga: {{ $product->price }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-info">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $products->links() }}
@endsection

