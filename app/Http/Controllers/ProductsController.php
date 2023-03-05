<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('List', compact('products'));
    }
    public function store(Request $request){
        Product::create($request->all());
        return redirect()->route('Listado');

    }
}
