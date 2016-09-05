<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Tag;

class TagController extends Controller
{
    const ARTICLE_PER_PAGE = 7;

    public function show($name)
    {
        return view('frontend.tag.show',
            [
                'articles' => Tag::where('name', $name)->first()->articles()->paginate(self::ARTICLE_PER_PAGE),
                'tagName' => $name,
            ]);
    }
}
