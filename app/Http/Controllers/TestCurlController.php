<?php

namespace App\Http\Controllers;

class TestCurlController extends Controller
{
    public function getCurl()
    {
        return view('pages/test.curl');
    }

    public function getApi1()
    {
        //https://jsonplaceholder.typicode.com/todos/1

        //verificar se existe alguma lib do laravel
    }
}
