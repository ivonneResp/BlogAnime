<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use App\Models\Models\Post;

class HomeuController extends Controller
{

    //
    public function index(){
        $categories= Category::all();
        $posts= Post::all();

        return view('vistaU', [
        'categories' => $categories,
        'vistaU' => $posts
    ]);
    }

    public function post()
    {
        return view('post');
    }

    public function vistaUByCategory($category)
    {
       $categories= Category::all();
       $category = Category::where('name', '=' ,$category)->first();
       $categoryIdSelected = $category->id;
       $posts = Post::where('category_id', '=', $categoryIdSelected)->get();

       return view('vistaU', [
        'categories' => $categories,
        'vistaU' => $posts,
        'categoryIdSelected' => $categoryIdSelected
    ]);
       
    }
}