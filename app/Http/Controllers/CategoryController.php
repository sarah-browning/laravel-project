<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    // Retrieve list of all categories, sort by ascending, pass to View
    public function index()
    {
        $categories = \App\Models\Category::all()->sortBy('category');
        //dd($categories);
        return view('categories.index')->with('categories', $categories);
    }

    // Show View to add new Category
    public function create()
    {
        // dd('create');
        return view('categories.create');
    }

    // Validate input, insert into DB, redirect to index
    public function store(Request $request)
    {
        dd('store');
    }

    // Retrieve single category using $id, pass to show view
    public function show($id)
    {
        dd('show');
    }

    //Retrieve single category using $id, pass to edit view
    public function edit($id)
    {
        dd('edit');
    }

    // Validate our input, update $id record in DB, redirect to index
    public function update(Request $request, $id)
    {
        dd('update');
    }

    // Retrieve single category using $id, delete from DB, redirect to index
    public function destroy($id)
    {
        dd('destroy');
    }
}
