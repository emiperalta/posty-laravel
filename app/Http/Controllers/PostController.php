<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'body' => 'required',
        ];

        $this->validate($request, $rules);

        $request->user()->posts()->create([
            "body" => $request->body
        ]);

        return back();
    }
}
