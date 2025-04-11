<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

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

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        $products = Product::with('category')->get();

        return view('client.products.detail', compact('product', 'products'));
    }


    public function search(Request $request)
    {
        // Lấy từ khóa, danh mục, và khoảng giá từ request
        $keyword = $request->input('keyword');
        $category_id = $request->input('category_id');
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');

        // Truy vấn sản phẩm
        $products = Product::with('category')
            ->when($keyword, function ($query, $keyword) {
                return $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%");
            })
            ->when($category_id, function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($min_price, function ($query, $min_price) {
                return $query->where('price', '>=', $min_price);
            })
            ->when($max_price, function ($query, $max_price) {
                return $query->where('price', '<=', $max_price);
            })
            ->paginate(20);

        // Lấy danh sách danh mục để hiển thị trong form
        $categories = Category::all();

        // Trả về view kết quả tìm kiếm
        return view('client.products.search', compact('products', 'categories', 'keyword', 'category_id', 'min_price', 'max_price'));
    }
}
