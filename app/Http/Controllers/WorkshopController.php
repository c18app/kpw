<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class WorkshopController extends Controller
{
    public function terms()
    {
        return view('workshop.terms');
    }
}