<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{

	public function index()
	{
		$posts = post::all();
		


		return view ('post.index',compact('posts'));
	}

 	public function create()
 	{
 		$categories = category::all();


 		return view('post.create',compact('categories'));
 	}   


 	public function edit(Post $post)

 	{
 		$categories = category::all();


 		return view('post.edit',compact('post','categories'));
 	}   



 	public function update(Post $post)
 	{
 		$post->update([
 			'title' => request('title'),
 			'category_id' => request('category_id'),
 			'content' => request('content')
 			
 		]);
 		return redirect('/post');

 	}



 	public function store()
 	{
 		Post::create([
 			'title' => request('title'),
 			'slug' => str_slug(request('title')),
 			'content' => request('content'),
 			'category_id' => request('category_id')

 		]);
 		return redirect('/post');

 	}

 	public function destroy(Post $post)
 	{
 		$post->delete();

 		return redirect('/post');
 	}

 }
