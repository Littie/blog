<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Blog;
use App\Models\Tag;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class BlogController extends Controller
{
    const ARTICLE_PER_PAGE = 7;

    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(self::ARTICLE_PER_PAGE);
        
        return view('frontend.guest.blogs',
            [
                'blogs' => $blogs,
                'tags' => Tag::all(),
            ]);
    }

    public function show($id)
    {
        return view('frontend.guest.blog',
            [
                'blog' => Blog::find($id),
                'articles' => User::where('blog_id', $id)->first()->articles()->published()->paginate(self::ARTICLE_PER_PAGE),
                'tags' => Tag::all(),
            ]);
    }

    public function create()
    {
        if(Auth::user()->blog_id) {
            return back();
        }

        return view('backend.blog.create');
    }

    public function store()
    {
        Blog::create(Input::all());

        $blogID = Blog::where('id', Blog::orderBy('id', 'desc')->first()->id)->first()->id;

        User::where('id', Auth::user()->id)->update(['blog_id' => $blogID]);

        return redirect('/');
    }
}
