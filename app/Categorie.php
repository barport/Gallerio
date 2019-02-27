<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Categorie extends Model
{
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

        $category = new self();
        $category->ctitle = $request['title'];
        $category->curl = $request['url'];
        $category->carticle = $request['article'];
        $category->cimage = $image_name;
        $category->save();
        Session::flash('sm', 'Category Created Successfully');
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

        $category = self::find($id);
        $category->ctitle = $request['title'];
        $category->curl = $request['url'];
        $category->carticle = $request['article'];

        if ($image_name) {
            $category->cimage = $image_name;

        }
        $category->save();
        Session::flash('sm', 'Category updated Successfully');
    }
}