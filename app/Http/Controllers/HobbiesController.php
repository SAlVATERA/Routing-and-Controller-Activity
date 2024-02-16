<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = "I like gaming and loves to discover many things about programming";
        return view('hobbies',compact('data'));
    }
}
