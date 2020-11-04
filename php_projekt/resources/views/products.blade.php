@extends('layouts.app')

@section('content')

    @include('inc.bannerProd')

<div class="main-content">
    <!-- tento nadpis sa bude meniť podľa zvolenej stránky, či už to bude Cross Country ... alebo akákoľvek iná kategória -->
    <h1>{{$title}}</h1>

    @include('inc.filtering')

    @include('inc.productsList',['radenie' => $radenie,'vyrobca'=>$vyrobca,'velkost'=>$velkost])

</div>
@endsection
