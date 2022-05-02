@extends('layouts.sample')

@section('title', 'WEBDILER - Сметы')

@section('custom.js')
    <script src="/js/estimates.js"></script>
@endsection

@section('content')
    <div class="page__head-wrapper --gray --no-offset">
        <div class="container">
            <div class="page__head">
                <div class="breadcrumbs"><a href="/" class="router-link-active">Главная</a></div>
                <h2>Сметы</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="docs__filter docs__filter--small docsFilter">
                <div class="docs__column docs__column--small">
                    <div class="form__item docsFilter__shipment"><input type="text" placeholder="Номер сметы"
                                                                        clearable=""
                                                                        class="form__input docsFilter__input">
                        <button class="docsFilter__close" style="display: none;"><span class="img-svg"><img
                                    src="/images/catalogClose.svg" class="svg-icon"></span></button>
                        <button class="docsFilter__button"><span class="img-svg"><img src="/images/docsSearch.svg"
                                                                                      class="svg-icon"></span></button>
                    </div>
                </div>
                <div class="docs__column docs__column--small">
                    <div class="form__item docsFilter__date">
                        <div
                            class="el-date-editor el-range-editor el-input__inner form__input docsFilter__input el-date-editor--daterange">
                            <i class="el-input__icon el-range__icon el-icon-date"></i><input autocomplete="off"
                                                                                             placeholder="01.01.70"
                                                                                             name=""
                                                                                             class="el-range-input"><span
                                class="el-range-separator">-</span><input autocomplete="off" placeholder="01.01.70"
                                                                          name="" class="el-range-input"><i
                                class="el-input__icon el-range__close-icon"></i></div>
                        <button class="docsFilter__close" style="display: none;"><span class="img-svg"><img
                                    src="/images/catalogClose.svg" class="svg-icon"></span></button>
                        <button class="docsFilter__button"><span class="img-svg"><img src="/images/docsSearch.svg"
                                                                                      class="svg-icon"></span></button>
                    </div>

                </div>
                <div class="docs__column docs__column--small">
                    <button onclick="deleteChosen()" class="button button--green button-estimate" style="">Удалить выбранные</button>
                </div>
{{--                <div class="docs__column docs__column--small">--}}
{{--                    <button onclick="downloadChosen()" class="button button--green button-estimate" style="">Скачать выбранные</button>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="estimates-list">
            @if(isset($estimates[0]->name))
                @include('includes.estimate.single_estimate')
            @else
                <h4 class="empty-estimates">У вас пока нет сохраненных смет</h4>
            @endif
        </div>



    </div>

@endsection
