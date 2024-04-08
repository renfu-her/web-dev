<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // index
    public function index(Request $request)
    {
        return view('backend.index');    
    }
    
}