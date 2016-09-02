<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $dates = ['created_at'];
    
    protected $fillable = [
        'name', 'description', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
