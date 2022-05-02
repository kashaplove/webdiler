@extends('layouts.sample')

@section('title', 'WEBDILER - Корзина')


@section('content')
    <div class="cart-page">
        <div class="page__wrapper">
            <section class="app-main">
                <div class="cart-page cart-page mobileCartStep1">
                    <div class="page__tabs pageTabs">
                        <div class="container">
                            <div class="pageTabs__wrapper pageTabs__wrapper--counted"><a href="/profile/cart/index"
                                                                                         aria-current="page"
                                                                                         class="pageTabs__item router-link-exact-active --active">Корзина</a><a
                                    href="/profile/cart/paid" class="pageTabs__item">Оплаченные товары</a><a
                                    href="/profile/cart/transferring" class="pageTabs__item">На отгрузке</a><a
                                    href="/profile/cart/transferred" class="pageTabs__item">Завершённые отгрузки</a></div>
                        </div>
                    </div>
                    <div>
                        <div class="cart --step1">
                            <div class="container">
                                <div class="cart__wrapper">
                                    <div class="cart__orders">
                                        <div class="cart__head"><h2>Корзина</h2>
                                        </div>
                                        <div class="cart__accordion cart__accordion--step1 cartAccordion">
                                            <div class="cartAccordion__item --opened">
                                                <div class="cartAccordion__body cartAccordionBody" style="">
                                                    @if(isset($goods[0]->name))
                                                        @include('includes.cart.single_good_cart')
                                                    @else
                                                        <h4 class="empty-cart">Корзина пустая</h4>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(isset($goods[0]->name))
                                        <div id="cartPayment" class="cart__payment cartPayment">
                                            <div innerwrapperselector=".cartPayment__wrapper-sticky" class="" style="">
                                                <div class="inner-wrapper-sticky" style="position: relative;">
                                                    <div class="cartPayment__wrapper-sticky">
                                                        <div tabindex="0" aria-label="Loading" class="vld-overlay is-active"
                                                             style="display: none;">
                                                            <div class="vld-background"
                                                                 style="backdrop-filter: blur(2px);"></div>
                                                            <div class="vld-icon">
                                                                <svg viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"
                                                                     width="64" height="64" stroke="#000">
                                                                    <g fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(1 1)" stroke-width="2">
                                                                            <circle stroke-opacity=".25" cx="18" cy="18"
                                                                                    r="18"></circle>
                                                                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                                                                <animateTransform attributeName="transform"
                                                                                                  type="rotate" from="0 18 18"
                                                                                                  to="360 18 18" dur="0.8s"
                                                                                                  repeatCount="indefinite"></animateTransform>
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="cartPayment__wrapper">
                                                            <div class="cartPayment__form cartPaymentForm"
                                                                 style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                                                <div style="display: none;"><p class="cartPaymentForm__title">
                                                                        Оплатить кэшбэком
                                                                    </p>
                                                                    <div class="form__item"><input type="text"
                                                                                                   placeholder="Доступно 0 W"
                                                                                                   class="form__input cartPaymentForm__input">
                                                                        <button class="cartPaymentForm__check --disabled"><span
                                                                                class="img-svg"><img
                                                                                    src="/images/catalogCheck.svg"
                                                                                    class="svg-icon"></span>
                                                                        </button>
                                                                    </div> <!----> <!----> <!----></div>
                                                            </div>
                                                            <div class="cartPayment__cashback cartPaymentCashback">
                                                                <div class="cartPaymentCashback__item">
                                                                    <div class="cartPaymentCashback__wrapper"><span
                                                                            class="cartPaymentCashback__title">Количество позиций</span>
                                                                        <span class="cartPaymentCashback__value">0</span></div>
                                                                    <!----></div>
                                                                <div class="cartPaymentCashback__item">
                                                                    <div class="cartPaymentCashback__wrapper"><span
                                                                            class="cartPaymentCashback__title">Общая стоимость</span>
                                                                        <span class="cartPaymentCashback__value">0 ₽</span>
                                                                    </div>
                                                                    <!----></div>
                                                            </div>
                                                            <div class="cartPayment__total cartPaymentTotal"><span
                                                                    class="cartPaymentTotal__title">К оплате</span> <span
                                                                    class="cartPaymentTotal__value"><span id="cart-total"></span> ₽</span></div>
                                                            <p class="cartPayment__info">
                                                                Цена указана с учетом поддона и упаковки (в том числе НДС).
                                                            </p> <!----> </div>
                                                        <div class="cartPayment__actions">
                                                            <button class="button button--medium button--green button--full" style="margin-bottom: 10px;">Выставить счет
                                                            </button>
                                                        </div>
                                                        <button onclick="addToEstimates()" class="button button--medium button--green button--full">Сохранить выбранные товары в смету
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div> <!----></div>
                </div>
            </section>
        </div>

        <div class="advantages">
            <div class="container"><h3 class="centered">Webdiler - это маркетплейс строительных материалов <br>с честными
                    ценами
                    от производителя</h3>
                <div class="advantages__wrapper">
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesCashback.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Оплати <br>кэшбэком до 99%</h5>
                        <p class="advantages__description">Покупайте товары, получайте кэшбэк и используйте его при
                            следующих
                            покупках. Одна единица кэшбэка равна одному рублю.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesWorkflow.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Электронный <br>документооборот</h5>
                        <p class="advantages__description">Доступ ко всем вашим счетам, доверенностям и закрывающим
                            документам в
                            одном личном кабинете.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesControl.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Контроль <br>поставок 24/7</h5>
                        <p class="advantages__description">Система оповестит вас при поступлении средств и начислении
                            кэшбэка,
                            при отгрузке товара и формировании отгрузочных документов.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesService.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Обслуживание <br>24 часа</h5>
                        <p class="advantages__description">Система 24/7 позволяет выставить счёт и доверенность онлайн в
                            любое
                            время без привязки и занятости менеджеров.</p></div>
                </div>
            </div>
        </div>
    </div>
    <div id="note" role="alert" class="el-notification"><!---->
        <div class="el-notification__group"><h2 class="el-notification__title"></h2>
            <div class="el-notification__content">
                <div class="catalog__add">
                    <div class="catalogAdd__head"><p>Товары добавлены в смету</p></div>

                    <div class="headerCart__foot headerCartFoot">
                        <a href="{{ route('estimates.index') }}" class="button button--medium button--green button--full headerCartFoot__button">Перейти в сметы</a>
                    </div>
                </div>
            </div>
            <div id="el-notification__closeBtn" class="el-notification__closeBtn el-icon-close"></div>
        </div>
    </div>

@endsection

@section('custom.js')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection


