<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Payment;
use App\Models\Order;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'method' => $this->faker->randomElement(['cash', 'credit_card', 'paypal']),
            'status' => $this->faker->randomElement(['pending', 'paid', 'failed']),
        ];
    }
}
