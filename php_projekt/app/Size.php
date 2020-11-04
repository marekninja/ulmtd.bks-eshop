<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function sizeproduct(){
        $this->hasMany('App\SizeProduct');
    }

    public function product()
    {
        //return $this->hasManyThrough('App\Size', 'App\SizeProduct');
        return $this->belongsToMany('App\Product','size_products','size_id','product_id');
    }
}
