<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post()
    {
        //Many to Many Relationship
        return $this->belongsToMany(Post::class);
    }

    public function posts()
    {
        //Morph to Many Relationship
        return $this->morphedByMany(Post::class,'taggable');
    }

    public function videos()
    {
        //Morph to Many Relationship
        return $this->morphedByMany(Video::class,'taggable');
    }

}
