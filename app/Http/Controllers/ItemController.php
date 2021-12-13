<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Retrieve list of all items, sort by ascending, pass to View
    public function index()
    {
        $items = \App\Models\Item::all()->sortBy('item');
        // dd($items);
        return view('items.index')->with('items', $items);
    }

    // Show View to add new Item
    public function create()
    {
        // dd('create');
        return view('items.create');
    }

    // Validate input, insert into DB, redirect to index
    public function store(Request $request)
    {
        dd('store');
    }

    // Retrieve single item using $id, pass to show view
    public function show($id)
    {
        dd('show');
    }

    //Retrieve single item using $id, pass to edit view
    public function edit($id)
    {
        dd('edit');
    }

    // Validate our input, update $id record in DB, redirect to index
    public function update(Request $request, $id)
    {
        dd('update');
    }

    // Retrieve single item using $id, delete from DB, redirect to index
    public function destroy($id)
    {
        dd('destroy');
    }
}