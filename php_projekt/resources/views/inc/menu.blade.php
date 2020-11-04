<div class='menu' id='menu'>
        <h1>Menu</h1>
{{--    {{App\MainCat::with('subcat')->get()}}--}}
{{--    {{App\Subcat::all()}}--}}

        <ul>
            <a href='/products'>
                <li>Zobraziť všetky</li>
            </a>

            @foreach($maincat as $main)
{{--                {{$maincat}}--}}
{{--                {{$main->subcat}}--}}

                <a onclick="elementClick({{$main->route_name}})">
                    <li>{{$main->name}}</li>
                </a>
                <ul id={{$main->route_name}}>
                    <a href='/products/{{$main->route_name}}'>
                        <li>Zobraziť všetky</li>
                    </a>
                    @foreach($main->subcat as $sub)

                    <a href='/products/{{$main->route_name}}/{{$sub->route_name}}'>
                        <li>{{$sub->name}}</li>
                    </a>
                    @endforeach
{{--                    <a href='/products_mtn_trail'>--}}
{{--                        <li>Trail</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_mtn_all'>--}}
{{--                        <li>All Mountain</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_mtn_end'>--}}
{{--                        <li>Enduro</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_mtn_down'>--}}
{{--                        <li>Downhill</li>--}}
{{--                    </a>--}}
                </ul>
{{--                <a onclick="elementClick('submenuCestne')">--}}
{{--                    <li>Cestné</li>--}}
{{--                </a>--}}
{{--                <ul id='submenuCestne'>--}}
{{--                    <a href='/products_road'>--}}
{{--                        <li>Zobraziť všetky</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_road_end'>--}}
{{--                        <li>Endurance</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_road_triat'>--}}
{{--                        <li>Triathlon</li>--}}
{{--                    </a>--}}
{{--                    <a href='/products_road_race'>--}}
{{--                        <li>Race</li>--}}
{{--                    </a>--}}
{{--                </ul>--}}

            @endforeach
        </ul>
    </div>
