<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    var $product;
    var $weight;
    var  $cost;

    public function __construct($product, $weight, $cost)
    {
        $this->product = $product;
        $this->weight = $weight;
        $this->cost = $cost;
    }
}
