<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Tag;

class TagController extends Controller
{
    public function show($name)
    {
        return view('frontend.tag.show',
            [
                'articles' => Tag::where('name', $name)->first()->articles()->paginate(7),
                'tagName' => $name,
            ]);
    }
}
