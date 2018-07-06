<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasychairController extends Controller
{
    public function index()
    {
    	return view('pages/easychair');
    }
}
