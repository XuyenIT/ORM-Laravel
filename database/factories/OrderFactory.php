<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'note'=>'CHo minh them com',
            'total'=>50000,
            'tax'=>5000,
        ];
    }
}
