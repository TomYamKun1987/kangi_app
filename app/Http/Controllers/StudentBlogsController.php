<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class StudentBlogsController extends Controller
{
    public function index() {
        // $posts = Post::latest()->get();
        $posts=[];
        return view ('studentBlogs.index', compact('posts'));
        // return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        $post = new Post();
        $post->cintent = $request->input('content');
        $post->save();

        return redirect()->route('stuentBlogs.index')->with('flash_message','投稿が完了しました。');
    }

}
