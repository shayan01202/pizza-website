<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');  // ✅ 'layouts.home' से बदलकर सिर्फ 'home'
    }

    public function about()
    {
        return redirect('/#about');
    }

    public function menu()
    {
        return redirect('/#menu');
    }
}