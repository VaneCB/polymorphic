<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/video/{video_id}', [VideoController::class, 'show'])->name('video.show');
Route::get('/comment/video/{video_id}', [CommentController::class, 'createVideo'])->name('comment.createVideo');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('/post/{post_id}', [PostController::class, 'show'])->name('post.show');
Route::get('/comment/post/{post_id}', [CommentController::class, 'createPost'])->name('comment.createPost');
