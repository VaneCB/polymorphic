<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show(Request $request, $video_id){
        $video = Video::find($video_id);
$comments = $video->comments()->get();
$taxes = Tax::all();
        return view('showVideo', ['video' => $video, 'comments' => $comments]);
    }
}
