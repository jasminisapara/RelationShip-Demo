<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tag()
    {
        //Many to Many Relationship
        return $this->belongsToMany(Tag::class);
    }

    public function tags()
    {
        //Morph to Many Relationship
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function comment()
    {
        // return $this->morphOne(Comment::class, 'commentable');
        return $this->morphMany(Comment::class, 'commentable'); 
    }

    //hasMany relationship on post and post_comments
    // public function comments()
    // {    
    //     return $this->hasMany(Comment::class);
    // }

}
