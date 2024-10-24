<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $category_names = Category::all();
        // $joined = Post::leftJoin('categories', 'posts.cat_id', '=', 'categories.id')->select('posts.*', 'categories.name as cat_name')->get();
        // return view('post', ['posts'=>$joined]);
        return view('post', ['posts'=>$posts, 'categoryName' => $category_names]);
    }
}
