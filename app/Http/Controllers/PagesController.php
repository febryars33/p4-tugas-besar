<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function about()
    {
        return view('about');
    }
}
