<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ItemController extends Controller
{
    // Retrieve list of all items, sort by ascending, pass to View
    public function index()
    {
        $items = \App\Models\Item::all()->sortBy('title');
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
        // dd('store');
        $rules = [
            'category_id' => 'required|max:10|numeric',
            'title' => 'required|unique:items,title|max:100',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|unique:items,sku|alpha_num',
            'picture' => 'required|image'
        ];

        $validator = $this->validate($request, $rules);

        $item = new \App\Models\Item;
        $item->category_id = $request->category_id;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->price= $request->price;
        $item->quantity= $request->quantity;
        $item->sku= $request->sku;
        $item->picture= $request->picture;
        $item->save();

        Session::flash('success', 'A new item has been added to the database.');
        return redirect()->route('items.index');
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