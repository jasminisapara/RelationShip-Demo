<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;

class UserAuth extends Controller
{
    public function index()
    {
        event (new UserCreated("Email Has Been Send On Your Mail Address"));
    }
}
