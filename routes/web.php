<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //練習7-4透過comments()擷取(comments)評論
 $post =Post::find(11);
    echo '標題: '.$post ->title.'<br>';
    echo '內容: '.$post ->content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments;       //$post->comments後面可省略()->get()
    foreach($comments as $comment){
        echo '留言:'.$comment->content.'<br>';
        echo '--------------------------'.'<br>';
    }
});

    Route::get('posts', [PostController::class, 'index'])
        ->name('posts.index');
    Route::get('post', [PostController::class, 'show'])
        ->name('posts.show');
    Route::get('contact', [PostController::class, 'contact'])
        ->name('posts.contact');
    Route::get('about', [PostController::class, 'about'])
        ->name('posts.about');

