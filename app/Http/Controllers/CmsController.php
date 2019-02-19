<?php

namespace App\Http\Controllers;

class CmsController extends MainController
{
    public function dashboard()
    {
        return view('cms.dashboard', self::$data);
    }
}