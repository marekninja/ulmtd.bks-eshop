@extends('layouts.app')


@section('content')

@include('inc.bannerBasket')
<div class="main-content">

    <div class="basket-steps">
        <a href="/kosik">
            <img src="\pics/step1off.svg" alt="V košíku na kroku 1">
        </a>
        <div class="line"><img src="\pics/line.svg" alt="čiara"></div>
        <a href="/doprava">
            <img src="\pics/step2off.svg" alt="Nasleduje krok 3">
        </a>
        <div class="line"><img src="\pics/line.svg" alt="čiara"></div>
        <a href="/platba">
            <img src="\pics/step3on.svg" alt="krok 3">
        </a>
    </div>

    <span class="basket_h">
        <h1>Výber platby</h1>
    </span>
    <div class="line"><img src="\pics/line2.svg" alt="čiara"></div>

    <form id="paymentChoiceForm" method="get" action="/platba-zmena" onchange="document.getElementById('paymentChoiceForm').submit()">
    <div class="basket-preview">
        @foreach($payments as $payment)
            <div class='basket-item'>
                <div class="basket_row">
                    @if(session()->get('cart_payment'))
                        @if(session()->get('cart_payment') == $payment->name)
                        <input type="radio" name="platba" value="{{$payment->name}}" checked>{{$payment->name}}<br>
                            @else
                            <input type="radio" name="platba" value="{{$payment->name}}">{{$payment->name}}<br>
                        @endif
                    @else
                        <input type="radio" name="platba" value="{{$payment->name}}">{{$payment->name}}<br>
                    @endif
                </div>
            </div>
            @endforeach
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="Dobierka">Dobierkou<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="platba v hotovosti">V hotovosti<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="Prevodom na účet">Prevodom na účet<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="Platba kartou">Platba kartou<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="SporoPay">SporoPay<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="TatraPay">TatraPay<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="VÚB e-Platby">VÚB e-Platby<br>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class='basket-item'>--}}
{{--            <div class="basket_row">--}}
{{--                <input type="radio" name="platba" value="Quatro- nákup na splátky">Quatro- nákup na splátky<br>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    </form>
    <h2>
        Poznámka k objednávke
    </h2>
    <form action="/uspech" method="get" id="objednat">
        @csrf
        <div class="note">
            <textarea type="text" name="poznamka" rows="5" cols="50"> </textarea>
        </div>
        <input type="hidden" name="suma_tovar" value="{{session()->get('cart_sum')['products']}} €">
        <input type="hidden" name="suma_doprava" value="{{session()->get('cart_sum')['transport']}} €">
        <input type="hidden" name="suma_celkom" value="{{session()->get('cart_sum')['products'] + session()->get('cart_sum')['transport'] }} €">
    </form>


    <div class="basket-summary">
        <table>
            <tr>
                <td>Celkom za tovar</td>
                <td>{{session()->get('cart_sum')['products']}} €</td>
            </tr>
            <tr>
                <td>Doprava a balné</td>
                <td>{{session()->get('cart_sum')['transport']}} €</td>
            </tr>
            <tr>
                <td>Výsledná suma</td>
                <td>{{session()->get('cart_sum')['products'] + session()->get('cart_sum')['transport'] }} €</td>
            </tr>
        </table>



        <button type="button" class="cancelbtn" onclick="document.getElementById('objednat').submit()"> <span class='btn_text'>Záväzne objednať a zaplatiť</span>
            <img src='\pics\chevron_right-24px.svg' alt="Pokračovať na dopravu">
        </button>
    </div>



  @include('inc.recommended')
</div>
@endsection
