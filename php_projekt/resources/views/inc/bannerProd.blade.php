<div class="banner ">
    <!-- novy bicykel v ponuke-->

    <!-- <a href='/detail'> -->
    <div class="banner_text ">
        {{--            Nový Santa Cruz Megatower 29" <br> už u nás!--}}
        Nový {{$bannerProd->maker->name}} {{$bannerProd->name}} <br> už u nás!
    </div>
    {{--        <img srcset="{{\$bannerProd->image->link_prev_575w }} 575w,--}}
    {{--                            {{\$bannerProd->image->link_prev_767w }} 767w,--}}
    {{--                            {{\$bannerProd->image->link_prev_991w }} 991w" sizes="(max-width: 575px) 574px,--}}
    {{--                            (max-width: 767px) 766px,--}}
    {{--                            (max-width: 991px) 990px,--}}
    {{--                            (min-width: 1200px) 990px" src="{{\$bannerProd->image->link_prev_w }}" alt="Santa Cruz Hightower 29">--}}

    <img srcset="{{$bannerProd->image->link_prev_575w}} 575w,
                {{$bannerProd->image->link_prev_767w}} 767w,
                {{$bannerProd->image->link_prev_991w}} 991w,
                {{$bannerProd->image->link_prev_1300w}} 1300w" sizes="(max-width: 575px) 574px,
                        (max-width: 767px) 766px,
                        (max-width: 991px) 990px,
                        (min-width: 1200px) 1300px" src="{{$bannerProd->image->link_full}}" alt="{{$bannerProd->name}}">
    <!-- </a> -->
    <a href='/products/{{$bannerProd->id}}' class='button'>
        <div class="vertical">
            Preskúmať
        </div>
    </a>
    <!-- <button>Preskúmať</button> -->
</div>
