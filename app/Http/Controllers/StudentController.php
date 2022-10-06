<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function welcomeMessage($name = "Joaquim")
    {
        $message = '<p> Hello,'. $name .'</p>';
        return view('hello.welcome', [
            'message' => $message,
            'name' => $name
        ]);
    }
}
