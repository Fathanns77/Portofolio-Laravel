<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    public function fathan() {
        return view('fathan');
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function hobby() {
        return view('hobby');
    }

}


