<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
    // $products = Product::all();
        $products = Product::paginate(15);
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:100',
            'description'=> 'nullable|string|max:255',
            'retail_price'=> 'required|numeric|min:1|max:999999',
            'wholesale_price'=> 'required|numeric|min:1|max:999999|lte:retail_price',
            'min_wholesale_qty'=> 'required|integer|min:10',
            'quantity'=> 'required|integer|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = Product::create($request->only(['name', 'description', 'retail_price', 'wholesale_price', 'min_wholesale_qty', 'quantity']));
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = $file -> hashName();
            $filePatch = $file->storeAs('public', $fileName);
            $product->update(['photo' => $filePatch]);
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=> 'required|string|max:100',
            'description'=> 'nullable|string|max:255',
            'retail_price'=> 'required|numeric|min:1|max:999999',
            'wholesale_price'=> 'required|numeric|min:1|max:999999|lte:retail_price',
            'min_wholesale_qty'=> 'required|integer|min:10',
            'quantity'=> 'required|integer|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product->update($request->only(['name', 'description', 'retail_price', 'wholesale_price', 'min_wholesale_qty', 'quantity']));
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = $file -> hashName();
            $filePatch = $file->storeAs('public', $fileName);
            $product->update(['photo' => $filePatch]);
        }
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

