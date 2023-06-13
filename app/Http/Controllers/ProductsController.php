<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

class ProductsController extends Controller
{
   
public function index() {
    $products = Product::all();
    return view('index')->with('products', $products);
  }
   
}
