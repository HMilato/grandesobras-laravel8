<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostUpdateStore;

class PostController extends Controller
{
   public function index(){

        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(PostUpdateStore $request){
        Post::create($request->all());

        return redirect()->route('posts.index');
    }
}
