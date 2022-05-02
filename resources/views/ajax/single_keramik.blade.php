
@foreach($request_goods as $keramik)
    <div class="catalogGoods__item">
        <a href="" class=""></a>
        <div class="catalogGoods__labels catalogGoods__labels--grid catalogGoodsLabels">
            <p class="el-tooltip catalogGoodsLabels__item --cashback"
               aria-describedby="el-tooltip-4108" tabindex="0"><span>+3.64</span>
                <img src="/images/assets/catalog/W-line.svg"></p> <!----> <!---->
            <!---->
            <div class="favorites__actions favoritesActions"><!---->
                <div class="favoritesActions__item favoritesActions__item--star">
                                                        <span class="img-svg"><img src="/images/favorites.svg"
                                                                                   class="svg-icon"></span></div>
            </div>
        </div>
        <div class="catalogGoods__thumb">
            <img src="/images/{{ $keramik->img }}" alt="" title="" id="catalogGoods__img{{ $keramik->id }}">
        </div>
        <p class="catalogGoods__title --visible" id="catalogGoods__title{{$keramik->id}}">{{ $keramik->name }}</p>
        <div class="catalogGoods__info-wrapper">
            <p class="catalogGoods__title">{{ $keramik->name }}</p> <!---->
            <div class="catalogGoods__plant">
                <a href="https://www.wienerberger.ru/" target="_blank">Wienerberger</a>
            </div>
            <div class="catalogGoods__info catalogGoodsInfo">
                <div
                    class="catalogGoodsInfo__item catalogGoodsInfo__item--plant --visible">
                    <p class="catalogGoodsInfo__title">
                        Завод
                    </p>
                    <p class="catalogGoodsInfo__valueNew"><a
                            href="https://www.wienerberger.ru/"
                            target="_blank"><span>Wienerberger</span></a></p></div>
                <div class="catalogGoodsInfo__item --visible"><p
                        class="catalogGoodsInfo__title">На поддоне</p>
                    <p class="catalogGoodsInfo__valueNew"><span>{{ $keramik->number_in_pallet }} шт.</span></p>
                </div>
                <div class="catalogGoodsInfo__item --visible"><p
                        class="catalogGoodsInfo__title">Срок изготовления</p>
                    <p class="catalogGoodsInfo__valueNew">
                        <span>уточнять у менеджера</span></p></div>
            </div> <!----></div>
        <div class="catalogGoods__actions">
            <div class="catalogGoods__price-wrapper">
                <p class="catalogGoods__current-price">{{ $keramik->price }} ₽</p></div>
            <div class="catalogGoods__labels catalogGoods__labels--list catalogGoodsLabels">
                <p class="el-tooltip catalogGoodsLabels__item --cashback"
                   aria-describedby="el-tooltip-9517" tabindex="0">
                    <span>+3.64</span> <img src="/images/assets/catalog/W-line.svg">
                </p> <!----> <!----> <!---->
                <div class="favorites__actions favoritesActions"><!---->
                    <div
                        class="favoritesActions__item favoritesActions__item--star">
                                                            <span class="img-svg"><img src="/images/favorites.svg" class="svg-icon">
                                                            </span></div>
                </div>
            </div>
            @if(in_array($keramik->id,$inCarts))
                <a href="{{ route('cart.index') }}" class="catalogGoods__cart catalogGoods__cart--link"><span>В корзине</span>
                    <img src="/images/assets/catalog/in-cart.svg" alt="" title="" class="icon-in-cart">
                    <img src="/images/assets/sliders/arrow-right.svg" alt="" title="" class="icon-arrow">
                </a>

            @else
                <button onclick="hello({{$keramik->id}})" id="addToCart{{$keramik->id}}" class="catalogGoods__cart"><img src="/images/assets/catalog/cart.svg" alt="" title=""> <span>В корзину</span></button>
            @endif


        </div>
    </div>
@endforeach
