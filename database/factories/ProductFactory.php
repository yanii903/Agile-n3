<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'category_id' => fake()->randomNumber(1,9), // Tạo một danh mục giả liên kết
            'name' => fake()->word(), // Tên sản phẩm
            'description' => fake()->sentence(), // Mô tả sản phẩm
            'price' => fake()->randomFloat(2, 10, 1000), // Giá sản phẩm
            'stock' => fake()->numberBetween(0, 100), // Số lượng tồn kho
            'image' => fake()->imageUrl(), // URL hình ảnh giả
        ];
    }
}

