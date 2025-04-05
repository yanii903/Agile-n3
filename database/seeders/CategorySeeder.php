<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Review;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Áo'],
            ['name' => 'Quần'],
            ['name' => 'Giày'],
            ['name' => 'Phụ kiện'],
            ['name' => 'Đồ thể thao'],
            ['name' => 'Đồ ngủ'],
            ['name' => 'Đồ bơi'],
            ['name' => 'Đồ công sở'],
            ['name' => 'Đồ trẻ em'],
            
        ]);
    }
}
