@extends('layouts.app')

@section('content')

    @include('inc.bannerProd')

        <div class="main-content">
            <!-- tento nadpis sa bude meniť podľa zvolenej stránky, či už to bude Cross Country ... alebo akákoľvek iná kategória -->
            <h1>Trail</h1>

            @include('inc.filtering')

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

                <button>
                    Načítať ďaľšie
                </button>
            </div>
        </div>

        @endsection
