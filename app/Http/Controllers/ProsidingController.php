<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsidingController extends Controller
{
    public function index()
    {
    	return view('pages/prosiding');
    }
}
