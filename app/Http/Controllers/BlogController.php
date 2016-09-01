<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Blog;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class BlogController extends Controller
{
    const ARTICLE_PER_PAGE = 7;

    public function index()
    {
        
    }

    public function show($id)
    {
        return view('frontend.guest.blog',
            [
                'user' => User::where('blog_id', $id)->first(),
                'blog' => Blog::find($id),
                'articles' => User::where('blog_id', $id)->first()->articles()->published()->paginate(self::ARTICLE_PER_PAGE)
            ]);
    }

    public function create()
    {
        if(Auth::user()->blog_id) {
            return back();
        }

        return view('backend.blog.create', ['user' => Auth::user()]);
    }

    public function store()
    {
        Blog::create(Input::all());

        $blogID = Blog::where('id', Blog::orderBy('id', 'desc')->first()->id)->first()->id;

        User::where('id', Auth::user()->id)->update(['blog_id' => $blogID]);

        return redirect('/');
    }
}
