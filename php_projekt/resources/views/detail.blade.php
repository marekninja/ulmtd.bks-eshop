@extends('layouts.app')

@section('content')
{{--        {{ var_dump($product) }}--}}
{{--        {{$product = $product[0]}}--}}
        <div class="main-content">
            <div class="banner">
                <img srcset="{{$product->image->link_prev_575w}} 575w,
                {{$product->image->link_prev_767w}} 767w,
                {{$product->image->link_prev_991w}} 991w,
                {{$product->image->link_prev_1300w}} 1300w" sizes="(max-width: 575px) 574px,
                        (max-width: 767px) 766px,
                        (max-width: 991px) 990px,
                        (min-width: 1200px) 1300px" src="{{$product->image->link_full}}" alt="{{$product->name}}">
            </div>
            <div class="gallery">
                <a href="{{$product->image->link_full}}">
                    <img srcset="{{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_300w}} 575w" sizes="(max-width: 575px) 574px,
                                (max-width: 767px) 766px,
                                (max-width: 991px) 990px,
                                (min-width: 1200px) 990px" src="{{$product->image->link_prev_300w}}" alt="{{$product->name}}">
                </a>
                <a href="{{$product->image->link_full}}">
                    <img srcset="{{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_300w}} 575w" sizes="(max-width: 575px) 574px,
                                (max-width: 767px) 766px,
                                (max-width: 991px) 990px,
                                (min-width: 1200px) 990px" src="{{$product->image->link_prev_300w}}" alt="{{$product->name}}">
                </a>
                <a href="{{$product->image->link_full}}">
                    <img srcset="{{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_300w}} 575w" sizes="(max-width: 575px) 574px,
                                (max-width: 767px) 766px,
                                (max-width: 991px) 990px,
                                (min-width: 1200px) 990px" src="{{$product->image->link_prev_300w}}" alt="{{$product->name}}">
                </a>
                <a href="{{$product->image->link_full}}">
                    <img srcset="{{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_200w}} 575w,
                                {{$product->image->link_prev_300w}} 575w" sizes="(max-width: 575px) 574px,
                                (max-width: 767px) 766px,
                                (max-width: 991px) 990px,
                                (min-width: 1200px) 990px" src="{{$product->image->link_prev_300w}}" alt="{{$product->name}}">
                </a>

            </div>

            <h1>{{$product->name}}</h1>

            @include('inc.addToCart')

            <div class="product_desc">
                <p>{{$product->popis}}</p>

                <table>
                    <tr>
                        <td>Rám</td>
                        <td>{{$product->ram}}</td>
                    </tr>
                    <tr>
                        <td>Vidlica</td>
                        <td>{{$product->Vidlica}}</td>
                    </tr>
                    <tr>
                        <td>Tlmič</td>
                        <td>{{$product->tlmic}}</td>
                    </tr>
                    <tr>
                        <td>Kolesá</td>
                        <td>{{$product->kolesa}}</td>
                    </tr>
                    <tr>
                        <td>Predný plášť</td>
                        <td>{{$product->predny_plast}}</td>
                    </tr>
                    <tr>
                        <td>Zadný plášť</td>
                        <td>{{$product->zadny_plast}}</td>
                    </tr>
                    <tr>
                        <td>Brzdy</td>
                        <td>{{$product->brzdy}}</td>
                    </tr>
                    <tr>
                        <td>Kľuky</td>
                        <td>{{$product->kluky}}</td>
                    </tr>
                    <tr>
                        <td>Stredové zloženie</td>
                        <td>{{$product->stredove_zlozenie}}</td>
                    </tr>
                    <tr>
                        <td>Radenie</td>
                        <td>{{$product->radenie}}</td>
                    </tr>
                    <tr>
                        <td>Prehadzovač</td>
                        <td>{{$product->prehadzovac}}</td>
                    </tr>
                    <tr>
                        <td>Kazeta</td>
                        <td>{{$product->kazeta}}</td>
                    </tr>
                    <tr>
                        <td>Reťaz</td>
                        <td>{{$product->retaz}}</td>
                    </tr>
                    <tr>
                        <td>Napinák reťaze</td>
                        <td>{{$product->napinak_retaze}}</td>
                    </tr>
                    <tr>
                        <td>Sedlovka</td>
                        <td>{{$product->sedlovka}}</td>
                    </tr>
                    <tr>
                        <td>Sedlo</td>
                        <td>{{$product->sedlo}}</td>
                    </tr>
                    <tr>
                        <td>Predstavec</td>
                        <td>{{$product->predstavec}}</td>
                    </tr>
                    <tr>
                        <td>Riadidlá</td>
                        <td>{{$product->riadidla}}</td>
                    </tr>
                    <tr>
                        <td>Gripy</td>
                        <td>{{$product->gripy}}</td>
                    </tr>
                    <tr>
                        <td>Hlavové zloženie</td>
                        <td>{{$product->hlavove_zlozenie}}</td>
                    </tr>
                    <tr>
                        <td>Pedále</td>
                        <td>{{$product->pedale}}</td>
                    </tr>
                    <tr>
                        <td>Váha</td>
                        <td>{{$product->vaha}}</td>
                    </tr>

                    <tr>
                        <td>Farba</td>
                        <td>{{$product->farba}}
                        </td>
                    </tr>
                </table>

            </div>
             @include('inc.recommended',$recommended)

        </div>
@endsection
