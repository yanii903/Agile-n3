<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // Lấy ngẫu nhiên một người dùng
            'product_id' => Product::inRandomOrder()->first()->id, // Lấy ngẫu nhiên một sản phẩm
            'quantity' => $this->faker->numberBetween(1, 5), // Số lượng ngẫu nhiên từ 1 đến 5
        ];
    }
}
