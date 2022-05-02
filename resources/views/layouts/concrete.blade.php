@extends('layouts.katalog')
@section('goods')
    <div class="catalog__wrapper"><!---->
        <div class="catalog__actions">
            <div class="catalog__sorting">
                <div class="el-select"><!---->
                    <div class="el-input el-input--suffix"><!----><input type="text" readonly="readonly"
                                                                         autocomplete="off" placeholder="Сортировка"
                                                                         class="el-input__inner"><!----><span
                            class="el-input__suffix"><span class="el-input__suffix-inner"><i
                                    class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!---->
                                <!----><!----></span><!----></span><!----><!----></div>
                    <div class="el-select-dropdown el-popper" style="display: none; min-width: 189.6px;">
                        <div class="el-scrollbar" style="">
                            <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                 style="margin-bottom: -17px; margin-right: -17px;">
                                <ul class="el-scrollbar__view el-select-dropdown__list"><!---->
                                    <li class="el-select-dropdown__item selected"><span>По увеличению цены</span></li>
                                    <li class="el-select-dropdown__item"><span>По уменьшению цены</span></li>
                                    <li class="el-select-dropdown__item"><span>По алфавиту</span></li>
                                </ul>
                            </div>
                            <div class="el-scrollbar__bar is-horizontal">
                                <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                            </div>
                            <div class="el-scrollbar__bar is-vertical">
                                <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                            </div>
                        </div><!----></div>
                </div>
            </div> <!---->
            <div class="catalog__view-wrapper"><p class="catalog__include">
                    Что входит в стоимость?
                    <span class="img-svg el-tooltip item" aria-describedby="el-tooltip-3673" tabindex="0"><img
                            src="/images/catalogInfo.svg" class="svg-icon"></span></p>
                <div class="catalog__view">
                    <button class=""><img src="/images/assets/catalog/view-grid.png" alt="" title=""></button>
                    <button class="--active"><img src="/images/assets/catalog/view-list.png" alt="" title=""></button>
                </div>
            </div>
        </div>
        <div>
            <div class="catalog__goods catalogGoods --grid">
                @yield('concretes')
            </div>
            <div class="catalog__more">
                <button class="button button--big button--full button--gray">Показать ещё</button>
            </div>
            <div data-v-a2c9f58c="" class="pagination-container">
                <div data-v-a2c9f58c="" class="el-pagination is-background">
                    <ul class="el-pager">
                        <li class="number active">1</li><!---->
                        <li class="number">2</li>
                        <li class="number">3</li>
                        <li class="number">4</li>
                        <li class="number">5</li>
                        <li class="number">6</li>
                        <li class="el-icon more btn-quicknext el-icon-more"></li>
                        <li class="number">12</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="catalog__loader">
            <div tabindex="0" aria-label="Loading" class="vld-overlay is-active" style="display: none;">
                <div class="vld-background" style="backdrop-filter: blur(2px);"></div>
                <div class="vld-icon">
                    <svg viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" width="64" height="64" stroke="#000">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(1 1)" stroke-width="2">
                                <circle stroke-opacity=".25" cx="18" cy="18" r="18"></circle>
                                <path d="M36 18c0-9.94-8.06-18-18-18">
                                    <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                      to="360 18 18" dur="0.8s"
                                                      repeatCount="indefinite"></animateTransform>
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
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
                        <a href="{{ route('cart.index') }}" class="button button--medium button--green button--full headerCartFoot__button">Перейти в корзину</a>
                    </div>
                </div>
            </div>
            <div id="el-notification__closeBtn" class="el-notification__closeBtn el-icon-close"></div>
        </div>
    </div>
@endsection
