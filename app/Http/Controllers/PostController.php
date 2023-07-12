<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request, $post_id){
        $post = Post::find($post_id);


        return view('showPost', ['post' => $post]);
    }
}
