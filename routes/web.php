<?php

use Illuminate\Support\Facades\Route;
// ルーティングを設定するコントロールを宣言する
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

// 投稿の一覧ページ
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// 投稿の作成ページ
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// 投稿の作成機能
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// 投稿の詳細ページ
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
