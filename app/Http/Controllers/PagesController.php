<?php

namespace App\Http\Controllers;

class PagesController extends MainController
{

    public function home()
    {
        self::$data['pageTitle'] .= 'Home';
        return view('content.home', self::$data);
    }

    public function about()
    {
        self::$data['pageTitle'] .= 'About Us';
        return view('content.about', self::$data);
    }
    public function contact()
    {
        self::$data['pageTitle'] .= 'Contact Us';
        return view('content.contact', self::$data);
    }
    public function cart()
    {
        self::$data['pageTitle'] .= 'Shopping Cart';
        return view('content.cart', self::$data);
    }

}