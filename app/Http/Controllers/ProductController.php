<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::latest()->paginate(5);

        // return view('product.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
        $products = Product::all();
        return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/product/'; //arahfolder
            $imageName = date('Ymd') . "." . $image->getClientOriginalName(); //nama file
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Product::create($input);

        Alert::success('Success', 'Succes Add Product!');
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $products = Product::find($id);
        // return view('product.show')->with('products', $products);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // $products = Product::find($id);
        // return view('product.edit')->with('products', $products);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $pages = Pages::find($id);
        // $pages->update($id->all());
        // return redirect()->route('pages')->with('success', 'Success Edit Page');


        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/image/'; //arahfolder
            $imageName = date('Ymd') . "." . $image->getClientOriginalName(); //nama file
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $product->update($input);

        Alert::success('Success', 'Succes Edit Product!');
        return redirect('/product');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //DELETE OKE
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Alert::success('Success', 'Succes Delete Product!');
        return redirect('/product');
    }
}
