<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        $productName = Product::all();
        // $joined = Order::leftJoin('products', 'orders.prod_id', '=', 'products.id')->select('posts.*', 'products.name as prod_name')->get();
        // return view('order', ['orders'=>$joined]);
        return view('order', ['orders'=>$orders, 'productName' => $productName]);
    }
}
