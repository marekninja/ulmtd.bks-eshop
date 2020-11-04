<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    public function product(){

        return $this->hasMany('App\Product','vyrobca_id','id');
    }
}
