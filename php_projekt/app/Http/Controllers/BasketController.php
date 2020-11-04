<?php

namespace App\Http\Controllers;

use App\Onetimeuser;
use App\Order;
use App\OrderProduct;
use App\Payment;
use App\Product;
use App\Transport;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
    /**
     * Vrati zobrazenie produktov v kosiku
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function preview(){

        $cart = session()->get('cart');
        //ak je kosik prazdny, nema co zobrazit

        $prodArray = array();
        $sum = 0;
        if(!$cart) {
            return view('basket_preview',['products'=>$prodArray, 'sum' => $sum]);
        }



        $products = Product::with(['image','maker'])
            ->whereIn('id',array_keys($cart))->get();

//        echo '<pre>';
//        print_r($products);
//        echo '<pre>';



        foreach ($products as $product){
            foreach (array_keys($cart[$product->id]) as $size){
                $prod = clone $product;
                $prod->velkost = $size;
                $prod->pocet = $cart[$product->id][$size]['pocet'];
                $sum += $prod->cena * $prod->pocet;
                array_push($prodArray,$prod);
            }
        }

        $cart_sum = [ 'products' => $sum, 'transport' => 50];
        session()->put('cart_sum',$cart_sum);

//        echo '<pre>';
//        print_r($prodArray);
//        echo '<pre>';


       return view('basket_preview',['products'=>$prodArray, 'cart_sum' => $sum]);
    }

    public function transport(){

        $transports = Transport::all();

        $cart = session()->get('cart');
        $cart_sum = session()->get('cart_sum');
        $cart_transport = session()->get('cart_transport');

        if (!$cart || !$cart_sum){
            return redirect('/');
        }

        if (empty($cart) || empty($cart_sum)){
            return redirect('/');
        }


        if(($cart_transport) && !empty($cart_transport)){
            $cart_sum['transport'] = $cart_transport['cena'];
        }

        session()->put('cart_sum',$cart_sum);


        return view('basket_transit',['transports'=>$transports]);
    }

    public function previewZmena(){
        $id = $_GET['id'];
        $velkost = $_GET['velkost'];
        $pocet = $_GET['novy_pocet'];

        $cart = session()->get('cart');

        if ($pocet == 0){
            unset($cart[$id][$velkost]);
        } else{
            $cart[$id][$velkost]['pocet'] = $pocet;
        }

        session()->put('cart', $cart);

        return redirect('/kosik');

    }

    public function dopravaZmena(){

        $doprava = $_GET['doprava'];
        $doprava = explode('#',$doprava);
        $cena = $doprava[1];
        $doprava = $doprava[0];


        $sum = session()->get('cart_sum');

//        $transport['transport'] = [ 'typ'=> $doprava, 'cena' => $cena];

        $cart_transport = [ 'typ'=> $doprava, 'cena' => $cena];

        $sum['transport'] = $cena;

        session()->put('cart_transport',$cart_transport);
        session()->put('cart_sum',$sum);

//        if (isset($cart['doprava'])){
//            $cart['doprava'] = [ 'typ'=> $doprava, 'cena' => $cena];
//
//        } else {
//            $cart['doprava'] = [ 'typ'=> $doprava, 'cena' => $cena];
//        }


        return redirect('/doprava');
    }

    public function dopravaAdresa(){
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';


        $oneTimeUser = $_POST;

        if(!$oneTimeUser || empty($oneTimeUser)){
            return redirect('/doprava');
        }

        foreach($oneTimeUser as $form){
            if ($form == ''){
                return redirect('/doprava');
            }
        }

        session()->put('one_time_user',$oneTimeUser);


        return redirect('/platba');
    }

    public function payment(){
        $payments = Payment::all();

//        echo '<pre>';
//        print_r($payments);
//        echo '<pre>';


        return view('basket_payment',['payments'=>$payments]);
    }

    public function paymentZmena(){

//        echo '<pre>';
//        print_r($_GET);
//        echo '<pre>';

        $platba = $_GET['platba'];

        session()->put('cart_payment',$platba);

        return redirect('/platba');
    }

    public function success(){

        $cart_products = session()->get('cart');
        $cart_sum = session()->get('cart_sum');
        $cart_transport = session()->get('cart_transport');
        $one_time_user = session()->get('one_time_user');
        $cart_payment = session()->get('cart_payment');

        $transport = Transport::where('name','=',$cart_transport['typ'])
            ->where('cena','=',$cart_transport['cena']);


        $transport_id = Transport::select('id')->where('name','=',$cart_transport['typ'])
            ->where('cena','=',$cart_transport['cena'])->first();

        if ($transport_id ==null){
            redirect('/doprava');
        }

        $payment_id = Payment::select('id')->where('name','=',$cart_payment)->first();
        if ($payment_id ==null){
            redirect('/platba');
        }


        $data = $one_time_user;
        $onetime_id = Onetimeuser::create([
            'meno' => $data['meno'],
            'priezvisko' => $data['priezvisko'],
            'email' => $data['email'],
            'ulica_a_cd' => $data['ulica_a_cd'],
            'obec' => $data['obec'],
            'psc' => $data['psc'],
            'phone_number' => $data['phone_number'],
            ])->id;

        $user = null;
        $user_id = null;
        if(Auth::check()){
            $user = Auth::user();
            $user_id = Auth::id();
        }

        $cena = 0;
        foreach (array_keys($cart_products) as $id){
            foreach (array_keys($cart_products[$id]) as $sz){
                $prod = Product::select('cena')->find($id);
                $cen = $prod->cena;
                $pocet = $cart_products[$id][$sz]['pocet'];
                if($pocet < 0){
                    $pocet = -$pocet;
                }
                $cena +=  $cen*$pocet;
            }
        }

        $order_id = Order::create([
            'cena'=> $cena,
            'user_id'=> $user_id,
            'onetimeuser_id'=> $onetime_id,
            'payment_type'=> $payment_id->id,
            'transport_type' => $transport_id->id,
        ])->id;


        foreach (array_keys($cart_products) as $id){
            foreach (array_keys($cart_products[$id]) as $sz){
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $id,
                    'pocet' => $cart_products[$id][$sz]['pocet'],
                    'velkost' => $sz,
                ]);
            }
        }

        session()->forget('cart');
        session()->forget('cart_sum');
        session()->forget('cart_trasport');
        session()->forget('cart_payment');
        session()->forget('one_time_user');


        return view('/basket_succesfull',['user'=>$one_time_user,'order_id'=>$order_id]);
    }

}
