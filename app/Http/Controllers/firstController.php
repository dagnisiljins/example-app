<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index()
    {
        return response()->view('welcomeDagnis', []);

    }

    public function welcome()
    {
        return response()->view('welcome', []);

    }
}
