<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*', 'p.pimage')
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

    public static function getItem($purl, &$data)
    {
        if ($item = Product::where('purl', '=', $purl)->first()) {
            $item = $item->toArray();
            $data['pageTitle'] .= $item['ptitle'];
            $data['product'] = $item;

        } else {

            abort(404);
        }
    }

    public static function addToCart($pid)
    {
        if ($product = Product::find($pid)) {

            $product = $product->toArray();

            if (!Cart::get($pid)) {

                Cart::add($pid, $product['ptitle'], $product['price'], 1, []);
            }
        }

    }

    public static function updateCart($request)
    {

        if (!empty($request['pid']) && !empty($request['op'])) {

            if (is_numeric($request['pid'])) {

                if ($request['op'] == 'plus') {

                    Cart::update($request['pid'], ['quantity' => 1]);

                } else if ($request['op'] == 'minus') {

                    Cart::update($request['pid'], ['quantity' => -1]);
                }
            }
        }
    }
}