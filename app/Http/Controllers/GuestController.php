<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;

class GuestController extends Controller
{
    public function users()
    {
//        dd(User::find(1)->blog->name);
        return view('frontend.guest.users',
            [
                'users' => User::all()
            ]);
    }
}
