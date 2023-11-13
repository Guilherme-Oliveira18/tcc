<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view(
            'blog.index',
            [

                'categorias' => Categoria::whereHas('posts', function ($query) {
                    $query->published();
                })->take(10)->get()
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'blog.show',
            [
                'post'=>$post
            ]
        );
    }
    public function sobre (Post $post)
    {
        return view(
            'blog.sobre',
            [
                'post'=>$post
            ]
        );
    }
}
