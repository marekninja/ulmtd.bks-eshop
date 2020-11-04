<div id='overlay' class="overlay">
    <div class="login">
        <div class="login_header">
            <a onclick="hideLogin()">
                <img src="\pics\close-24px.svg" alt="zavrieť prihlasovanie">
            </a>



        @guest
            <h1>
                Prihlásenie
            </h1>
        </div>
            <div class="login_content">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

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

                    </div>

                    <div class="regist-row">
                        <label for="password">
                            <span class='input_label'>Heslo</span>
                        </label>


                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>
                    <div class="regist-row">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Zabudnuté heslo?') }}
                            </a>
                        @endif
                    </div>

                    <div class="regist-row">
                        <div class="regist-check">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Zapamätaj si ma') }}
                            </label>
                        </div>


                    </div>

                    <div class="login_button">
                        <div class="flex_child">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="flex_child">
                            <a class='registerBut' href="/register">Registrovať</a>
                            <div class="secondary_button">

                            </div>
                        </div>


                    </div>
                </form>
            </div>

        @else

            <h1>
                Odhlásenie
            </h1>
    </div>
            <div class="login_content">
                <div class="logout-row">
                    <span class="meno">{{ Auth::user()->meno }} </span>
                    <span class="priezvisko">{{ Auth::user()->priezvisko }} </span>
                </div>

                <div class="logout-row">
                    <label>{{ Auth::user()->email }} </label>
                </div>
                <div class="logout-row">
                    <a class='registerBut' href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Odhlásiť sa') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>


            </div>
        @endguest


    </div>
</div>
{{--            <form>--}}
{{--                <label for="email">--}}
{{--                            <span class='input_label'>E-mail</span>--}}
{{--                        </label>--}}
{{--                <input type="text" placeholder="" name="email">--}}

{{--                <label for="psw">--}}
{{--                            <span class='input_label'>Heslo</span>--}}
{{--                        </label>--}}
{{--                <input type="password" placeholder="" name="psw">--}}

{{--                <div class="login_button">--}}
{{--                    <div class="flex_child">--}}
{{--                        <input type="submit" value="Prihlásiť sa">--}}
{{--                    </div>--}}
{{--                    <div class="flex_child">--}}
{{--                        <div class="secondary_button">--}}
{{--                            <a class='registerBut' href="/register">Registrovať</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </form>--}}

{{--            <label>--}}
{{--                        <span class="input_label"> <input type="checkbox" checked="checked" name="remember"> Pamätať--}}
{{--                            prihlásenie </span>--}}
{{--                    </label>--}}
{{--            <label>--}}
{{--                        <span class="input_label">Zabudnuté heslo?</span>--}}
{{--                    </label>--}}


{{--</div>--}}
