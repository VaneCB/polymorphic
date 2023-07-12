<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createVideo(Request $request, $video_id){
        $video = Video::find($video_id);

        return view('createVideoComment', ['video' => $video]);
    }
    public function createPost(Request $request, $post_id){
        $post = Video::find($post_id);


        return view('createPostComment', ['post' => $post]);
    }

    public function store (Request $request){
        if($request->commentable_type == 'video'){
            $class = "App\Models\Video";
        }else {
            $class = "App\Models\Post";
        }

    $data= [
        'body' => $request->body,
        'commentable_type' => $class,
        'commentable_id' => $request->commentable_id
    ];
    Comment::create($data);

    return view('welcome');
    }

}
