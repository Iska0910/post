<?php

namespace Packages\Post\Http\Controllers;

use Illuminate\Http\Request;
use Packages\Post\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts::index', [
            'posts' => $posts
        ]);
    }
}
