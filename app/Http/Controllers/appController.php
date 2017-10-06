<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    //
    function create(){
        return view('products.create');
    }
}
