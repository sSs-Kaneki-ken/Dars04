<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        $category_names = Category::all();
        // $joined = Product::leftJoin('categories', 'products.car_id', '=', 'categories.id')->select('posts.*', 'categories.name as cat_name')->get();
        // return view('product', ['products'=>$joined]);
        return view('product', ["products" => $product, 'categoryName' => $category_names]);
    }
}
