<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts(Request $request)
    {
        $selectedOption = $request->input('selectedOption');

        if ($selectedOption) {
            $products = Product::where('category', $selectedOption)->get();
        } else {
            $products = Product::all(); // Fetch all products if no option is selected
        }

        return view('welcome', ['products' => $products]);
    }
}
