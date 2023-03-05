<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('List', compact('product'));
    }
}
