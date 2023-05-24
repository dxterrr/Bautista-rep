<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Product;

class Product extends Controller
{
   
    //edit
    public function edit(){
        return view('Bautista-laravel/edit');
    }



}
