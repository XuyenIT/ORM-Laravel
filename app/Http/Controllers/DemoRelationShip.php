<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DemoRelationShip extends Controller
{
    public function OneToOne()
    {
        $user = User::find(2);
        echo $user->id . "<br>";
        echo $user->name . "<br>";
        echo $user->phone->home_phone . "<br>";
        echo $user->phone->personal_phone . "<br>";
        $phone = Phone::find(2);
        echo $phone->user->name . "<br>";
        echo $phone->user->email . "<br>";
        echo $phone->user->password . "<br>";


    }

    public function OneToMany()
    {
        $category = Category::find(3);
        echo "Tai danh muc " . $category->category_name . " Co cac san pham sau: ";
        $products = $category->products;
        foreach ($products as $product) {
            echo $product->name . "<br>";
        }
        $product = Product::find(5);
        echo "San pham nay thuoc: ";
        echo $product->category->category_name;
    }

    public function manyToMany()
    {
        $order = Order::find(1);
        $products = $order->products;
        echo "Don hang ma " . $order->id . " Co San pham la: " . "<br>";
        foreach ($products as $r) {
            echo $r->name . "<br>";
//            echo $r->slug . "<br>";
        }
        $product = Product::find(1);
        $orders = $product->orders;
        echo "San pham co id la ".$product->id." nam trong cac don hang co ma la: " . "<br>";
        foreach ($orders as $order) {
            echo $order->id . '<br>';
//            echo $order->note . '<br>';
        }

    }
}
