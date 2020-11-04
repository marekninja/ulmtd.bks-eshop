@extends('layouts.app')

@section('content')

        <!-- VZOROVE SIZES PLNENIE, TREBA NEJAKY MATERIAL DESIGN
            <a href="/login ">
            <img srcset="elephant_baby_1-120.jpg 120w, elephant_baby_1-400.jpg 400w " sizes="(max-width: 480px) 120px, 400px "
                src="elephant_baby_1-400.jpg " alt="search ">
        </a> -->


        <div class="banners-flex">
            <div class="banner ">
                <!-- <a href='/products'> -->

                <img srcset="\pics\senFull-575w.png 575w, \pics\senFull-767w.png 767w, \pics\senFull-991w.png 991w " sizes="(max-width: 575px) 574px, (max-width: 767px) 766px, (max-width: 991px) 990px, (min-width: 1200px) 990px " src="\pics\senFull-791w.png
                " alt="Najdi svoj vysneny bajk tu! ">

                <!-- </a> -->
                <a href='/products' class='button'>
                    <div class="vertical">
                        Preskúmať
                    </div>
                </a>
                <!-- <button></button> -->

            </div>


            <div class="banner ">
                <!-- novy bicykel v ponuke-->

                <!-- <a href="/detail "> -->
                <div class="banner_text ">
                    Nový Santa Cruz Megatower 29" <br> už u nás!
                </div>
                <img srcset="\pics\scb_my20_hero-07-575w.jpg 575w,
                                \pics\scb_my20_hero-07-767w.jpg 767w,
                                \pics\scb_my20_hero-07-991w.jpg 991w" sizes="(max-width: 575px) 574px,
                                (max-width: 767px) 766px,
                                (max-width: 991px) 990px,
                                (min-width: 1200px) 990px" src="\pics\scb_my20_hero-07-791w.jpg" alt="Santa Cruz Hightower 29">
                <!-- </a> -->
                <a href='/detail' class='button'>
                    <div class="vertical">
                        Preskúmať
                    </div>
                </a>
                <!-- <button>Preskúmať</button> -->
            </div>
        </div>
        <div class="main-content">
            <h1>Novinky</h1>

            <div class="news">

                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                    \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                        (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                        Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                            Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                    (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                    Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                    \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                        (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                        Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                            Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>

            </div>
            <h1>Odporúčané</h1>

            <div class="news">

                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                    (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                    Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                    \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                        (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                        Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                            Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                                (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                                Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>
                <div class="product_item">
                    <a href="/detail">
                        <div class="name">
                            Pivot Firebird 29 Team XX1 AXS
                        </div>
                        <img srcset="\pics\firebird-29-200w.png 200w,
                                                                \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                                    (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                                    Firebird 29 Team XX1 AXS">

                        <div class='price'> 12,499.00 €</div>
                    </a>
                </div>

            </div>
        </div>

        @endsection
