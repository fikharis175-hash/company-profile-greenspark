<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('index');
    }
    public function about() : View
    {
        return view('about');
    }
    public function services() : View
    {
        return view('services');
    }
    public function contact() : View
    {
        return view('contact');
    }
}
