@extends('layouts.app')

@section('content')
    @include('inc.bannerFind')
    <div class="main-content">
        <h1>Registrácia</h1>

        {{--    <form method="POST" action="{{ route('register') }}">--}}
        {{--        @csrf--}}

        {{--        <div class="form-group row">--}}
        {{--            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

        {{--            <div class="col-md-6">--}}
        {{--                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

        {{--                @error('name')--}}
        {{--                <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                @enderror--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div class="form-group row">--}}
        {{--            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

        {{--            <div class="col-md-6">--}}
        {{--                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

        {{--                @error('email')--}}
        {{--                <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                @enderror--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div class="form-group row">--}}
        {{--            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

        {{--            <div class="col-md-6">--}}
        {{--                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

        {{--                @error('password')--}}
        {{--                <span class="invalid-feedback" role="alert">--}}
        {{--                                        <strong>{{ $message }}</strong>--}}
        {{--                                    </span>--}}
        {{--                @enderror--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div class="form-group row">--}}
        {{--            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

        {{--            <div class="col-md-6">--}}
        {{--                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <div class="form-group row mb-0">--}}
        {{--            <div class="col-md-6 offset-md-4">--}}
        {{--                <button type="submit" class="btn btn-primary">--}}
        {{--                    {{ __('Register') }}--}}
        {{--                </button>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </form>--}}
        {{--///////////////////////////////////////////////////////////////////////////////////////////--}}
        <div class="register_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="regist-row">
                    <label for="meno">
                        <span class='input_label'>Meno</span>
                    </label>

                    <input id="meno" type="text" class="@error('meno') is-invalid @enderror" name="meno" value="{{ old('meno') }}" required autocomplete="meno" autofocus>

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
                    <input id="priezvisko" type="text" class="@error('priezvisko') is-invalid @enderror" name="priezvisko" value="{{ old('priezvisko') }}" required autocomplete="priezvisko" autofocus>

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

                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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

                    <input id="phone_number" type="phone_number" class="@error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    {{--                    <input type="text" placeholder="" name="email" required>--}}
                </div>


                <div class="regist-row">
                    <label for="password">
                        <span class='input_label'>Heslo</span>
                    </label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    {{--                        <input type="password" placeholder="" name="pswd" required>--}}
                </div>

                <div class="regist-row">
                    <label for="password-confirm">
                        <span class='input_label'>Heslo</span>
                    </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="regist-row">
                    <label for="ulica_a_cd">
                        <span class='input_label'>Ulica a č.d.</span>
                    </label>
                    <input id="ulica_a_cd" type="text" class="@error('ulica_a_cd') is-invalid @enderror" name="ulica_a_cd" value="{{ old('ulica_a_cd') }}" required autocomplete="ulica_a_cd" autofocus>

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
                    <input id="obec" type="text" class="@error('obec') is-invalid @enderror" name="obec" value="{{ old('obec') }}" required autocomplete="obec" autofocus>

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
                    <input id="psc" type="text" class="@error('psc') is-invalid @enderror" name="psc" value="{{ old('psc') }}" required autocomplete="psc" autofocus>

                    @error('psc')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="regist-row">
                    <div class="regist_button">
                        <input type="submit" value="Registrovať sa">
                    </div>
                </div>
            </form>
        </div>
@include('inc.recommended');
@endsection
        {{--    <div class="register_content">--}}
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
        {{--                <label for="email">--}}
        {{--                    <span class='input_label'>E-mail</span>--}}
        {{--                </label>--}}
        {{--                <input type="text" placeholder="" name="email" required>--}}
        {{--            </div>--}}
        {{--            <div class="regist-row">--}}
        {{--                <label for="pswd">--}}
        {{--                    <span class='input_label'>Heslo</span>--}}
        {{--                </label>--}}
        {{--                <input type="password" placeholder="" name="pswd" required>--}}
        {{--            </div>--}}

        {{--            <div class="regist-row">--}}
        {{--                <label for="pswd">--}}
        {{--                    <span class='input_label'>Heslo</span>--}}
        {{--                </label>--}}
        {{--                <input type="password" placeholder="" name="pswd" required>--}}
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
        {{--            <div class="regist-row">--}}
        {{--                <div class="regist_button">--}}
        {{--                    <input type="submit" value="Registrovať sa">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </form>--}}
        {{--    </div>--}}


{{--        <h3>--}}
{{--            Odporučané--}}
{{--        </h3>--}}


{{--        <div class="news">--}}

{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot--}}
{{--                                            Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                                (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot--}}
{{--                                                Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                                \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                                    (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot--}}
{{--                                                    Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                                    \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                                        (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot--}}
{{--                                                        Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png"--}}
{{--                         alt="Pivot--}}
{{--                                                            Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="product_item">--}}
{{--                <a href="detail.html">--}}
{{--                    <div class="name">--}}
{{--                        Pivot Firebird 29 Team XX1 AXS--}}
{{--                    </div>--}}
{{--                    <img srcset="\pics\firebird-29-200w.png 200w,--}}
{{--                                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,--}}
{{--                                                                (min-width: 576px) 300px"--}}
{{--                         src="\pics\firebird-29-300w.png" alt="Pivot--}}
{{--                                                                Firebird 29 Team XX1 AXS">--}}

{{--                    <div class='price'> 12,499.00 €</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    {{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="meno">--}}
{{--                                <span class='input_label'>Meno</span>--}}
{{--                            </label>--}}

{{--                            <input id="meno" type="text" class="@error('meno') is-invalid @enderror" name="meno" value="{{ old('meno') }}" required autocomplete="meno" autofocus>--}}

{{--                            @error('meno')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}

{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="priezvisko">--}}
{{--                                <span class='input_label'>Priezvisko</span>--}}
{{--                            </label>--}}
{{--                            <input id="priezvisko" type="text" class="@error('priezvisko') is-invalid @enderror" name="priezvisko" value="{{ old('priezvisko') }}" required autocomplete="priezvisko" autofocus>--}}

{{--                            @error('priezvisko')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}

{{--                            --}}{{--                        <input type="text" placeholder="" name="priezvisko" required>--}}
{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="email">--}}
{{--                                <span class='input_label'>E-mail</span>--}}
{{--                            </label>--}}

{{--                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                            @error('email')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            <input type="text" placeholder="" name="email" required>--}}
{{--                        </div>--}}

{{--                        <div class="regist-row">--}}
{{--                            <label for="phone_number">--}}
{{--                                <span class='input_label'>Tel. číslo</span>--}}
{{--                            </label>--}}

{{--                            <input id="phone_number" type="text" class="@error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>--}}

{{--                            @error('phone_number')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            --}}{{--                            <input type="text" placeholder="" name="email" required>--}}
{{--                        </div>--}}


{{--                        <div class="regist-row">--}}
{{--                            <label for="password">--}}
{{--                                <span class='input_label'>Heslo</span>--}}
{{--                            </label>--}}
{{--                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            --}}{{--                        <input type="password" placeholder="" name="pswd" required>--}}
{{--                        </div>--}}

{{--                        <div class="regist-row">--}}
{{--                            <label for="password-confirm">--}}
{{--                                <span class='input_label'>Heslo</span>--}}
{{--                            </label>--}}
{{--                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="ulica_a_cd">--}}
{{--                                <span class='input_label'>Ulica a č.d.</span>--}}
{{--                            </label>--}}
{{--                            <input id="ulica_a_cd" type="text" class="@error('ulica_a_cd') is-invalid @enderror" name="ulica_a_cd" value="{{ old('ulica_a_cd') }}" required autocomplete="ulica_a_cd" autofocus>--}}

{{--                            @error('ulica_a_cd')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            --}}{{--                        <input type="text" placeholder="" name="street" required>--}}
{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="obec">--}}
{{--                                <span class='input_label'>Obec</span>--}}
{{--                            </label>--}}
{{--                            <input id="obec" type="text" class="@error('obec') is-invalid @enderror" name="obec" value="{{ old('obec') }}" required autocomplete="obec" autofocus>--}}

{{--                            @error('obec')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                            --}}{{--                        <input type="text" placeholder="" name="city" required>--}}
{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <label for="psc">--}}
{{--                                <span class='input_label'>PSČ</span>--}}
{{--                            </label>--}}
{{--                            <input id="psc" type="text" class="@error('psc') is-invalid @enderror" name="psc" value="{{ old('psc') }}" required autocomplete="psc" autofocus>--}}

{{--                            @error('psc')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="regist-row">--}}
{{--                            <div class="regist_button">--}}
{{--                                <input type="submit" value="Registrovať sa">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

