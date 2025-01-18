<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $products = Product::all();

        // Kirim data ke view
        return view('products.index', compact('products'));
    }
}
