<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogsController extends Controller
{
    public function index()
    {
    	//die('Blog Index');
    	$posts = Post::all();
    	return view('blog.index', compact('posts'));
    }
}
