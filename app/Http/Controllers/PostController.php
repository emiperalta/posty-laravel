<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
