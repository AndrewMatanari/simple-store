<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        // Ambil semua produk dengan pagination
        $products = Product::paginate(15);

        // Kembalikan view dengan data produk
        return view('main', compact('products'));
    }
}

