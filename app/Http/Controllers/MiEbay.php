<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiEbay extends Controller
{
    public function verCompras(){
        return view('miEbayCompras');
    }
}
