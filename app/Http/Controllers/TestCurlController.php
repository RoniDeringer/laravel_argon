<?php

namespace App\Http\Controllers;

class TestCurlController extends Controller
{
    public function __construct()
    {
     return dd('construr');
    }

    public function getCurl(){
        return view('test.curl');
    }
}
