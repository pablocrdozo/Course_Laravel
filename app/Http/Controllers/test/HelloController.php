<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(string $name)
    {
        // return "Hello {$name}";
        return view('testView.Hello_View',compact('name'));
    }
}
