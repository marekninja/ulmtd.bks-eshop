<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcat extends Model
{
    public function product()
    {
        return $this->hasMany('app\Product');
    }

    public function maincat(){
        return $this->hasOne('App\MainCat','main_cat_id');
    }

    protected $fillable = ['name','route_name','main_cat_id'];

}
