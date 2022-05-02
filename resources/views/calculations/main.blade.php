@extends('layouts.sample')
@section('title', 'WEBDILER - расчет строительных материалов')
@section('custom.css')
    <link rel="stylesheet" href="{{ asset('/css/calc.css') }}">
@endsection
@section('custom.js')
    <script src="/js/calc.js"></script>
@endsection
@section('content')
    <div class="calc__wrapper">
        <div class="page__head-wrapper --gray --no-offset">
            <div class="container">
                <div class="page__head">
                    <div class="breadcrumbs"><a href="/" class="router-link-active">Главная</a></div>
                    <h2>Расчет строительных материалов</h2>
                </div>
            </div>
        </div>
        <div class="container calc-body-container">
            <div class="calc-left">
                <div class="sidebar">
                    <div class="sidebar__section">
                        <h3>Фундамент</h3>
                        <div class="sidebar__item item-active" id="slab-foundation">
                            Плитный фундамент
                        </div>
                        <div class="sidebar__item" id="freezing-depth">
                            Глубина промерзания
                        </div>
                    </div>

                    <div class="sidebar__section">
                        <h3>Стены</h3>
                        <div class="sidebar__item" id="bricks">
                            Кирпич
                        </div>
                        <div class="sidebar__item" id="wall-blocks">
                            Стеновые блоки
                        </div>
{{--                        <div class="sidebar__item" id="foam-blocks">--}}
{{--                            Пеноблоки--}}
{{--                        </div>--}}
                        <div class="sidebar__item" id="keramik-blocks">
                            Керамические блоки
                        </div>
{{--                        <div class="sidebar__item" id="concrete-blocks">--}}
{{--                            Газобетонные блоки--}}
{{--                        </div>--}}
                    </div>

                    <div class="sidebar__section">
                        <h3>Материалы</h3>
                        <div class="sidebar__item" id="hard-concrete">
                            Тяжелые бетоны
                        </div>
{{--                        <div class="sidebar__item" id="light-concrete">--}}
{{--                            Легкие бетоны--}}
{{--                        </div>--}}
                        <div class="sidebar__item" id="building-mixture">
                            Строительный раствор
                        </div>
                    </div>

                </div>
            </div>
            <div class="calc-right">
                @yield('calculations')
            </div>
        </div>
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
    <div id="note" role="alert" class="el-notification"><!---->
        <div class="el-notification__group"><h2 class="el-notification__title"></h2>
            <div class="el-notification__content">
                <div class="catalog__add">
                    <div class="catalogAdd__head"><p>Товар добавлен в корзину</p></div>
                    <div class="headerCart__body headerCartBody">
                        <div class="headerCartBody__item">
                            <div class="headerCartBody__thumb"><img id="el-notification__img"></div>
                            <a href="" class="headerCartBody__title"></a>
                        </div>
                    </div>
                    <div class="headerCart__foot headerCartFoot">
                        <a href="{{ route('cart.index') }}"
                           class="button button--medium button--green button--full headerCartFoot__button">Перейти в
                            корзину</a>
                    </div>
                </div>
            </div>
            <div id="el-notification__closeBtn" class="el-notification__closeBtn el-icon-close"></div>
        </div>
    </div>
@endsection
