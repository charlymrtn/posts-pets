<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        $posts = Post::paginate(3);

        return view('pages.blog',compact(['posts']));
    }

    public function post($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();

        return view('pages.show',compact('post'));

    }
}
