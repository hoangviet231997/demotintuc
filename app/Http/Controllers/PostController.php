<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
    public function findPostById($id) {
        $post = Post::where('id', $id)->first();
        return view('post.post', ['post' => $post]);
    }


    public function getAllPost () {
        $allpost = Post::all();
        return view('post.post', ['allpost' => $allpost]);
    }
}
