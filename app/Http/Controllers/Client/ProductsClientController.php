<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductsClientController extends Controller
{
    public function products()
    {
        $products = Product::with('category')->get();

        return view('client.products.index', compact('products'));
    }

    public function quickview($id)
    {
        $product = Product::with('category')->find($id);

        if (!$product) {
            return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
        }

        return response()->json($product);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $products = Product::with('category')->get();

        return view('client.products.detail', compact('product', 'products'));
    }
}
