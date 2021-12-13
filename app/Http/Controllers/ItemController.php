<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
use Storage;

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
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->sku = $request->sku;
        $filename = $request->picture->getClientOriginalName();
        $item->picture = $request->file('picture')->move('storage/images/uploads',$filename);
        $item->save();

        Session::flash('success', $item->title.' has been added to the database. The image file is located at public/storage/images/uploads/'.$filename.'.');
        return redirect()->route('items.index');
    }

    // Retrieve single item using $id, pass to show view
    public function show($id)
    {
        // dd('show');
        $item = \App\Models\Item::find($id);
        if ($item != null) {
            return view('items.show')->with('item', $item);
        } else {
            Session::flash('error', 'Item not found.');
            return redirect()->route('items.index');
        }
    }

    //Retrieve single item using $id, pass to edit view
    public function edit($id)
    {
        // dd('edit');
        $item = \App\Models\Item::find($id);
        if ($item != null) {
            return view('items.edit')->with('item', $item);
        } else {
            Session::flash('error', 'Item not found.');
            return redirect()->route('items.index');
        }
    }

    // Validate our input, update $id record in DB, redirect to index
    public function update(Request $request, $id)
    {
        // dd('update');
        $rules = [
            'category_id' => 'required|max:10|numeric',
            'title' => 'required|max:100|unique:items,title,'.$id,
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sku' => 'required|alpha_num|unique:items,sku,'.$id,
            'picture' => 'required|image'
        ];

        $validator = $this->validate($request, $rules);

        $item = \App\Models\Item::find($id);
        if ($item != null) {
            $item->category_id = $request->category_id;
            $item->title = $request->title;
            $item->description = $request->description;
            $item->price = $request->price;
            $item->quantity = $request->quantity;
            $item->sku = $request->sku;
            $filename = $request->picture->getClientOriginalName();
            $item->picture = $request->file('picture')->move('storage/images/uploads',$filename);
            $item->save();

            Session::flash('success', $item->title.' has been updated.  The image file is located at public/storage/images/uploads/'.$filename.'.');
        } else {
            Session::flash('error', 'Item not found.');
        }
        return redirect()->route('items.index');
    }

    // Retrieve single item using $id, delete from DB, redirect to index
    public function destroy($id)
    {
        // dd('destroy');
        $item = \App\Models\Item::find($id);
        if ($item != null) {
            $filename = $item->picture;
            $item_name = $item->title;
            unlink($filename);
            $item->delete();

            Session::flash('success', $item_name.' has been deleted.');
        } else {
            Session::flash('error', 'Item not found.');
        }
        return redirect()->route('items.index');
    }
}