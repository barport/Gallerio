<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;

class ShopController extends MainController
{

    public function categories()
    {
        self::$data['pageTitle'] .= 'Shop Categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }

    public function products($curl)
    {
        Product::getProducts($curl, self::$data);
        return view('content.products', self::$data);
    }
}