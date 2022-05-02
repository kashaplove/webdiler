@extends('layouts.sample')

@section('title', 'WEBDILER - Каталог')

@section('custom.js')
    <script src="/js/katalog.js"></script>
@endsection

@section('content')
    <div class="page__wrapper">
        <section class="app-main">
            <div>
                <div class="catalog-page">
                    <div class="page__head">
                        <div class="container">
                            <div class="breadcrumbs"><a href="/" class="router-link-active">Главная</a></div>
                            <h3><span>Блоки керамические</span> <span class="productCount">7 товаров</span></h3></div>
                    </div>
                    <div class="container">
                        <div class="catalogFilter__choose catalogFilterChoose"> <!----> <!----> <!----> <!---->  <!---->
                            <!----> <!---->  </div>
                        <div class="catalog">
                            <div class="catalog__filter catalogFilter">
                                <button class="catalogFilter__results" style="display: none;">Показать 7 товаров
                                </button>
                                <div class="catalogFilter__head"><p class="catalogFilter__title">Фильтр</p> <!---->
                                    <!----></div>
                                <div class="catalogFilter__wrapper"><!----> <!----> <!----> <!---->
                                    <div class="catalogFilter__item catalogFilter__item--switcher"><h5>С кэшбэком</h5>
                                        <div role="switch" class="el-switch"><input type="checkbox" name=""
                                                                                    true-value="true"
                                                                                    class="el-switch__input">
                                            <!----><span class="el-switch__core"
                                                         style="width: 40px; border-color: rgb(175, 181, 184); background-color: rgb(175, 181, 184);"></span>
                                            <!----></div>
                                    </div>
                                    <div
                                        class="catalogFilter__item catalogFilter__item--dropdown --arrow-hide --opened">
                                        <h5>Цена, ₽</h5>
                                        <div class="catalogFilter__options-wrapper" style="">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__price catalogFilterPrice">
                                                    <div class="catalogFilterPrice__item"><input placeholder="от 72.7"
                                                                                                 class="form__input catalogFilterPrice__input">
                                                        <span class="catalogFilterPrice__clear"><img
                                                                src="/images/assets/catalog/close.svg"></span></div>
                                                    <div class="catalogFilterPrice__item"><input placeholder="до 202"
                                                                                                 class="form__input catalogFilterPrice__input">
                                                        <span class="catalogFilterPrice__clear"><img
                                                                src="/images/assets/catalog/close.svg"></span></div>
                                                </div>
                                                <div role="slider" aria-valuemin="72.7" aria-valuemax="202"
                                                     aria-orientation="horizontal" class="el-slider"
                                                     aria-valuetext="72.7-202" aria-label="slider between 72.7 and 202">
                                                    <!---->
                                                    <div class="el-slider__runway">
                                                        <div class="el-slider__bar"
                                                             style="width: 100%; left: 0%;"></div>
                                                        <div tabindex="0" class="el-slider__button-wrapper"
                                                             style="left: 0%;">
                                                            <div class="el-tooltip el-slider__button"
                                                                 aria-describedby="el-tooltip-3269" tabindex="0"></div>
                                                        </div>
                                                        <div tabindex="0" class="el-slider__button-wrapper"
                                                             style="left: 100%;">
                                                            <div class="el-tooltip el-slider__button"
                                                                 aria-describedby="el-tooltip-2159" tabindex="0"></div>
                                                        </div><!----></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Завод</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option --factory"><input type="checkbox"
                                                                                                    id="factory14"
                                                                                                    class="checkbox">
                                                    <label for="factory14"><p><span>Wienerberger</span> <span
                                                                class="catalogFilter__count">(7)</span></p></label>
                                                </div>
                                            </div> <!----> <!----> <!----></div>
                                    </div> <!---->
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Расстояние до
                                            товара</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options catalogDistance">
                                                <div class="el-select"><!---->
                                                    <div class="el-input el-input--suffix"><!----><input type="text"
                                                                                                         autocomplete="off"
                                                                                                         placeholder="Населенный пункт"
                                                                                                         id="catalogDistance"
                                                                                                         class="el-input__inner">
                                                        <!----><span class="el-input__suffix"><span
                                                                class="el-input__suffix-inner"><i
                                                                    class="el-select__caret el-input__icon el-icon-"></i>
                                                                <!----><!----><!----><!----><!----></span><!----></span>
                                                        <!----><!----></div>
                                                    <div class="el-select-dropdown el-popper catalogDistance__dropdown"
                                                         style="display: none; min-width: 240px;">
                                                        <div class="el-scrollbar" style="display: none;">
                                                            <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                                                 style="margin-bottom: -17px; margin-right: -17px;">
                                                                <ul class="el-scrollbar__view el-select-dropdown__list"></ul>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-horizontal">
                                                                <div class="el-scrollbar__thumb"
                                                                     style="transform: translateX(0%);"></div>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-vertical">
                                                                <div class="el-scrollbar__thumb"
                                                                     style="transform: translateY(0%);"></div>
                                                            </div>
                                                        </div><!----></div>
                                                </div>
                                            </div>
                                            <div class="catalogRadius"><p class="catalogRadius__title">Расширение
                                                    радиуса поиска, км</p>
                                                <div class="catalogRadius__wrapper">
                                                    <div role="slider" aria-valuemin="50" aria-valuemax="550"
                                                         aria-orientation="horizontal" class="el-slider"
                                                         aria-valuetext="50" aria-label="slider between 50 and 550">
                                                        <!---->
                                                        <div class="el-slider__runway">
                                                            <div class="el-slider__bar"
                                                                 style="left: 0%; width: 0%;"></div>
                                                            <div tabindex="0" class="el-slider__button-wrapper"
                                                                 style="left: 0%;">
                                                                <div class="el-tooltip el-slider__button"
                                                                     aria-describedby="el-tooltip-7657"
                                                                     tabindex="0"></div>
                                                            </div><!---->
                                                            <div class="el-slider__stop" style="left: 20%;"></div>
                                                            <div class="el-slider__stop" style="left: 40%;"></div>
                                                            <div class="el-slider__stop" style="left: 60%;"></div>
                                                            <div class="el-slider__stop" style="left: 80%;"></div>
                                                            <div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 0%;"></div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 20%;"></div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 40%;"></div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 60%;"></div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 80%;"></div>
                                                                <div class="el-slider__stop el-slider__marks-stop"
                                                                     style="left: 100%;"></div>
                                                            </div>
                                                            <div class="el-slider__marks">
                                                                <div class="el-slider__marks-text" style="left: 0%;">
                                                                    50
                                                                </div>
                                                                <div class="el-slider__marks-text" style="left: 20%;">
                                                                    150
                                                                </div>
                                                                <div class="el-slider__marks-text" style="left: 40%;">
                                                                    250
                                                                </div>
                                                                <div class="el-slider__marks-text" style="left: 60%;">
                                                                    350
                                                                </div>
                                                                <div class="el-slider__marks-text" style="left: 80%;">
                                                                    450
                                                                </div>
                                                                <div class="el-slider__marks-text" style="left: 100%;">
                                                                    550
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Срок
                                            изготовления</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="production_time_0"
                                                                                          class="checkbox"> <label
                                                        for="production_time_0"><p><span>уточнять у менеджера</span>
                                                            <span class="catalogFilter__count">(7)</span></p></label>
                                                </div>
                                            </div> <!----> <!----> <!----></div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Размер</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_0"
                                                                                          class="checkbox"> <label
                                                        for="size_0"><p><span>8 блок (80*500*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_1"
                                                                                          class="checkbox"> <label
                                                        for="size_1"><p><span>12 блок (120*500*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_2"
                                                                                          class="checkbox"> <label
                                                        for="size_2"><p><span>20 блок (200*400*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_3"
                                                                                          class="checkbox"> <label
                                                        for="size_3"><p><span>25 блок (250*375*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <div class="catalogFilter__options --hidden"
                                                 style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_4"
                                                                                          class="checkbox"> <label
                                                        for="size_4"><p><span>38 блок (380*250*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_5"
                                                                                          class="checkbox"> <label
                                                        for="size_5"><p><span>44 блок (440*250*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox" id="size_6"
                                                                                          class="checkbox"> <label
                                                        for="size_6"><p><span>51 блок (510*250*219)</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <button class="catalogFilter__more --opened">Еще 3</button>
                                            <button class="catalogFilter__more" style="display: none;">Скрыть 3</button>
                                        </div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Марка
                                            прочности</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="strength_0"
                                                                                          class="checkbox"> <label
                                                        for="strength_0"><p><span>М100</span> <span
                                                                class="catalogFilter__count">(7)</span></p></label>
                                                </div>
                                            </div> <!----> <!----> <!----></div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>Вес (кг.)</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options"></div> <!----> <!----> <!----></div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>
                                            Теплопроводность</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_0"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_0"><p><span>0,18-0,24 Вт/м*С</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_1"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_1"><p><span>0,133-0,144 вт/м*с</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_2"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_2"><p><span>0,135-0,144 вт/м*с</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_3"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_3"><p><span>0,135-0,186 Вт/м*С</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <div class="catalogFilter__options --hidden"
                                                 style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_4"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_4"><p><span>0,138-0,148 вт/м*с</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_5"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_5"><p><span>0,198-0,220 вт/м*с</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="thermal_conductivity_6"
                                                                                          class="checkbox"> <label
                                                        for="thermal_conductivity_6"><p><span>0,202-0,228 вт/м*с</span>
                                                            <span class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <button class="catalogFilter__more --opened">Еще 3</button>
                                            <button class="catalogFilter__more" style="display: none;">Скрыть 3</button>
                                        </div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>На поддоне</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="on_the_pallet_0"
                                                                                          class="checkbox"> <label
                                                        for="on_the_pallet_0"><p><span>48 шт.</span> <span
                                                                class="catalogFilter__count">(2)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="on_the_pallet_1"
                                                                                          class="checkbox"> <label
                                                        for="on_the_pallet_1"><p><span>60 шт.</span> <span
                                                                class="catalogFilter__count">(2)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="on_the_pallet_2"
                                                                                          class="checkbox"> <label
                                                        for="on_the_pallet_2"><p><span>72 шт.</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="on_the_pallet_3"
                                                                                          class="checkbox"> <label
                                                        for="on_the_pallet_3"><p><span>96 шт.</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <div class="catalogFilter__options --hidden"
                                                 style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="on_the_pallet_4"
                                                                                          class="checkbox"> <label
                                                        for="on_the_pallet_4"><p><span>128 шт.</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                            </div>
                                            <button class="catalogFilter__more --opened">Еще 1</button>
                                            <button class="catalogFilter__more" style="display: none;">Скрыть 1</button>
                                        </div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>
                                            Морозостойкость</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options">
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="frost_resistance_0"
                                                                                          class="checkbox"> <label
                                                        for="frost_resistance_0"><p><span>F25</span> <span
                                                                class="catalogFilter__count">(1)</span></p></label>
                                                </div>
                                                <div class="catalogFilter__option"><input type="checkbox"
                                                                                          id="frost_resistance_1"
                                                                                          class="checkbox"> <label
                                                        for="frost_resistance_1"><p><span>F50</span> <span
                                                                class="catalogFilter__count">(6)</span></p></label>
                                                </div>
                                            </div> <!----> <!----> <!----></div>
                                    </div>
                                    <div class="catalogFilter__item catalogFilter__item--dropdown"><h5>
                                            Влагопоглощение</h5>
                                        <div class="catalogFilter__options-wrapper"
                                             style="overflow: hidden; transition-property: height; height: 0px; transition-duration: 500ms;">
                                            <div class="catalogFilter__options"></div> <!----> <!----> <!----></div>
                                    </div>
                                </div>
                                <div class="catalogFilter__actions"><!---->
                                    <button class="button button--medium button--full button--green">Применить
                                    </button>
                                </div>
                            </div>
                            @yield('goods')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="advantages">
            <div class="container"><h3 class="centered">Webdiler - это маркетплейс строительных материалов <br>с
                    честными ценами от производителя</h3>
                <div class="advantages__wrapper">
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesCashback.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Оплати <br>кэшбэком до 99%</h5>
                        <p class="advantages__description">Покупайте товары, получайте кэшбэк и используйте его при
                            следующих покупках. Одна единица кэшбэка равна одному рублю.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesWorkflow.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Электронный <br>документооборот</h5>
                        <p class="advantages__description">Доступ ко всем вашим счетам, доверенностям и закрывающим
                            документам в одном личном кабинете.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesControl.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Контроль <br>поставок 24/7</h5>
                        <p class="advantages__description">Система оповестит вас при поступлении средств и начислении
                            кэшбэка, при отгрузке товара и формировании отгрузочных документов.</p></div>
                    <div class="advantages__item">
                        <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesService.svg"
                                                                                 class="svg-icon"></span></div>
                        <h5 class="advantages__title">Обслуживание <br>24 часа</h5>
                        <p class="advantages__description">Система 24/7 позволяет выставить счёт и доверенность онлайн в
                            любое время без привязки и занятости менеджеров.</p></div>
                </div>
            </div>
        </div>
    </div>
@endsection
