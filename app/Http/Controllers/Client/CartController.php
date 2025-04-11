<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Hiển thị giỏ hàng
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->latest('id')->paginate(15);

        return view('client.carts.index', compact('carts'));
    }

    // Thêm sản phẩm vào giỏ hàng
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => DB::raw('quantity + ' . $request->quantity),
            ]
        );

        return redirect()->route('client.carts.index')->with('success', 'Product added to cart successfully!');
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function destroy($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng.');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng.');
        }
}
