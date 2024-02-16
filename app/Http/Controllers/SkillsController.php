<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = "Knowledgeable on typing, Knows how to multi-task";
        return view('skills',compact('data'));
    }
}
