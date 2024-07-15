<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index')->with('items', $items);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'konten' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = '/uploads/items';
            $imageName = date('d-m-y') . "." . $image->getClientOriginalName();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = "$imageName";
        }

        Item::create($input);

        return redirect()->route('items.index')->with('success', 'item success add');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('item.show')->with('item', $item);
    }


    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = '/uploads/items';
            $imageName = date('d-m-y') . "." . $image->getClientOriginalName();
            $image->move(public_path($destinationPath), $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $item->update($input);

        return redirect()->route('items.index')->with('success', 'Items Success Updated');
    }

    public function destroy($id)
    {
        $item = Item::find($id);

        $item->delete();

        return redirect()->route('items.index')->with('danger', 'deleted success');
    }
}
