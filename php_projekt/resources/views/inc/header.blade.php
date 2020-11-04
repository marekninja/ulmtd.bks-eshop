<header>
    <!-- tuto sú ikonky -->
    <!-- search, locale, user, cart -->
    <!-- nadpis neni tuto <h1>Unlimited.Bikes</h1> -->
    <!-- VZOROVE SIZES PLNENIE, TREBA NEJAKY MATERIAL DESIGN
        <a href="login.html">
        <img srcset="elephant_baby_1-120.jpg 120w,
                                  elephant_baby_1-400.jpg  400w" sizes="(max-width: 480px) 120px, 400px"
            src="elephant_baby_1-400.jpg" alt="search">
    </a> -->
    <!-- menu vysuvne zboku-->

    <div class="logo">
        <a class="logo" href="/">
            <img src="\pics\capture.svg" alt="Unlimited Bikes logo">
            <img class="logo_text" src="\pics\logoTextv3.svg" alt="Unlimited Bikes text logo">
        </a>
    </div>


    <div class="icons">
        <a onclick="elementClick('menu')">
            <img src="\pics\keyboard_arrow_down-24px.svg" alt="menu ">
        </a>
        <!-- locale -->
        <!-- <a href="login.html ">
            <img src="\pics\ \pics\(.*) " alt="locale ">
        </a> -->
        <!-- user -->
        <a onclick="login() ">


            <img src="\pics\account_circle-24px.svg" alt="user ">
            <!-- </button> -->
        </a>
        <!-- cart -->
        <a href='/kosik'>
            @if(empty(session()->get('cart')))
            <img src="\pics\shopping_cart-24px.svg" alt="cart ">
                @else
                <img src="\pics\shopping_cart_white-24px.svg" alt="cart ">
            @endif
        </a>
        <!-- search -->
        <!-- <a onclick="search() ">
            <img src="\pics\search-24px " alt="search ">
        </a> -->
        <!-- <div class="logo ">
        <img src="\pics\capture.svg " alt="Unlimited Bikes logo ">
    </div> -->
    </div>

</header>
