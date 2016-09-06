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
    const ARTICLE_HAS_BEEN_CREATED = 'Article has been created';
    const ARTICLE_HAS_BEEN_DELETED = 'Article has been deleted';
    const ARTICLE_HAS_BEEN_EDITED = 'Article has been edited';

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

    public function create()
    {
        return view('backend.article.create',
            [
                'method' => '',
                'action' => '/article/store',
                'title' => 'Create article',
                'btn' => 'Create article',
                'flash' => str_replace(' ', '_', strtoupper(self::ARTICLE_HAS_BEEN_CREATED))
            ]);
    }

    public function store(ArticlesRequest $request)
    {
        Article::create($request->all() + ['user_id' => Auth::user()->id, 'blog_id' => Auth::user()->blog_id]);

        $article = Article::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
        $article->tags()->attach($request->tags);

        Session::flash('ARTICLE_HAS_BEEN_CREATED', self::ARTICLE_HAS_BEEN_CREATED);

        return back();
    }

    public function show($user, $id)
    {
        return ($article = Article::where('id', $id)->where('user_id', Auth::user()->id)->first()) ?
            view('backend.article.show', ['article' => $article]) : back();
    }

    public function destroy($user, $id)
    {
        Article::destroy($id);

        Session::flash('ARTICLE_HAS_BEEN_DELETED', self::ARTICLE_HAS_BEEN_DELETED);

        return back();
    }

    public function edit($user, $id)
    {
        return view('backend.article.edit',
            [
                'method' => 'PUT',
                'action' => '/article/update/' . $id,
                'article' => Article::find($id),
                'title' => 'Update article',
                'btn' => 'Update article',
                'flash' => str_replace(' ', '_', strtoupper(self::ARTICLE_HAS_BEEN_EDITED))
            ]);
    }

    public function update(ArticlesRequest $request, $name, $id)
    {
        Article::where('id', $id)->update($request->only('title', 'published_at', 'excerpt', 'body'));

        Session::flash('ARTICLE_HAS_BEEN_EDITED', self::ARTICLE_HAS_BEEN_EDITED);

        return back();
    }

    public function all()
    {
        return view('backend.article.all',
            [
                'articles' => Auth::user()->articles()->orderBy('published_at', 'desc')->paginate(self::ARTICLE_PER_PAGE),
                'title' => 'All articles'
            ]);
    }

    public function published()
    {
        return view('backend.article.all',
            [
                'articles' => Auth::user()->articles()->published()->paginate(self::ARTICLE_PER_PAGE),
                'title' => 'Published articles'
            ]);
    }

    public function unpublished()
    {
        return view('backend.article.all',
            [
                'articles' => Auth::user()->articles()->unpublished()->paginate(self::ARTICLE_PER_PAGE),
                'title' => 'Unpublished articles'
            ]);
    }
}


















