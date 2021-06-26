<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaraStore extends Controller
{
    public function mainpage()
    {
        return view('pages.mainpage');
    }
}
