<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//TOTO JE HACK NA DYNAMICKE ROUTES
class CategoryController extends Controller
{
    public function index($categories)
    {
        $categories = explode('/', $categories);
        $parts = array_pop($categories);

        return view('products');


    }

}
