<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getSlug()
    {
        return $this->slug;
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
