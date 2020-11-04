<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['link_prev_200w',
        'link_prev_300w',
        'link_prev_575w',
        'link_prev_767w',
        'link_prev_991w',
        'link_prev_1300w',
        'link_full',];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
