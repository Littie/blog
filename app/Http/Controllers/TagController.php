<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Tag;

class TagController extends Controller
{
    public function show($id)
    {
        return view('frontend.tag.show', ['articles' => Tag::find($id)->articles]);
    }
}
