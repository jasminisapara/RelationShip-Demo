<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public $timestamps = false;

    public function result()
    {
        // return $this->hasOne(Result::class);
        return $this->hasMany(Result::class);
    }

    
}
