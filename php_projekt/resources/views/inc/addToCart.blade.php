<div class="product_choice">
{{--    <form method="GET" action="/add-to-cart/{{$product->id}}">--}}
    <form method="GET" action={{ url('add-to-cart/'.$product->id) }}>


    <select name="velkost">
        @if(count($product->sizes))
            @foreach($product->sizes as $size)
                <option name="velkost" value='{{$size->name}}'>{{$size->name}}</option>
{{--                <option value="M">M</option>--}}
{{--                <option value="L">L</option>--}}
{{--                <option value="XL">XL</option>--}}
            @endforeach
        @else
            <option value=''>Chýba</option>
        @endif
    </select>
    <div class="amount">
        <input name="pocet" type="number" value="1">
        <span class="amount_addon">ks</span>
    </div>
    <span class="price">{{$product->cena}}</span>
    <button type="submit">
        <img src="\pics\add_shopping_cart-24px.svg" alt="Pridať do košíka">
        <span class='btn_text'>Vložiť do košíka</span>
    </button>
    </form>
</div>
