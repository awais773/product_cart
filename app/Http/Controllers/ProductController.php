<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index($category = null){
        // If a category is provided, filter products by that category
        if ($category) {
            $products = Product::where('category', $category)->latest()->get();
        } else {
            // If no category is provided, get all products
            $products = Product::latest()->get();
        }
    
        return view('Layoutspage.Product.product_cart', compact('products','category'));
    }



}
