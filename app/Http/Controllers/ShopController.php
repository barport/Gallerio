<?php

namespace App\Http\Controllers;

class ShopController extends MainController
{
    public function categories()
    {

        return view('content.categories');
    }
}