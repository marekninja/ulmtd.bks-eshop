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
                <img src="\pics/step2on.svg" alt="Nasleduje krok 3">
            </a>
            <div class="line"><img src="\pics/line.svg" alt="čiara"></div>
            <a onclick="document.getElementById('noRegister').submit()">
                <img src="\pics/step3off.svg" alt="krok 3">
            </a>
        </div>

        <span class="basket_h">
        <h1>Doprava</h1>
    </span>
        <div class="line"><img src="\pics/line2.svg" alt="čiara"></div>

        <form id='transportType' method="get" action="/doprava-zmena" onchange="document.getElementById('transportType').submit()">
{{--            <select>--}}
                <div class="basket-preview">
                    @foreach($transports as $transport)
                        <div class='basket-item'>
                            <div class="basket_row">
                                @if(session()->get('cart_transport'))
                                    @if(session()->get('cart_transport')['typ'] == $transport->name)
                                        <input type="radio" name="doprava" value="{{$transport->name}}#{{$transport->cena}}"checked>{{$transport->name}}<br>
                                        @else
                                        <input type="radio" name="doprava" value="{{$transport->name}}#{{$transport->cena}}">{{$transport->name}}<br>
                                        @endif
                                @else
                                    <input type="radio" name="doprava" value="{{$transport->name}}#{{$transport->cena}}">{{$transport->name}}<br>
                                @endif


                            </div>
                            <div class="basket_row">
                                <div class="name">
                                    {{$transport->cena}} €
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                    <div class='basket-item'>--}}
{{--                        <div class="basket_row">--}}
{{--                            <input type="radio" name="doprava" value="kuriér#5">Doručenie kuriérom<br>--}}
{{--                        </div>--}}
{{--                        <div class="basket_row">--}}
{{--                            <div class="name">--}}
{{--                                5 €--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class='basket-item'>--}}
{{--                        <div class="basket_row">--}}
{{--                            <input type="radio" name="doprava" value="osobný odber#0">Osobný odber na predajni<br>--}}
{{--                        </div>--}}
{{--                        <div class="basket_row">--}}
{{--                            <div class="name">--}}
{{--                                Zdarma--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class='basket-item'>--}}
{{--                        <div class="basket_row">--}}
{{--                            <input type="radio" name="doprava" value="dovoz domov#50">Dovoz domov<br>--}}
{{--                        </div>--}}
{{--                        <div class="basket_row">--}}
{{--                            <div class="name">--}}
{{--                                50 €--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--            </select>--}}
        </form>
        @guest
            <div class='basket-transit'>
                <div class='basic-flex'>
                    <button type="button" class="cancelbtn" onclick="login()"><span class='btn_text'>Prihlásiť sa</span>
                    </button>
                    <button type="button" class="cancelbtn" onclick="elementClick('noRegister')"><span class='btn_text'>Adresa dodania</span>
                    </button>
                </div>
            </div>

            <div class="register_content">
                <form id="noRegister" method="POST" action="/doprava-adresa" > {{-- style="display: none" --}}
                    @csrf
                    <div class="regist-row">
                        <label for="meno">
                            <span class='input_label'>Meno</span>
                        </label>

                        <input id="meno" type="text" class="@error('meno') is-invalid @enderror" name="meno"
                               value="{{ old('meno') }}" required autocomplete="meno" autofocus>

                        @error('meno')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="regist-row">
                        <label for="priezvisko">
                            <span class='input_label'>Priezvisko</span>
                        </label>
                        <input id="priezvisko" type="text" class="@error('priezvisko') is-invalid @enderror"
                               name="priezvisko" value="{{ old('priezvisko') }}" required autocomplete="priezvisko"
                               autofocus>

                        @error('priezvisko')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        {{--                        <input type="text" placeholder="" name="priezvisko" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="email">
                            <span class='input_label'>E-mail</span>
                        </label>

                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                    <input type="text" placeholder="" name="email" required>--}}
                    </div>

                    <div class="regist-row">
                        <label for="phone_number">
                            <span class='input_label'>Tel. číslo</span>
                        </label>

                        <input id="phone_number" type="phone_number" class="@error('phone_number') is-invalid @enderror" name="phone_number"
                               value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                    <input type="text" placeholder="" name="email" required>--}}
                    </div>

                    <div class="regist-row">
                        <label for="ulica_a_cd">
                            <span class='input_label'>Ulica a č.d.</span>
                        </label>
                        <input id="ulica_a_cd" type="text" class="@error('ulica_a_cd') is-invalid @enderror"
                               name="ulica_a_cd" value="{{ old('ulica_a_cd') }}" required autocomplete="ulica_a_cd"
                               autofocus>

                        @error('ulica_a_cd')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                        <input type="text" placeholder="" name="street" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="obec">
                            <span class='input_label'>Obec</span>
                        </label>
                        <input id="obec" type="text" class="@error('obec') is-invalid @enderror" name="obec"
                               value="{{ old('obec') }}" required autocomplete="obec" autofocus>

                        @error('obec')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                        <input type="text" placeholder="" name="city" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="psc">
                            <span class='input_label'>PSČ</span>
                        </label>
                        <input id="psc" type="text" class="@error('psc') is-invalid @enderror" name="psc"
                               value="{{ old('psc') }}" required autocomplete="psc" autofocus>

                        @error('psc')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </form>
            </div>
        @else
            <div class='basket-transit'>
                <div class='basic-flex'>
                    <button type="button" class="cancelbtn" onclick="elementClick('noRegister')"><span class='btn_text'>Zmeniť adresu dodania</span>
                    </button>
                </div>
            </div>
            <div class="register_content">
                <form id="noRegister" method="POST" action="/doprava-adresa" style="display: none">
                    @csrf
                    <div class="regist-row">
                        <label for="meno">
                            <span class='input_label'>Meno</span>
                        </label>

                        <input id="meno" type="text" class="@error('meno') is-invalid @enderror" name="meno"
                               value="{{Auth::user()->meno}}" required autocomplete="meno" autofocus>

                        @error('meno')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="regist-row">
                        <label for="priezvisko">
                            <span class='input_label'>Priezvisko</span>
                        </label>
                        <input id="priezvisko" type="text" class="@error('priezvisko') is-invalid @enderror"
                               name="priezvisko" value="{{ Auth::user()->priezvisko }}" required autocomplete="priezvisko"
                               autofocus>

                        @error('priezvisko')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        {{--                        <input type="text" placeholder="" name="priezvisko" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="email">
                            <span class='input_label'>E-mail</span>
                        </label>

                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                               value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                    <input type="text" placeholder="" name="email" required>--}}
                    </div>

                    <div class="regist-row">
                        <label for="phone_number">
                            <span class='input_label'>Tel. číslo</span>
                        </label>

                        <input id="phone_number" type="phone_number" class="@error('phone_number') is-invalid @enderror" name="phone_number"
                               value="{{ Auth::user()->phone_number }}" required autocomplete="phone_number" autofocus>

                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                    <input type="text" placeholder="" name="email" required>--}}
                    </div>

                    <div class="regist-row">
                        <label for="ulica_a_cd">
                            <span class='input_label'>Ulica a č.d.</span>
                        </label>
                        <input id="ulica_a_cd" type="text" class="@error('ulica_a_cd') is-invalid @enderror"
                               name="ulica_a_cd" value="{{ Auth::user()->ulica_a_cd }}" required autocomplete="ulica_a_cd"
                               autofocus>

                        @error('ulica_a_cd')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                        <input type="text" placeholder="" name="street" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="obec">
                            <span class='input_label'>Obec</span>
                        </label>
                        <input id="obec" type="text" class="@error('obec') is-invalid @enderror" name="obec"
                               value="{{ Auth::user()->obec }}" required autocomplete="obec" autofocus>

                        @error('obec')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        {{--                        <input type="text" placeholder="" name="city" required>--}}
                    </div>
                    <div class="regist-row">
                        <label for="psc">
                            <span class='input_label'>PSČ</span>
                        </label>
                        <input id="psc" type="text" class="@error('psc') is-invalid @enderror" name="psc"
                               value="{{ Auth::user()->psc }}" required autocomplete="psc" autofocus>

                        @error('psc')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </form>
            </div>
{{--        --}}
{{--            <form id="noRegister" method="POST" action="/doprava-adresa" style="display: none">--}}
{{--                @csrf--}}

{{--                    <input id="meno" type="text" class="@error('meno') is-invalid @enderror" name="meno"--}}
{{--                           value="{{ Auth::user()->meno }}" required autocomplete="meno" autofocus>--}}

{{--                    <input id="priezvisko" type="text" class="@error('priezvisko') is-invalid @enderror"--}}
{{--                           name="priezvisko" value="{{ Auth::user()->priezvisko }}" required autocomplete="priezvisko"--}}
{{--                           autofocus>--}}

{{--                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"--}}
{{--                           value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>--}}

{{--                    <input id="ulica_a_cd" type="text" class="@error('ulica_a_cd') is-invalid @enderror"--}}
{{--                           name="ulica_a_cd" value="{{ Auth::user()->ulica_a_cd }}" required autocomplete="ulica_a_cd"--}}
{{--                           autofocus>--}}


{{--                    <input id="obec" type="text" class="@error('obec') is-invalid @enderror" name="obec"--}}
{{--                           value="{{ Auth::user()->obec }}" required autocomplete="obec" autofocus>--}}

{{--                <input id="psc" type="text" class="@error('psc') is-invalid @enderror" name="psc"--}}
{{--                       value="{{ Auth::user()->psc }}" required autocomplete="psc" autofocus>--}}

{{--                <input id="phone_number" type="text" class="@error('psc') is-invalid @enderror" name="phone_number"--}}
{{--                       value="{{ Auth::user()->phone_number }}" required autocomplete="psc" autofocus>--}}

{{--            </form>--}}
        @endguest


        {{--@endguest--}}
        {{--        <form>--}}

        {{--            <div class="regist-row">--}}
        {{--                <label for="meno">--}}
        {{--                    <span class='input_label'>Meno</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="meno" required>--}}

        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="priezvisko">--}}
        {{--                    <span class='input_label'>Priezvisko</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="priezvisko" required>--}}
        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="email">--}}
        {{--                    <span class='input_label'>E-mail</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="email" required>--}}
        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="street">--}}
        {{--                    <span class='input_label'>Ulica a č.d.</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="street" required>--}}
        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="city">--}}
        {{--                    <span class='input_label'>Obec</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="city" required>--}}
        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="zip">--}}
        {{--                    <span class='input_label'>PSČ</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="zip" required>--}}
        {{--            </div>--}}
        {{--        </form>--}}


    <!-- <div class="login_content">

                <form>
                    <label for="meno">
                            <span class='input_label'>Meno</span>
                        </label>
                    <input type="text" placeholder="" name="meno" required>

                    <label for="priezvisko">
                            <span class='input_label'>Priezvisko</span>
                        </label>
                    <input type="text" placeholder="" name="priezvisko" required>

                    <label for="email">
                            <span class='input_label'>E-mail</span>
                        </label>
                    <input type="text" placeholder="" name="email" required>


                    <label for="street">
                            <span class='input_label'>Ulica a č.d.</span>
                        </label>
                    <input type="text" placeholder="" name="street" required>

                    <label for="city">
                            <span class='input_label'>Obec</span>
                        </label>
                    <input type="text" placeholder="" name="city" required>

                    <label for="zip">
                            <span class='input_label'>PSČ</span>
                        </label>
                    <input type="text" placeholder="" name="zip" required>

                </form>
            </div> -->

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
@guest
{{--    <a href="/platba" onclick="document.getElementById('noRegister').submit()">--}}


            <button type="button" class="cancelbtn" onclick="document.getElementById('noRegister').submit()"><span class='btn_text'>Prejsť na výber platby</span>
                <img src="\pics\chevron_right-24px.svg" alt="Pokračovať na dopravu">
            </button>
{{--    </a>--}}
            @else
{{--    <a href="/platba" onclick="document.getElementById('noRegister').submit()">--}}
                <button type="button" class="cancelbtn" onclick="document.getElementById('noRegister').submit()"><span class='btn_text'>Prejsť na výber platby</span>
                    <img src="\pics\chevron_right-24px.svg" alt="Pokračovať na dopravu">
                </button>
{{--    </a>--}}
            @endguest
        </div>





        @include('inc.recommended')

    </div>
@endsection
