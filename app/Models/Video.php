<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comment()
    {
        // return $this->morphOne(Comment::class, 'commentable');
        return $this->morphMany(Comment::class, 'commentable');

    }

    public function tags()
    {
        //Morph to Many Relationship
        return $this->belongsToMany(Tag::class,'taggable');
    }
}
