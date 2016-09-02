<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'excerpt', 'body', 'published_at', 'user_id', 'blog_id'
    ];

    protected $dates = ['published_at'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function scopePublished($query) {
        return $query->where('published_at', '<=', Carbon::now())->orderBy('published_at', 'desc');
    }
    
    public function scopeUnpublished($query) {
        return $query->where('published_at', '>=', Carbon::now())->orderBy('published_at', 'desc');
    }
}
