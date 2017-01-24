<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class blogController extends Controller
{

    public function index($id = null)
    {
        if($id ==null){

          return Product::orderBy('id', 'asc')->get();

        }
        else{

          return $this->show($id);
        }
    }


    public function store(Request $request)
    {

        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');

        $product->save();

return 'Product successfully create' . $product->id;



    }

    public function show($id)
    {
        return Product::find($id);
    }


    public function update(Request $request, $id)
    {
        $product  = Product::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');

        $product->save();

        return 'Product succesfully updated'. $product->id;
    }


    public function destroy($id)
    {
        Product::find($id)->delete();

        return 'Product successfully removed';
    }
}
