<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function getEmail()
    {
        return view('email');
    }

    public function postEmail()
    {
        return view('email');
    }

}
