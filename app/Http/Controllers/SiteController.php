<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        return view('pages.blog',compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();

        $keywords = [];

        if ($post->meta_keywords){
            $keywords = explode(',',$post->meta_keywords);
        }

        return view('pages.show',compact('post','keywords'));

    }

    public function category($slug)
    {

        $category = Category::where('slug',$slug)
            ->with('posts')
            ->firstOrFail();

        return $category;
    }

    public function categories()
    {
        $categories = Category::all();

        return $categories;
    }
}
