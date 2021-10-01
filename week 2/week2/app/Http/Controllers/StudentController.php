<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function show($studentNaam)
    {
        $studentNaam = strtolower($studentNaam);
        $studentNaam = ucfirst($studentNaam);
        return view('student', ['naam' => $studentNaam]);
    }    
}


