<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloWorldController extends Controller
{
    public function hello(): View {
        return view('hello');
    }

    public function about(): View {
        return view('about');
    }

    public function service(): View {
        return view('service');
    }

    public function project(): View {
        return view('project');
    }

    public function contact(): View {
        return view('contact');
    }
}
