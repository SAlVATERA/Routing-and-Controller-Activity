<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = "I am Jason A web dev";
        return view('about-me',compact('data'));
    }
}
