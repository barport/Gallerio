<?php

namespace App\Http\Controllers;

class PagesController extends MainController
{
    public function home()
    {
        return view('content.home');
    }

    public function about()
    {
        return view('content.about');
    }
    public function contact()
    {

        return view('content.contact');
    }
}