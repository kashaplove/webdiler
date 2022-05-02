@foreach($request_goods as $concrete)
    <div class="catalogGoods__item">
        <a href="" class="">
        </a>
        <div class="catalogGoods__labels catalogGoods__labels--grid catalogGoodsLabels"><!----> <p
                class="el-tooltip catalogGoodsLabels__item --cashback zero"
                aria-describedby="el-tooltip-6106" tabindex="0"><img
                    src="/images/assets/catalog/W-line.svg"></p>
            <p class="el-tooltip catalogGoodsLabels__item --new" aria-describedby="el-tooltip-4649"
               tabindex="0">
                New
            </p>
            <p class="el-tooltip catalogGoodsLabels__item --percent" aria-describedby="el-tooltip-7315"
               tabindex="0"><img src="/images/assets/catalog/best-price.svg"></p>
            <div class="favorites__actions favoritesActions"><!---->
                <div class="favoritesActions__item favoritesActions__item--star"><span class="img-svg"><img
                            src="/images/favorites.svg" class="svg-icon"></span></div>
            </div>
        </div>
        <div class="catalogGoods__thumb"><img src="/images/{{ $concrete->img }}" alt="" title="" id="catalogGoods__img{{ $concrete->id }}">
        </div>
        <p class="catalogGoods__title{{ $concrete->id }} --visible" id="catalogGoods__title{{$concrete->id}}">{{ $concrete->name }}</p>
        <div class="catalogGoods__info-wrapper"><p class="catalogGoods__title">{{ $concrete->name }}</p>
            <!---->
            <div class="catalogGoods__plant"><a href="https://lzjbi.ru/" target="_blank">ЛЗЖБИ</a></div>
            <div class="catalogGoods__info catalogGoodsInfo">
                <div class="catalogGoodsInfo__item catalogGoodsInfo__item--plant --visible"><p
                        class="catalogGoodsInfo__title">
                        Завод
                    </p>
                    <p class="catalogGoodsInfo__valueNew"><a href="https://lzjbi.ru/" target="_blank"><span>ЛЗЖБИ</span></a>
                    </p></div>
                <div class="catalogGoodsInfo__item --visible"><p class="catalogGoodsInfo__title">Вес
                        (кг.)</p>
                    <p class="catalogGoodsInfo__valueNew"><span>{{ $concrete->weight }}</span></p></div>
                <div class="catalogGoodsInfo__item --visible"><p class="catalogGoodsInfo__title">Срок
                        изготовления</p>
                    <p class="catalogGoodsInfo__valueNew"><span>1 - 2 рабочих дня</span></p></div>
            </div> <!----></div>
        <div class="catalogGoods__actions">
            <div class="catalogGoods__price-wrapper"><p class="catalogGoods__current-price">{{ $concrete->price }} ₽</p></div>
            <div class="catalogGoods__labels catalogGoods__labels--list catalogGoodsLabels"><!----> <p
                    class="el-tooltip catalogGoodsLabels__item --cashback zero"
                    aria-describedby="el-tooltip-4998" tabindex="0"><img
                        src="/images/assets/catalog/W-line.svg"></p>
                <p class="el-tooltip catalogGoodsLabels__item --new" aria-describedby="el-tooltip-762"
                   tabindex="0">
                    New
                </p>
                <p class="el-tooltip catalogGoodsLabels__item --percent" aria-describedby="el-tooltip-4703"
                   tabindex="0"><img src="/images/assets/catalog/best-price.svg"></p>
                <div class="favorites__actions favoritesActions"><!---->
                    <div class="favoritesActions__item favoritesActions__item--star"><span
                            class="img-svg"><img src="/images/favorites.svg" class="svg-icon"></span></div>
                </div>
            </div>
            @if(in_array($concrete->id,$inCarts))
                <a href="{{ route('cart.index') }}" class="catalogGoods__cart catalogGoods__cart--link"><span>В корзине</span>
                    <img src="/images/assets/catalog/in-cart.svg" alt="" title="" class="icon-in-cart">
                    <img src="/images/assets/sliders/arrow-right.svg" alt="" title="" class="icon-arrow">
                </a>

            @else
                <button onclick="hello({{$concrete->id}})" id="addToCart{{$concrete->id}}" class="catalogGoods__cart"><img src="/images/assets/catalog/cart.svg" alt="" title=""> <span>В корзину</span></button>
            @endif
        </div>
    </div>
@endforeach
