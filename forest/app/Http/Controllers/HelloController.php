<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "Hello World! This is my first controller!";
    }

    public function helloBlade()
    {
        return view("go.hello");
    }
}
