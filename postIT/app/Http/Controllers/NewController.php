<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function restoreDeleted(){
        $post = Post::withTrashed();
        $post->restore();
        dd('data restored');
    }
}
