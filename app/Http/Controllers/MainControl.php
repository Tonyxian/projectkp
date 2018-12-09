<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControl extends Controller
{
    function index()
    {
      return view('login');
    }
}
