<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rating;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $posts = Post::where('user_id', $user_id)->simplePaginate(5);

        return view('posts.index')->with([
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('posts.create')->with([
            'categories'=>$categories, 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $imagename = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/posts/', $imagename);
        $request->image->move(public_path('/images/'), $imagename);

        $post = new Post;

        $post ->user_id = Auth::id();
        $post ->category_id = $request->input('category_id');
        $post ->name = $request->input('name');
        $post ->title = $request->input('title');
        $post ->slug = str_slug($request->input('name'), "-");
        $post ->short = $request->input('short');
        $post ->description = $request->input('description');
        $post ->image = $imagename;
        $post->save();

        return redirect()->route('posts')->with('success', 'New post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $post = Post::where('slug', $slug)
        ->firstorfail();

        $post_id = $post->id;

        $ratings = Rating::where('post_id', $post_id)->get();
        $total = Rating::where('post_id', $post_id)->sum('rating'); 
        return view('posts.details')->with([
            'post' => $post,
            'ratings' => $ratings,
            'total' => $total
        ]);
    }

    public function filter($slug){
        $category_id = Category::where('slug', $slug)->firstorfail();
        $posts = Post::where('category_id',$category_id->id)->get();

        return view('posts.filter')->with([
            'posts'=>$posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user_id = Auth::id();

        $post = Post::where('slug', $slug)
        ->where('user_id', $user_id)
        ->firstorfail();

        $categories = Category::orderBy('name','asc')->get();

        return view('posts.edit')->with([
            'categories'=>$categories,
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('/images/'), $image_name);

            $imagename = $image_name;

        }else{

            $post = Post::find($id);
            $imagename = $post->image;

        }

        $post = Post::find($id);
     
        $post->category_id = $request->input('category_id');
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->slug = str_slug($request->input('name'), "-");
        $post->short = $request->input('short');
        $post->description = $request->input('description');
        $post->image = $imagename;
        $post->update();

        return redirect()->route('posts')->with('success', 'Post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth::id();

        $post = Post::where('id', $id)
        ->where('user_id', $user_id)
        ->delete();

        return redirect()->route('posts')
        ->with('delete','Post deleted successfully');
    }
}
