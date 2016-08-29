<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'excerpt', 'body', 'published_at', 'user_id', 'blog_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function scopePublished($query) {
        return $query->where('published_at', '<=', Carbon::now());
    }
    
    public function scopeUnpublished($query) {
        return $query->where('published_at', '>=', Carbon::now());
    }
}
