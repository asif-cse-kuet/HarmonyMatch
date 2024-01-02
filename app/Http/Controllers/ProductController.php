<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts(Request $request)
    {
        $selectedOption = $request->input('category');
        $id = $request->input('id');

        $products = Product::query();

        if ($selectedOption) {
            $products->where('category', $selectedOption);
        }
        if ($id) {
            $products->where('id', $id);
        }

        $productsDetails = $products->get();
        return view('welcome', ['products' => $productsDetails]);
    }
}
