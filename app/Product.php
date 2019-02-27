<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Product extends Model
{
    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*', 'p.pimage')
            ->where('c.curl', '=', $curl)
            ->paginate(6);

        if (!$products->count()) {

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

                Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage']]);
                Session::flash('sm','"'. $product['ptitle'] .'"'. ' was added to cart!');
                
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

    public static function save_new($request)
    {

        $image_name = 'default.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/lib/template/images', $image_name);
            $img = Image::make(public_path() . '/lib/template/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('sm', 'Product Created Successfully');
    }
    public static function update_item($request, $id)
    {

        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/lib/template/images', $image_name);
            $img = Image::make(public_path() . '/lib/template/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        if (!$image_name) {
            $product->pimage = $image_name;
        }
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('sm', 'Product Updated Successfully');
    }
}