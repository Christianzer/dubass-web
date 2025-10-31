<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function founders()
    {
        return view('founders');
    }
    
    public function programs()
    {
        return view('programs');
    }
    
    public function mission()
    {
        return view('mission');
    }
    
    public function team()
    {
        return view('team');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function login()
    {
        return view('login');
    }
    
    // Méthodes anciennes conservées pour compatibilité
    public function service()
    {
        return view('service');
    }
    
    public function program()
    {
        return view('program');
    }
    
    public function event()
    {
        return view('event');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function testimonial()
    {
        return view('testimonial');
    }
    
    public function page404()
    {
        return view('404');
    }
}