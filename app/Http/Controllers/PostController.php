<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortDesc();
        return view('admin.posts.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.posts.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'img' => ['required', 'mimes:jpeg,png,jpg'],
            'body' => ['required'],
            'user_id' => ['required']
        ]);

        $imagePath = request('img')->store('uploads', 'public');

        //intervention magic happens here, we are resizing the image before saving to db
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Post::create([
            'title' => $data['title'],
            'img' => $imagePath,
            'body' => $data['body'],
            'user_id'=> $data['user_id']
        ]);

        return redirect(route('posts.index'))->with('success', "Post Created Successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $comments = Comment::all()->where('approved' , true);
        return view('client.post', ['post'=> $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        return view('admin.posts.edit', ['users' => User::all(), 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if ($request->has('img')) {
            $data = $request->validate([
                'img' => ['required'],
                'title' => ['required'],
                'body' => ['required'],
                'user_id' => ['required']
            ]);
            unlink(public_path('storage/'.$post->img));
        }
        else {
            $data = $request->validate([
                'title' => ['required'],
                'body' => ['required'],
                'user_id' => ['required']
            ]);
        }
        

        $imagePath = request('img')->store('uploads', 'public');

        //intervention magic happens here, we are resizing the image before saving to db
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $post->update([
            'title' => $data['title'],
            'img' => $imagePath,
            'body' => $data['body'],
            'user_id'=> $data['user_id']
        ]);

        return redirect()->route('posts.index')->with('success', "Post Edited Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect()->route('posts.index')->with('success', "Post Deleted Successfuly");
    }
}
