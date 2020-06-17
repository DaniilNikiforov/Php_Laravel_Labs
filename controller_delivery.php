<?php

namespace App\Http\Controllers;

use App\delivery;
use Illuminate\Http\Request;

class controller_delivery extends Controller
{
    public function get_delivery($product, $weight, $cost){
        $obj = new delivery($product, $weight, $cost);
        return view('view_delivery', ['delivery' => $obj]);
    }
}
