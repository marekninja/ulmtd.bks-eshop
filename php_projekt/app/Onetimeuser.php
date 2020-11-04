<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onetimeuser extends Model
{
    protected $fillable = [
        'meno','priezvisko','email','password','ulica_a_cd','obec','psc','phone_number','is_admin',
    ];

    protected $guarded = ['id'];

    public function order(){
        return $this->hasOne('App\Order');
    }
}
