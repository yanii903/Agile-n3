<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy danh sách sản phẩm với phân trang (10 sản phẩm mỗi trang)
        $products = Product::with('category')->latest('id')->paginate(10);

        // Truyền dữ liệu sang view
        return view('admin.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Category::all();

        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // 1. Xác thực dữ liệu từ form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // 2. Xử lý ảnh nếu có
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            $imagePath = null; // hoặc một ảnh mặc định
        }

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // 4. Chuyển hướng người dùng sau khi lưu thành công
        return redirect()->route('admin.products.create')->with('success', 'Product created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}





