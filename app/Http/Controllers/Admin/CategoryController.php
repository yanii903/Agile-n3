<?php



namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch categories with pagination (10 items per page)
        $categories = Category::latest('id')->paginate(10);

        // Pass data to the view
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully!');
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
        // Tìm danh mục theo ID
        $category = Category::findOrFail($id);

        // Trả về view 'admin.categories.edit' và truyền dữ liệu danh mục
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Tìm danh mục theo ID
        $category = Category::findOrFail($id);

        // Xác thực dữ liệu từ form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Cập nhật thông tin danh mục
        $category->update([
            'name' => $request->name,
        ]);

        // Chuyển hướng về trang danh sách danh mục với thông báo thành công
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tìm danh mục theo ID, nếu không có sẽ báo lỗi 404
        $category = Category::findOrFail($id);

        // Kiểm tra xem danh mục có sản phẩm liên quan không
        if ($category->products()->count() > 0) {
            return redirect()->back()->with('error', 'Không thể xóa danh mục vì có sản phẩm liên quan.');
        }

        // Xóa danh mục
        $category->delete();

        // Quay về trang danh sách với thông báo thành công
        return redirect()->route('admin.categories.index')->with('success', 'Xóa danh mục thành công!');
    }
}
