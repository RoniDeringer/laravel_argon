<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;

class TestFormPdfController extends Controller
{

    public function index()
    {
        return view('pages/test.form-pdf');
    }
}
