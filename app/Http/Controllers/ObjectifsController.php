<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectifsController extends Controller
{
    public function index()
    {
        return view('objectives');
    }
}
