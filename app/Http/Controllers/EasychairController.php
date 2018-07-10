<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\easychair;
class EasychairController extends Controller
{
    public function tampileasychair()
    {
    	return view('pages/easychair');
    }
}
