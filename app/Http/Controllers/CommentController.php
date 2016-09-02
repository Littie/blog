<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            Comment::create($request->all() + ['user_id' => Auth::user()->id]);
        }

        return back();
    }
}
