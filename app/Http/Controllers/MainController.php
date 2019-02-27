<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Menu;

class MainController extends Controller
{

    public static $data = [
        'pageTitle' => 'Gallerio |  ',
        'errors_top' => true,

    ];
    public function __construct()
    {
        self::$data['menu'] = Menu::all()->toArray();
        self::$data['categories'] = Categorie::all()->toArray();

    }
}