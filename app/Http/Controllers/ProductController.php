<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index()
    // {
    //     // Ambil data dari database
    //     $products = Product::all();

    //     // Kirim data ke view
    //     return view('products.index', compact('products'));
    // }
    // public function edit($id)
    // {
    //     $products = Product::findOrFail($id); 

    //     return view('products.edit', compact('products'));
        
    // }

    public function show($id)
    {
        return 'product ID:' . $id;
    }
}
