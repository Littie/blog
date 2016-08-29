<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    const ARTICLE_PER_START_PAGE = 3;
    const ARTICLE_PER_PAGE = 5;
    const ARTICLE_WAS_ADDED = 'Article was added';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.index',
            [
                'articles' => Auth::user()->articles()->published()->limit(self::ARTICLE_PER_START_PAGE)->orderBy('published_at', 'desc')->get(),
            ]
        );
    }

    public function create() {
        return view('backend.article.create');
    }

    public function store(ArticlesRequest $request) {
        Article::create($request->all() + ['user_id' => Auth::user()->id, 'blog_id' => Auth::user()->blog_id]);

        Session::flash('ARTICLE_WAS_ADDED', self::ARTICLE_WAS_ADDED);

        return back();
    }

    public function show($user, $id)
    {
        return ($article = Article::where('id', $id)->where('user_id', Auth::user()->id)->first()) ?
            view('backend.article.show', ['article' => $article]) : back();
    }
    
    public function all()
    {
        return view('backend.article.all', ['articles' => Auth::user()->articles()->paginate(self::ARTICLE_PER_PAGE)]);
    }
    
    public function published() 
    {
        return view('backend.article.all', ['articles' => Auth::user()->articles()->published()->paginate(5)]);
    }
    
    public function unpublished() 
    {
        return view('backend.article.all', ['articles' => Auth::user()->articles()->unpublished()->paginate(5)]);
    }
}


















