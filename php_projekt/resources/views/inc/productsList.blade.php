<div class="news">

        @foreach ($products as $row)
{{--        {{ $row }}--}}

{{--        {{$row}}--}}
        <div class="product_item">
{{--            {{$row->maincat->route_name}}/{{$row->subcat->route_name}}/--}}
            <a href='/products/{{$row->id}}'>
                <div class="name">
                    {{$row->name}}
                </div>
                <div class="preview_image">
                <img srcset="{{$row->image->link_prev_200w}} 200w,
                    {{$row->image->link_prev_300w}} 300w" sizes="(max-width: 575px) 200px,
                (min-width: 576px) 300px" src="{{$row->image->link_prev_300w}}" alt="{{$row->name}}">
                </div>
                <div class='price'>
                    {{$row->cena}} €
                </div>
            </a>
        </div>
        @endforeach

</div>
<div class='news'>
        {{$products->appends(['radenie' => $radenie,'vyrobca'=>$vyrobca,'velkost'=>$velkost])->links()}}

{{--        <button>--}}
{{--                Načítať ďaľšie--}}
{{--        </button>--}}
</div>

