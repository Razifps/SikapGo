<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sikapgo extends Controller
{
    public function index_page()
    {
        return view('profile');
    }
}
