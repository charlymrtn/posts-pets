<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('pages.index',compact(['posts']));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        $posts = Post::all();

        return view('pages.blog',compact(['posts']));
    }
}
