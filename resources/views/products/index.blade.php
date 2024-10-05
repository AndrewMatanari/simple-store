@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <h1>Products</h1>
        <a href="{{route('products.create')}}"><button class="btn btn-primary">Tambah Product</button></a>
        <table class="table table-striped mb-2 mt-2">
            <thead class="table-dark text-center">
                <th>ID</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga Eceran</th>
                <th>Harga Grosir</th>
                <th>Min. Jumlah Grosir</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td class="text-center">
                        <img src="{{Storage::url($product->photo) }}" class="img-thumbnail w-25">
                    </td>
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
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>
@endsection

