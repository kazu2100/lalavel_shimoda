<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// やりとりするモデルを宣言
use App\Models\Post;

class PostController extends Controller {
    //一覧ページ
    public function index() {
        return view('post.index');
    }

    // 作成ページ
    public function create() {
        return view('posts.create');
    }

    // 作成昨日
    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '投稿が完了しました');
    }
}
