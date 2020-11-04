
<div class="product_settings">
    <form method="get" action="{{$url}}" id="filterForm">
        @csrf
{{--    {{$makers}}--}}
{{--    {{$sizes}}--}}
        <div class="child_special">
        <div class="relative_wrapper">
{{--            @csrf--}}
            <div class="product_filter" onclick="elementClick('filter')">
                Filtrovať produkty
                <img src="\pics\filter_list-24px.svg" alt="filtrovanie">
            </div>

            <div id='filter'>
                <div class="filter-form">
{{-- ORIGINAL          <form onclick="makeVisible('filter')" action= {{'/products'}} method='post'>--}}

                        <h2>Výrobca</h2>
                        <input name="url" value={{$url}} type='hidden'>
                        @foreach($makers as $maker)
                        <div class="form-row">
                            <input type="checkbox" name='vyrobca[]' value={{$maker->name}}>
                            <label>
                                {{$maker->name}}
                            </label>
                        </div>
                        @endforeach

                        <h2>Veľkosť</h2>
                        @foreach($sizes as $size)
                        <div class="form-row">
                            <input type="checkbox" name='velkost[]' value={{$size->name}}>
                            <label>
                                {{$size->name}}
                            </label>
                        </div>
                        @endforeach




{{--                    </form>--}}

                </div>
                <button type="button" onclick="elementClick('filter')">Skryť</button>
            </div>

        </div>
        <div class="relative_wrapper">
            <div class="product_order">
                Zoradiť podľa
{{--  original              <form action= {{'/products'}} method='post'>--}}
{{--                    @csrf--}}
{{--                    {{$url}}--}}
                    <input name="url" value={{$url}} type='hidden'>
{{--                   <input name="ordering" value={{$ordering}} type='hidden'>--}}

                    <select name='radenie'>
                        <option name="radenie" value="asc">Od najlacnejších</option>
                        <option name="radenie" value="desc">Od najdrahších</option>
                        <option name="radenie" value="old">Od najstarších</option>
                        <option name="radenie" value="new">Od najnovších</option>
                    </select>
{{--                </form>--}}
            </div>
        </div>
        </div>

        <div class="filter-buttons">
            <input type='submit' id='posit' value="Filtrovať">
            <a href="/products">
                <button id="negat" onclick="document.getElementById('filterForm').reset();" > Zrušiť </button>
{{--                --}}{{--document.getElementById('from').value = null; return false;"}}--}}
            </a>
        </div>

    </form>
    </div>

