<?php

namespace App\Http\Composers;


use App\Models\Tag;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\View\View;

class SidebarComposer
{
    protected $user;

    public function __construct(Guard $auth)
    {
        $this->user = $auth->user();
    }

    public function compose(View $view) {
        $view->with('tags', Tag::all());

        if($this->user) {
            $view->with('isBlog', $this->user->blog_id);
            $view->with('user', $this->user);
        }
    }
}