<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6)->onEachSide(1);
        return view("landing.landingIndex")->with('posts', $posts);
    }

    // ## -- 2. View About
    public function viewAbout(){
        return view("landing.aboutIndex");
    }

    // ## -- 3. View Posts
    public function viewPostIndex(){
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6)->onEachSide(1);
        return view("post.postIndex")->with('posts', $posts);
    }
    
    // ## -- 4. View Post By id
    public function viewPost($id){
        $post = Post::find($id);
        return view("post.postPage")->with('post', $post);
    }
}
