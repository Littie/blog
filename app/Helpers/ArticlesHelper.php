<?php


namespace App\Helpers;


use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticlesHelper
{
    public static function addTagsToArticle($tags) {
        $article = Article::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();

        foreach ($tags as $tag) {
            $article->tags()->attach($tag);
        }
    }
}