<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    protected $fillable= [
        'product_id', 'size_id',];

    public function size(){
        $this->belongsTo('App\Size','size_id');
    }

    public function product(){
        $this->belongsTo('App\Product','product_id');
    }
}
