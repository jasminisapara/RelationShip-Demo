<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner()
    {
        //hasOneThrough relationship

        // return $this->hasOneThrough(Owner::class, Car::class,
        // 'mechanic_id',//Foreign key on cars table
        // 'car_id',//Foreign key on Owners table
        // 'id',//local key on mechanics table
        // 'id');//local key on cars table

        //hasManyThrough relationship
        return $this->hasManyThrough(Owner::class, Car::class,
        'mechanic_id',//Foreign key on cars table
        'car_id',//Foreign key on Owners table
        'id',//local key on mechanics table
        'id');//local key on cars table

        // return $this->hasOne(Car::class, 'mechanic_id');
    }
}
