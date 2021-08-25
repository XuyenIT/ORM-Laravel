<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Product;
use App\Models\ProductOrder;
use Database\Factories\OrderFactory;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(5)->create();
//        Phone::factory(5)->create();
//        Product::factory(10)->create();
//        Category::factory(10)->create();
        Order::factory(5)->create();
        ProductOrder::factory(1)->create();

    }
}
