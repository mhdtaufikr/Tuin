<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function english()
    {
        return view("index-en");
    }
    public function bahasa()
    {
        return view("index-bhs");
    }
    public function china()
    {
        return view("index-chn");
    }

    public function buy(Request $request)
    {   
        
        return view("form");
    }
}
