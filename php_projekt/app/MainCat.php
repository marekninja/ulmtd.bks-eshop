<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCat extends Model
{
    public function product()
    {
        return $this->hasMany('app\Product');
    }

    public function subcat()
    {
        return $this->hasMany('App\Subcat');
    }

    protected $fillable = ['name','route_name'];
}
