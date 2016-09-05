<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Article;
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
        
        return view('frontend.blog.all',
            [
                'blogs' => $blogs,
            ]);
    }

    public function show($id)
    {
//        dd(Article::find(49)->tags);

        return view('frontend.blog.show',
            [
                'blog' => Blog::find($id),
                'articles' => User::where('blog_id', $id)->first()->articles()->published()->paginate(self::ARTICLE_PER_PAGE),
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
