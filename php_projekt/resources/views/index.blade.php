@extends('layouts.app')


<!-- VZOROVE SIZES PLNENIE, TREBA NEJAKY MATERIAL DESIGN
            <a href='/login'>
            <img srcset="elephant_baby_1-120.jpg 120w, elephant_baby_1-400.jpg 400w " sizes="(max-width: 480px) 120px, 400px "
                src="elephant_baby_1-400.jpg " alt="search ">
        </a> -->



@section('content')
<div class="banners-flex">
    @include('inc.bannerFind')
    @include('inc.bannerProd')

</div>
<div class="main-content">
    @include('inc.news',$news)

    {{-- @foreach ($products as $row)
    <div class="product_item">
            <a href='/detail'>
                <div class="name">
                    {{$row['nazov']}}
                    {{$row['vyrobca_id']}}
                </div>
                <img srcset="\pics\firebird-29-200w.png 200w,
                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                (min-width: 576px) 300px" src="\pics\firebird-29-300w.png" alt="Pivot
                                                Firebird 29 Team XX1 AXS">

                <div class='price'>
                        {{$row['cena']}}
                </div>
            </a>
        </div>
    @endforeach --}}
    @include('inc.recommended',$recommended)
</div>

@endsection
