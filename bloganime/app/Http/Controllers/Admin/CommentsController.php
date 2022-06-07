<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Comment;
use App\Models\Models\Category;
use App\Models\Models\Post;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories= Category::all();
        $posts= Post::all();

        return view('admin.comentarios.index', [
        'categories' => $categories,
        'posthome' => $posts
    ]);
    }

    public function posthomeByCategory($category)
    {
       $categories= Category::all();
       $category = Category::where('name', '=' ,$category)->first();
       $categoryIdSelected = $category->id;
       $posts = Post::where('category_id', '=', $categoryIdSelected)->get();

       return view('admin.comentarios.index', [
        'categories' => $categories,
        'posthome' => $posts,
        'categoryIdSelected' => $categoryIdSelected
    ]);
       
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request, $id)
    {
        $comments = request()->except(['_token', '_method']);

        Comment::where('id',"=",$id)->update($comments);

        $comment=Comment::findOrFail($id);
        
        return redirect()->back();
}

    public function delete(Request $request, $commentId)
    {
    $comment = Comment::find($commentId);

    $comment->delete();
    
    return redirect()->back();
    }

}