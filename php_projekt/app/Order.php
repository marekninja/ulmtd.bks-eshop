<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable =  ['cena',
            'user_id',
            'onetimeuser_id',
            'payment_type',
            'transport_type',];

    public function orderproduct(){
        return $this->hasMany('App\OrderProduct');
    }

    public function product(){
        return $this->hasManyThrough('App\Product','App\OrderProduct','order_id','product_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function transport(){
        return $this->belongsTo('App\Transport');
    }

    public function payment(){
        return $this->belongsTo('App\Payment');
    }

    public function oneTimeUser(){
        return $this->belongsTo('App\Onetimeuser');
    }


}
