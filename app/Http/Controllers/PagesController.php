<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $name = "home";
        return view('home', ['name' => $name]);
    }
    public function contact() {
        $name = "contact";
        return view('contact', ['name' => $name]);
    }
    public function aboutme() {
        $name = "aboutme";
        return view('aboutme', ['name' => $name]);
    }
}
