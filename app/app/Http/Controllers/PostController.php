<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return View('posts', ['posts' => $posts]);
    }

    public function new()
    {
        return View('new');
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $post = new Post();
        $post->fill($data);
        $post->save();

        $posts = Post::all();
        return View('posts', ['posts' => $posts]);
    }
}
