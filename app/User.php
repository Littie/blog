<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blog()
    {
        return $this->hasOne('App\Models\Blog');
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
}
