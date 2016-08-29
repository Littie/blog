<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    const ARTICLE_WAS_ADDED = 'Article was added';
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
//    public function index() {
//        return view()
//    }

//    public function create() {
//        return view('backend.article.create');
//    }
//
//    public function store(ArticlesRequest $request) {
//        Article::create($request->all() + ['user_id' => Auth::user()->id, 'blog_id' => Auth::user()->blog_id]);
//
//        Session::flash('ARTICLE_WAS_ADDED', self::ARTICLE_WAS_ADDED);
//
//        return back();
//    }
//
//    public function show($id)
//    {
//        return ($article = Article::where('id', $id)->where('user_id', Auth::user()->id)->first()) ?
//            view('backend.article.show', ['article' => $article]) : back();
//    }
}
