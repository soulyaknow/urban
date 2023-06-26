<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function create(){
        return view('admin.add-product',[
            'products' => Product::all()
        ]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'itemtype' => 'required',
            'productname' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('img', 'public');
        }
        
        Product::create($formFields);

        return back()->with('message', 'Product Added!');
    }
    public function edit(Product $product){
        return view('admin.edit-product',['product' => $product]);     
    }
    public function update(Request $request, Product $product){
        $formFields = $request->validate([
            'itemtype' => 'required',
            'productname' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $product->update($formFields);

        return redirect('/admin')->with('message', 'Product Updated!');
    }
    public function delete(Product $product){
        return view('admin.delete-product',['product' => $product]);     
    }

    public function destroy(Product $product){
        
        $product->delete();

        return redirect('/admin')->with('message', 'Product Deleted!');
    }
}
