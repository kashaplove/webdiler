@foreach($cartGoods as $item)
    <div class="cartAccordionBody__item">
        <div class="cartAccordionBody__left">
            <div class="cart-good-check">
                <label class="label">
                    @if($item->pivot->is_checked == true)
                        <input onchange="changeChBox({{$item->pivot->id}})" onclick="cartSum()" id="chbox{{ $item->pivot->id }}" name="checkbox" type="checkbox" class="checkbox" checked>
                    @else
                        <input onchange="changeChBox({{$item->pivot->id}})" onclick="cartSum()" id="chbox{{ $item->pivot->id }}" name="checkbox" type="checkbox" class="checkbox">
                    @endif
                    <span class="cart-good-fake"></span>
                </label>
            </div>
            <div class="cartAccordionBody__thumb"><img
                    src="images/{{ $item->img }}" alt=""
                    title="" class="cartAccordion__img">
            </div>
            <div class="cartAccordionBody__info"><h5
                    class="cartAccordionBody__title"><a
                        href="/catalog/blocks_keramik/11" class=""
                        target="_blank">{{ $item->name }}</a></h5>
                <p class=""><span id="price-for-one{{ $item->pivot->id }}" class="price-single">{{ $item->price }}</span> ₽ за шт.</p></div>
        </div>
        <div class="cartAccordionBody__right">

            <div class="cartAccordionBody__count">
                <div class="productCalc__count productCalc__count--small product_quantity">
                    <span id="quantity_dec_button{{ $item->pivot->id }}" role="button" class="el-input-number__decrease">
                        <i onclick="initQuantity({{ $item->pivot->id }})" class="el-icon-minus"></i>
                    </span>
                    <span id="quantity_inc_button{{ $item->pivot->id }}" role="button" class="el-input-number__increase">
                        <i onclick="initQuantity({{ $item->pivot->id }})" class="el-icon-plus"></i>
                    </span>
                    <div class="el-input"><!---->
                        <input onclick="initQuantity({{ $item->pivot->id }})" data-ids="{{ $item->pivot->id }}" id="quantity_input{{ $item->pivot->id }}" type="text" autocomplete="off" class="el-input__inner" value="{{ $item->pivot->number_of_goods }}">
                        <!----><!----><!----><!---->
                    </div>
                </div>
            </div>

            <div class="cartAccordionBody__total">
                <p class="cartAccordionBody__price">
                    <span id="total-price{{ $item->pivot->id }}" class="total-price-for-one">{{ $item->pivot->number_of_goods * $item->price }}</span>
                    &nbsp;₽</p>
            </div>
            <div class="cartAccordionBody__actions">
                <input onclick="deleteItem({{ $item->pivot->id }})" id="delete{{ $item->pivot->id }}" type="submit" value="" class="input-cart-good-delete">
            </div>
        </div>
    </div>

@endforeach
