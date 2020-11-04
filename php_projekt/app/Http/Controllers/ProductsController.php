<?php

namespace App\Http\Controllers;

use App\MainCat;
use App\Maker;
use App\Product;
use App\Size;
use App\Subcat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function foo\func;

class ProductsController extends Controller
{
    /**
     * Display a listing of ALL the resources.
     *
     * @param null $categories
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        echo '<br><br>';
//        echo $categories;
//        echo '<br><br>';


        $makers = Maker::has('product')->get();
        $sizes = Size::has('product')->get();

        $maker = array();
        foreach ($makers as $m){
            array_push($maker,$m->name);
        }
        $size = array();
        foreach ($sizes as $s){
            array_push($size,$s->name);
        }
        if (!empty($_GET['vyrobca'])){
            $maker =  $_GET['vyrobca'];
        }
        if (!empty($_GET['velkost'])){
            $size =  $_GET['velkost'];
        }
        $order =  "asc";
        if (!empty($_GET['radenie'])){
            $order =  $_GET['radenie'];
        }

        if(!empty($_get['page'])){
            $order = $_get['ordering'];
        }

        $products = Product::with(['image','maincat','subcat','maker','sizes'])
            ->whereHas('maker',function($q)use($maker){
                    $q->whereIn('makers.name',$maker);})
            ->whereHas('sizes',function ($q) use($size){
                    $q->whereIn('sizes.name',$size);
            });

        switch ($order){
            case 'asc':
            case 'desc':
                $products = $products->orderBy('cena',$order)->paginate(2);
                break;
            case 'old':
                $products = $products->orderBy('updated_at','desc')->paginate(2);
                break;
            case 'new':
                $products = $products->orderBy('updated_at','asc')->paginate(2);
                break;
        }

        $url = "/products";


        $title = 'Všetky produkty';
        return view('products',['products' => $products,'sizes'=>$sizes,'makers'=>$makers, 'title'=>$title, 'url' => $url,
            'radenie' => $order,'vyrobca'=>$maker,'velkost'=>$size]);
    }

    /**
 * Display a listing of MAIN CATEGORY of the resources.
 *
 * @return \Illuminate\Http\Response
 */
    public function category($maincat)
    {

        echo 'category';

//        $makers = Maker::has('product')->get();
//        $sizes = Size::has('product')->get();

        $main = MainCat::where('route_name','=',$maincat)->first();
        $title = $main->name;

        $makers = Maker::whereHas('product',function ($q) use ($main){
            $q->where('products.mainCat_id','=',$main->id);})->get();

        $sizes = Size::whereHas('product',function ($q) use ($main){
            $q->where('products.mainCat_id','=',$main->id);})->get();

        $maker = array();
        foreach ($makers as $m){
            array_push($maker,$m->name);
        }
        $size = array();
        foreach ($sizes as $s){
            array_push($size,$s->name);
        }
        if (!empty($_GET['vyrobca'])){
            $maker =  $_GET['vyrobca'];
        }
        if (!empty($_GET['velkost'])){
            $size =  $_GET['velkost'];
        }
        $order =  "asc";
        if (!empty($_GET['radenie'])){
            $order =  $_GET['radenie'];
        }

        if(!empty($_get['page'])){
            $order = $_get['ordering'];
        }

//        $products = Product::with(['image','maincat','subcat','maker','sizes'])
//            ->simplePaginate(2);

        $products = Product::with(['image','maincat','subcat','maker','sizes'])
            ->whereHas('maincat',function ($q) use ($maincat){
                $q->where('main_cats.route_name','=', $maincat);})
            ->whereHas('maker',function($q)use($maker){
                $q->whereIn('makers.name',$maker);})
            ->whereHas('sizes',function ($q) use($size){
                $q->whereIn('sizes.name',$size);
            });

        switch ($order){
            case 'asc':
            case 'desc':
                $products = $products->orderBy('cena',$order)->paginate(2);
                break;
            case 'old':
                $products = $products->orderBy('updated_at','desc')->paginate(2);
                break;
            case 'new':
                $products = $products->orderBy('updated_at','asc')->paginate(2);
                break;
        }

        $url = '/products/' . $main->route_name;

        return view('products',['products' => $products,'sizes'=>$sizes,'makers'=>$makers, 'title'=>$title, 'url' => $url,
            'radenie' => $order,'vyrobca'=>$maker,'velkost'=>$size]);
    }

    /**
     * Display a listing of SUB CATEGORY OF MAIN CATEGORY of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories($maincat,$subcat)
    {
//        $makers = Maker::has('product')->get();
//        $sizes = Size::has('product')->get();

        echo 'categories';

        $main = MainCat::all()->where('route_name','=',$maincat)->first();
        $sub = Subcat::all()->where('route_name','=',$subcat)->first();

        $url = '/products/' . $main->route_name . '/' . $sub->route_name;

        $title = $main->name . ' -> ' . $sub->name;

        $makers = Maker::whereHas('product',function ($q) use ($main,$sub){
            $q->where('products.mainCat_id','=', $main->id);
            $q->where('products.subCat_id','=', $sub->id);
        })->get();

        $sizes = Size::whereHas('product',function ($q) use ($main,$sub){
                $q->where('products.mainCat_id','=', $main->id);
                $q->where('products.subCat_id','=', $sub->id);
            })->get();

        $maker = array();
        foreach ($makers as $m){
            array_push($maker,$m->name);
        }
        $size = array();
        foreach ($sizes as $s){
            array_push($size,$s->name);
        }
        if (!empty($_GET['vyrobca'])){
            $maker =  $_GET['vyrobca'];
        }
        if (!empty($_GET['velkost'])){
            $size =  $_GET['velkost'];
        }
        $order =  "asc";
        if (!empty($_GET['radenie'])){
            $order =  $_GET['radenie'];
        }

        if(!empty($_get['page'])){
            $order = $_get['ordering'];
        }

//        $products = Product::with(['image','maincat','subcat','maker','sizes'])
//            ->simplePaginate(2);

        $products = Product::with(['image','maincat','subcat','maker','sizes'])
            ->whereHas('maincat',function ($q) use ($maincat){
                $q->where('main_cats.route_name','=', $maincat);
            })->whereHas('subcat',function ($q) use ($subcat){
                $q->where('subcats.route_name','=', $subcat);
            })
            ->whereHas('maker',function($q)use($maker){
                $q->whereIn('makers.name',$maker);})
            ->whereHas('sizes',function ($q) use($size){
                $q->whereIn('sizes.name',$size);
            });

        switch ($order){
            case 'asc':
            case 'desc':
                $products = $products->orderBy('cena',$order)->paginate(2);
                break;
            case 'old':
                $products = $products->orderBy('updated_at','desc')->paginate(2);
                break;
            case 'new':
                $products = $products->orderBy('updated_at','asc')->paginate(2);
                break;
        }

        $url = '/products/' . $main->route_name;

        return view('products',['products' => $products,'sizes'=>$sizes,'makers'=>$makers, 'title'=>$title, 'url' => $url,
            'radenie' => $order,'vyrobca'=>$maker,'velkost'=>$size]);
    }

    public function filter(Request $request){
        $data = $request->all();
        echo '<br><br><br>DATA'; print_r($data); echo'<br><br><br>';
//
//        $old = $data['url'];
//        echo '<br><br><br>OLD'.$old.'<br><br><br>';
//
//        $old = explode('?',$old);
//        echo '<br><br><br>OLD '; print_r($old); echo '<br><br><br>';
//
//        $oldUrlParams = explode('?',$old[1]);
//
//        echo '<br><br><br>PARAMS '; print_r($oldUrlParams); echo '<br><br><br>';
//
//        $oldUrlExplo = explode('&',$oldUrlParams[0]);
//        echo '<br><br><br>EXPLO '; print_r($oldUrlExplo); echo '<br><br><br>';
//
//
//        $oldUrl = $old[0];
//        $oldUrlParams = explode('?',$old[1]);
//        $oldUrlParams = $old[1];
////        $oldUrlVyr = explode('&',$oldUrlParams);
////        $oldUrlVelk = explode('&',$oldUrlParams);
////        $oldUrlRad = explode('&',$oldUrlParams);
//        echo '<br><br><br>OLD URL'.$oldUrl.'<br><br><br>'; die;


        $makerUrl =  "";
        if (!empty($data['vyrobca'])){
            foreach ($data['vyrobca'] as $maker){
                if (empty($makerUrl)){
                    $makerUrl = '&vyrobca='.$maker;
                }else{
                    $makerUrl .= '@'.$maker;
                }
            }
        }

        $sizeUrl = "";
        if (!empty($data['velkost'])){
            foreach ($data['velkost'] as $size){
                if (empty($sizeUrl)){
                    $sizeUrl = '&velkost='.$size;
                }else{
                    $sizeUrl .= '@'.$size;
                }
            }
        }

        echo 'radenie: '.$data['radenie'];

        $orderUrl = "";

            if (!empty($data['radenie'])){
                $orderUrl = '&radenie='.$data['radenie'];
            }



        $finalUrl = $data['url'].$makerUrl.$sizeUrl.$orderUrl;
        echo 'final    ='.$finalUrl;

        return Redirect::to($finalUrl);
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
        $product = Product::with(['image','maincat','subcat','maker','sizes'])->find($id);
        return view('detail',['product' => $product]);
    }

    /**
 * Adds item to Session cart
 * Sent here by GET
 *
 * @param $id
 */
    public function addToCart($id){

        $product = Product::find($id);

        $velkost =  $_GET['velkost'];
        $pocet = $_GET['pocet'];

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [ $id => [
                $velkost => [ "pocet" => $pocet
                ]]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('succes','Úspešne pridané do košíka');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id][$velkost])) {
            $cart[$id][$velkost]['pocet'] += $pocet;


            session()->put('cart', $cart);

            return redirect()->back()->with('succes','Úspešne pridané do košíka');

        }

        // if item not exist in cart then add to cart with quantity
        $cart[$id][$velkost] = [
            "pocet" => $pocet,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('succes','Úspešne pridané do košíka');
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
