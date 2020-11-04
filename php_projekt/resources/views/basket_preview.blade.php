@extends('layouts.app')


@section('content')
    @include('inc.bannerBasket')
<div class="main-content">

    <div class="basket-steps">
        <a href="/kosik">
        <img src="\pics/step1on.svg" alt="V košíku na kroku 1">
        </a>
        <div class="line"><img src="\pics/line.svg" alt="čiara"></div>
        <a onclick="document.getElementById('{{$product->id}}.{{$product->velkost}}.{{$product->pocet}}').submit()">
            <img src="\pics/step2off.svg" alt="Nasleduje krok 3">
        </a>
        <div class="line"><img src="\pics/line.svg" alt="čiara"></div>
        <a onclick="document.getElementById('{{$product->id}}.{{$product->velkost}}.{{$product->pocet}}').submit()">
            <img src="\pics/step3off.svg" alt="krok 3">
        </a>
    </div>

    <div class="basket-preview">
        @foreach($products as $product)
        <div class="basket-item">
            <div class="basket_row">
                <a href="/products/{{$product->id}}">
                    <img srcset="{{$product->image->link_prev_200w}} 200w" sizes="(max-width: 575px) 200px,
                            (min-width: 576px) 200px" src="{{$product->image->link_prev_300w}}" alt="Pivot
                            Firebird 29 Team XX1 AXS">
                </a>
            </div>
            <div class="basket_row">
                <a href="/products/{{$product->id}}">
                    <div class="name">
                        {{$product->maker->name}} <br> {{$product->name}} <br> Veľkosť: {{$product->velkost}} <br> {{$product->cena}} €
                    </div>
                </a>

            </div>
            <div class="basket_row">
                <div class="vertical">
                    <div class="amount">
                        <form action="/kosik-zmena" method="get" onchange="this.form.submit()">
                            <input type="hidden" name="id" value={{$product->id}}>
                            <input type="hidden" name="velkost" value={{$product->velkost}}>
                            <input type="text" name="novy_pocet" value={{$product->pocet}}>
                            <span class="amount_addon">ks</span>
                        </form>
                    </div>
                    <form id="{{$product->id}}.{{$product->velkost}}.{{$product->pocet}}" action="/kosik-zmena" method="get">
                        <input type="hidden" name="id" value={{$product->id}}>
                        <input type="hidden" name="velkost" value={{$product->velkost}}>
                        <input type="hidden" name="novy_pocet" value=0>
                        <div class="delete" onclick="document.getElementById('{{$product->id}}.{{$product->velkost}}.{{$product->pocet}}').submit()">
                            <img src="\pics\delete_forever-24px.svg" alt="user ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{--        <div class="basket-item">--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w" sizes="(max-width: 575px) 200px,--}}
{{--                            (min-width: 576px) 200px" src="\pics\firebird-29-200w.png" alt="Pivot--}}
{{--                            Firebird 29 Team XX1 AXS">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <div class="name">--}}
{{--                        Pivot <br> Firebird 29 Team XX1 AXS <br> 12,499.00 €--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <div class="amount">--}}
{{--                    <input type="text" value="1">--}}
{{--                    <span class="amount_addon">ks</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="basket-item">--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w" sizes="(max-width: 575px) 200px,--}}
{{--                            (min-width: 576px) 200px" src="\pics\firebird-29-200w.png" alt="Pivot--}}
{{--                            Firebird 29 Team XX1 AXS">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <div class="name">--}}
{{--                        Pivot <br> Firebird 29 Team XX1 AXS <br> 12,499.00 €--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <div class="amount">--}}
{{--                    <input type="text" value="1">--}}
{{--                    <span class="amount_addon">ks</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="basket-item">--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w" sizes="(max-width: 575px) 200px,--}}
{{--                            (min-width: 576px) 200px" src="\pics\firebird-29-200w.png" alt="Pivot--}}
{{--                            Firebird 29 Team XX1 AXS">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <a href="/detail">--}}
{{--                    <div class="name">--}}
{{--                        Pivot <br> Firebird 29 Team XX1 AXS <br> 12,499.00 €--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            <div class="basket_row">--}}
{{--                <div class="amount">--}}
{{--                    <input type="text" value="1">--}}
{{--                    <span class="amount_addon">ks</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="basic-flex">--}}
{{--        <label>--}}
{{--            Zľavový kupón--}}
{{--        </label>--}}
{{--        <input type="text" placeholder="kód" name="sales_coupon">--}}
{{--        <input type="submit" value="odoslať">--}}
{{--    </div>--}}

    <div class="basket-summary">
        <table>
            <tr>
                <td>Celkom za tovar</td>
                <td>{{session()->get('cart_sum')['products']}} €</td>
            </tr>
{{--            <tr>--}}
{{--                <td>Zľavový kupón</td>--}}
{{--                <td>0 €</td>--}}
{{--            </tr>--}}
            <tr>
                <td>Doprava a balné</td>
                <td>{{session()->get('cart_sum')['transport']}} €</td>
            </tr>
            <tr>
                <td>Výsledná suma</td>
                <td>{{session()->get('cart_sum')['products'] + session()->get('cart_sum')['transport'] }} €</td>
            </tr>
        </table>
        <a href ='/doprava'>
            <button type="button" class="cancelbtn"> <span class='btn_text'>Pokračovať na dopravu</span>
                <img src="\pics\chevron_right-24px.svg" alt="Pokračovať na dopravu">
            </button>
        </a>
    </div>



    @include('inc.recommended')
</div>

        @endsection
