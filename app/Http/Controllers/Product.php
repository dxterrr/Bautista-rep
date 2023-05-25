<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productmodel;
use DB;

class Product extends Controller
{
    //add
    public function add()
    {
        return view('Bautista-laravel/add');
    }
    public function test()
    {
        return view('Bautista-laravel/edit');
    }

    //list
    public function showList()
    {
        return view('Bautista-laravel/list');
    }
    public function getData() {
        $product = ProductModel::all();
        return view('Bautista-laravel/list', ['products' => $product]);
    }


    public function save (Request $request){
        $product= new Productmodel;

        $product->product_name = $request->input('product_name');
        $product->cost = $request->input('cost');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->save();
        return redirect('list');

    }

    //edit
    public function edit(Request $request, $id) {
        $product = Productmodel::find($id);
        $res = [
            'id' => $product->id,
            'product_name' => $product->product_name,
            'cost' => $product->cost,
            'quantity' => $product->quantity,
            'description' => $product->description,
        ];
        return view('Bautista-laravel/edit', $res);
    }

     //update
     public function update(Request $request, $id)
     {
         $data=[
             'product_name' => $request->input()['product_name'],
             'cost' => $request->input()['cost'],
             'quantity' => $request->input()['quantity'],
             'description' => $request->input()['description'],
         ];
         $update_product = Productmodel:: where ('id', $id)->update($data);
         return redirect('list')->with('status', 'Succesfully updated');
     }
       //delete
    public function die($id)
    {
        $player= Productmodel::find($id);
        DB::delete('DELETE FROM product WHERE id= ?', [$id]);
        return redirect('list');
    }

    public function backlist(){
        return view('list');
    }
}
