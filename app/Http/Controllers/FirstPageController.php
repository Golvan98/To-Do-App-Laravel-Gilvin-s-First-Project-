<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function show()
    {
        return view('/firstpage');
    }
}


