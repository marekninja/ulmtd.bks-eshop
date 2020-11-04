@extends('layouts.app')



@section('content')
@include('inc.bannerFind')
<div class="main-content">

    <span class="basket_h">
        <h1>Úspešne objednané</h1>
    </span>
    <div class="line"><img src="\pics/line2.svg" alt="čiara"></div>
    <div class="product_desc">


        <p>
            Vaša objednávka č. {{ $order_id }} bola úspešne zaznamenaná!
        </p>
        <p>
            Na váš mail {{$user['email']}} očakávajte potvrdenie objednávky, nákupnú zmluvu a informácie o priebehu.
        </p>
        <p>
            Bežný čas odoslania sú 2 pracovné dni.
        </p>

    </div>

    <div class="basket-summary">
        <button type="button" class="cancelbtn"> <span class='btn_text'>Hlavná stránka</span>
        </button>
    </div>




    @include('inc.recommended')
</div>
        @endsection
