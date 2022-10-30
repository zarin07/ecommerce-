<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            Image::make($request->file('image'))
                ->resize(300, 300)
                ->save(storage_path().'/app/public/products/'.$fileName);
        }
        Product::create([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'tags'=>$request->tags,
            
            

        ]);
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {

        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }



    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'tags' => $request->tags
        ]);
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);

            $product->delete();
            return redirect()->back();
        } catch (QueryException $e) {     //error catch kore $e (or anyting issa moto) variable e error ta store kore dekhanor jonno
            dd($e);
        }
    }
}
