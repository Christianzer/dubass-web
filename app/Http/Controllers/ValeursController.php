<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValeursController extends Controller
{
    public function index()
    {
        return view('valeurs');
    }
}
