<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    $query = $request->input('query');
    $posts = [];

    if (!empty($query)) {
        $posts = Post::where('title', 'like', '%'.$query.'%')
        ->orWhere('content', 'like', '%'.$query.'%')
        ->get();
    }
    $posts = Post::paginate(9);
    return view('posts.search',compact('query','posts'));
    }
}
