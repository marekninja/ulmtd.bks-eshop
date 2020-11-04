<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = ['mainCat_id', 'subCat_id', 'image_id', 'popis', 'vyrobca_id', 'cena', 'ram',
        'vidlica', 'tlmic', 'kolesa', 'predny_plast', 'zadny_plast', 'brzdy',
        'kluky', 'stredove_zlozenie', 'radenie', 'prehadzovac', 'kazeta', 'retaz',
        'napinak_retaze', 'sedlovka', 'sedlo', 'predstavec', 'riadidla', 'gripy',
        'hlavove_zlozenie', 'pedale', 'vaha', 'farba', 'name','extra','naboje'];



    public function maincat()
    {
        return $this->belongsTo('App\MainCat','mainCat_id');
    }

    public function subcat()
    {
        return $this->belongsTo('App\Subcat','subCat_id');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function maker()
    {
        return $this->belongsTo('App\Maker','vyrobca_id','id');
    }

    public function sizeproduct(){
        return $this->hasMany('App\SizeProducts');
    }

    public function orderproduct(){
        return $this->hasMany('App\OrderProduct');
    }

    public function sizes()
    {
        //return $this->hasManyThrough('App\Size', 'App\SizeProduct');
        return $this->belongsToMany('App\Size','size_products','product_id','size_id');
    }
}
