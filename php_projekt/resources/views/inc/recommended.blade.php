<h1>Odporúčané</h1>

    <div class="news">

        @foreach ($recommended as $row)
            {{-- {{$row}} --}}
        <div class="product_item">
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
        {{-- <div class="product_item">
            <a href='/detail'>
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
            <a href='/detail'>
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
            <a href='/detail'>
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
            <a href='/detail'>
                <div class="name">
                    Pivot Firebird 29 Team XX1 AXS
                </div>
                <img srcset="\pics\firebird-29-200w.png 200w,
                                                        \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                            (min-width: 576px) 300px" src="\pics\firebird-29-300w.png"
                    alt="Pivot
                                                            Firebird 29 Team XX1 AXS">

                <div class='price'> 12,499.00 €</div>
            </a>
        </div>
        <div class="product_item">
            <a href='/detail'>
                <div class="name">
                    Pivot Firebird 29 Team XX1 AXS
                </div>
                <img srcset="\pics\firebird-29-200w.png 200w,
                                                            \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                                (min-width: 576px) 300px"
                    src="\pics\firebird-29-300w.png" alt="Pivot
                                                                Firebird 29 Team XX1 AXS">

                <div class='price'> 12,499.00 €</div>
            </a>
        </div>
        <div class="product_item">
            <a href='/detail'>
                <div class="name">
                    Pivot Firebird 29 Team XX1 AXS
                </div>
                <img srcset="\pics\firebird-29-200w.png 200w,
                                                                \pics\firebird-29-300w.png 300w" sizes="(max-width: 575px) 200px,
                                                                    (min-width: 576px) 300px"
                    src="\pics\firebird-29-300w.png" alt="Pivot
                                                                    Firebird 29 Team XX1 AXS">

                <div class='price'> 12,499.00 €</div>
            </a>
        </div> --}}

    </div>
