<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index()
    {
        $mechanic = Mechanic::with('carOwner')->get();
        dd($mechanic);

        // $mechanic = Mechanic::with('carOwner.owner')->get();
        // dd($mechanic);
    }
}
