<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'my_flights';
    protected $guarded = ['id']; //Its use for mass data assign one to many rows

    protected $fillable = ['name','email','password'];

    protected $primaryKey = 'flight_id';
    public $incrementing = false; // because primary key data is store through query

    public $timestamps = false;
    const CREATED_AT = 'creation_date'; //to change the column name in table

    public $attributes = ['name' => 'jasmin']; //to store the default name in the field

}
