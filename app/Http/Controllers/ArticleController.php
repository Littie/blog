<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{

    public function show($id)
    {
        return ($article = Article::where('id', $id)->published()->first()) ?
            view('frontend.article.show',
                [
                    'article' => $article,
                    'user' => $article->user,
                ])
            : back();
    }
}
