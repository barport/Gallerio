<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\CategoryRequest;
use Session;

class CategoriesController extends MainController
{
    public function index()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    public function create()
    {
        return view('cms.add_category', self::$data);

    }

    public function store(CategoryRequest $request)
    {
        Categorie::save_new($request);
        return redirect('cms/categories');
    }

    public function show($id)
    {
        self::$data['item_id'] = $id;
        return view('cms.delete_menu', self::$data);
    }

    public function edit($id)
    {
        self::$data['item'] = Menu::find($id)->toArray();
        return view('cms.edit_menu', self::$data);

    }

    public function update(MenuRequest $request, $id)
    {
        Menu::update_item($request, $id);
        return redirect('cms/menu');
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        Session::flash('sm', 'Category deleted successfuly');
        return redirect('cms/categories');
    }
}
