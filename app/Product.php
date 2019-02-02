<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->where('c.curl', '=', $curl)
            ->get()
            ->toArray();

        if (!$products) {

            abort(404);

        } else {
            $data['pageTitle'] .= $products[0]->ctitle;
            $data['products'] = $products;
        }
    }
}