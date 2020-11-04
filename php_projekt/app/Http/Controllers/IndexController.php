<?php

namespace App\Http\Controllers;

use App\Product;
//use Illuminate\Support\Facades\DB
use Illuminate\Http\Request;

class IndexController extends Controller
{

//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all(); // got this from database model

//        $products = DB::table('products')
//            ->select('products.id as pid','products.name as name','products.cena','images.*','subcats.route_name as sub_route_name',
//                'main_cats.route_name as main_route_name')
//            ->join('images', 'products.image_id','=', 'images.id')
//            ->join('main_cats','products.mainCat_id','=', 'main_cats.id')
//            ->join('subcats','products.subCat_id','=', 'subcats.id')
//            ->get();

        $news = Product::with(['image','maincat','subcat'])->orderBy('updated_at','desc')->limit(9)->get();

        return view('index',['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
