<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // Update
    public function updateIndex()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6)->onEachSide(1);
        return view("post.updateIndex")->with('posts', $posts);
    }

    // Delete Index
    public function deleteIndex()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(6)->onEachSide(1);
        return view("post.deleteIndex")->with('posts', $posts);
    }

    // Create Post Form
    public function createPost(){
        return view('post.create');
    }

    public function store(Request $request)
    {
        $imgurl = isset($request->imgurl) ? $request->imgurl : 'https://dummyimage.com/1200x600/bababa/ffffff';
        $data = new Post([
            'title' => $request->title,
            'body' => $request->editor1,
            'imgurl' => $imgurl,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $data->save();

        $request->session()->flash('status', "{$request->title} successfully posted!");
        return view('home');
    }

    // Show Post
    public function show($id)
    {
        $post = Post::find($id);
        return view("post.updatePost")->with('post', $post);
    }

    // Edit Post
    public function edit($id)
    {
        $post = Post::find($id);
        return view("post.updatePost")->with('post', $post);
    }

    public function update(Request $request, $id)
    {        
        $imgurl = isset($request->imgurl) ? $request->imgurl : 'https://dummyimage.com/1200x600/bababa/ffffff';
        $data = Post::find($id);
        $dataUpdate = $data->update([
                'title' => $request->title,
                'body' => $request->editor1,
                'imgurl' => $imgurl,
                'created_at' => $data->created_at,
                'updated_at' => date('Y-m-d H:i:s')
        ]);

        $request->session()->flash('status', "{$request->title} successfully updated!");
        return redirect('/guild-master/update');   
    }

    // Delete Post
    public function delete(Request $request, $id)
    {
        $title = Post::find($id)->title;
        Post::destroy($id);
        return redirect("/guild-master/delete")->with('status', "{$title} has been deleted successfully.");
    }
}


