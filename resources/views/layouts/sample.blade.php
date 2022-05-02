<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/client/css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('custom.css')
    <link rel="icon" type="image/png" sizes="32x32" href="https://webdiler.ru/favicons/favicon-32x32.png"/>
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!-- /Pixel -->

<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

<header class="header" id="header">
    <div class="container">
        <div class="header__top">
            <div class="header__hamburger-wrapper headerHoverParent">
                <div class="header__hamburger headerHamburger"><span></span> <span></span> <span></span></div>
                <span>О сервисе</span>
                <nav
                    class="headerHoverChild headerHoverChild__nav headerHoverChild__nav--offset headerHamburger__dropdown headerHamburgerDropdown">
                    <a href="/requisites" class="">Реквизиты</a><a href="/faq" class="">Как пользоваться сервисом</a><a
                        href="/personal_policy" class="">Политика в отношении обработки персональных данных</a><a
                        href="/offer_agreement" class="">Договор – оферта</a><a href="/user_agreement" class="">Пользовательское
                        соглашение сервиса WEBDILER</a></nav>
            </div>
            <nav class="header__nav header__nav--main"><a href="/news" class="">Новости</a><a href="/articles" class="">Статьи</a>
            </nav>
            <nav class="header__nav header__nav--minor header__nav--hidden">
                <button><span class="img-svg"><img src="/images/favoritesPath.svg" class="svg-icon"></span> Избранное
                </button>
                <button><span class="img-svg"><img src="/images/headerFactoryAdd.svg" class="svg-icon"></span> Добавить
                    завод
                </button>
                <button><span class="img-svg"><img src="/images/headerContactUs.svg" class="svg-icon"></span> Связаться
                </button>
            </nav>
            <div class="header__phone">
                <a href="tel:88004443035"><span class="img-svg"><img
                            src="/images/headerPhone.svg" class="svg-icon"></span>
                    8 800 444 3035
                </a></div>
        </div> <!---->
        <div class="header__bottom">
            <div class="header__bottom-left"><a href="/"
                                                class="header__logo router-link-exact-active router-link-active"
                                                aria-current="page"><span class="img-svg"><img
                            src="/images/headerLogo.svg" class="svg-icon"></span></a>
                <div class="headerHoverParent header__catalog-wrapper">
                    <div class="header__catalog headerCatalog">
                        <div class="header__hamburger header__hamburger--white"><span></span> <span></span>
                            <span></span></div>
                        <span>Каталог</span></div>
                    <div class="headerHoverChild  headerCatalog__dropdown headerCatalog__dropdown--hover">
                        <nav class="headerHoverChild__nav headerHoverChild__nav--offset headerCatalog__nav"><a
                                href="{{ route('keramik') }}" class=""><img src="/images/assets/blocks_keramik.svg"
                                                                            alt="" class="headerCatalog__icon">
                                Блоки керамические
                            </a>
                            <a href="{{ route('jbi') }}" class=""><img src="/images/assets/concrete_goods.svg"
                                                                       alt="" class="headerCatalog__icon">
                                ЖБИ изделия
                            </a></nav>
                        <nav
                            class="headerHoverChild__nav headerHoverChild__nav--offset headerCatalog__nav headerCatalog__nav--minor">
                            <a href="/catalog/best_prices" class=""><span
                                    class="headerCatalog__label headerCatalog__label--actions"><img
                                        src="/images/assets/catalog/best-price.svg"></span> Лучшие цены
                            </a> <a href="/catalog/highlights" class=""><span
                                    class="headerCatalog__label headerCatalog__label--new">New</span> Новинки
                            </a></nav>
                    </div>
                </div>
                <div class="header__search headerSearch">
                    <form onsubmit="return false;" class="form">
                        <div class="form__item">
                            <button class="headerSearch__icon"><span class="img-svg"><img src="/images/loopGray.svg"
                                                                                          class="svg-icon"></span>
                            </button>
                            <input type="text" placeholder="Я ищу..." class="form__input headerSearch__input">
                            <button class="headerSearch__button"><span class="img-svg"><img src="/images/loopWhite.svg"
                                                                                            class="svg-icon"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="header__bottom-right">
                <nav class="header__nav header__nav--minor header__nav--actions">

                    @guest
                        @if (Route::has('login'))
                            <div class="headerInfo__item">

                                <a href="#modal">
                                    <div class="headerInfo__icon">
                                        <img src="/images/assets/header/actions/profile.svg" alt="" title="">
                                    </div>
                                    Войти</a>
                            </div>
                        @endif
                    @else
                        <div class="headerHoverParent headerInfo__item">
                            <a href="/profile/personal" class="">
                                <div class="headerInfo__icon">
                                    <img src="/images/assets/header/actions/profile.svg" alt=""
                                         title=""></div>
                                Мой кабинет
                            </a>
                            <div class="headerHoverChild headerHoverChild--padding header__cabinet headerCabinet">
                                <!---->
                                <div class="headerCabinet__nav-wrapper">
                                    <nav class="headerHoverChild__nav headerCabinet__nav">
                                        <a href="" class="">
                                        <span class="headerCabinet__icon">
                                            <img src="/images/assets/header/cabinet/data.svg">
                                        </span>
                                            Личные данные
                                        </a>
                                        <a href="" class="">
                                        <span class="headerCabinet__icon"><img src="/images/advantagesWorkflow.svg">
                                        </span>
                                            Мои документы
                                        </a>
                                        <a href="{{ route('estimates.index') }}" class="">
                                        <span class="headerCabinet__icon"><img
                                                src="/images/assets/header/cabinet/docs.svg">
                                        </span>
                                            Мои сметы
                                        </a>
                                        <a href="{{ route('calculations.index') }}" class="">
                                        <span class="headerCabinet__icon">
                                            <div class="headerCabinet__icon__img">
                                                <svg version="1.1" baseProfile="tiny" id="Layer_1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24"
                                                     xml:space="preserve">
                                                    <g>
                                                        <path d="M10.193,18.933c-0.756,0-1.371,0.591-1.371,1.317s0.615,1.317,1.371,1.317s1.371-0.591,1.371-1.317
                                                            S10.949,18.933,10.193,18.933z M10.193,20.767c-0.314,0-0.57-0.231-0.57-0.517s0.256-0.517,0.57-0.517s0.57,0.231,0.57,0.517
                                                            S10.508,20.767,10.193,20.767z"/>
                                                        <path d="M10.193,15.267c-0.756,0-1.371,0.591-1.371,1.317c0,0.726,0.615,1.316,1.371,1.316s1.371-0.591,1.371-1.316
                                                            C11.564,15.857,10.949,15.267,10.193,15.267z M10.193,17.1c-0.314,0-0.57-0.231-0.57-0.516c0-0.285,0.256-0.517,0.57-0.517
                                                            s0.57,0.231,0.57,0.517C10.764,16.868,10.508,17.1,10.193,17.1z"/>
                                                        <path d="M6.524,15.267c-0.766,0-1.39,0.591-1.39,1.317c0,0.726,0.624,1.316,1.39,1.316s1.39-0.591,1.39-1.316
                                                            C7.914,15.857,7.29,15.267,6.524,15.267z M6.524,17.1c-0.319,0-0.589-0.236-0.589-0.516c0-0.285,0.264-0.517,0.589-0.517
                                                            s0.589,0.231,0.589,0.517C7.113,16.863,6.844,17.1,6.524,17.1z"/>
                                                        <path d="M6.524,18.933c-0.766,0-1.39,0.591-1.39,1.317s0.624,1.317,1.39,1.317s1.39-0.591,1.39-1.317S7.29,18.933,6.524,18.933z
                                                             M6.524,20.767c-0.319,0-0.589-0.236-0.589-0.517s0.27-0.517,0.589-0.517s0.589,0.236,0.589,0.517S6.844,20.767,6.524,20.767z"/>
                                                        <path
                                                            d="M8.35,3.234h7.416c0.221,0,0.4-0.18,0.4-0.4s-0.18-0.4-0.4-0.4H8.35c-0.221,0-0.4,0.18-0.4,0.4S8.129,3.234,8.35,3.234z"/>
                                                        <path d="M17.5,4.266H6.537c-0.771,0-1.4,0.629-1.4,1.4v3.5c0,0.771,0.629,1.4,1.4,1.4H17.5c0.771,0,1.4-0.629,1.4-1.4v-3.5
                                                            C18.9,4.895,18.271,4.266,17.5,4.266z M18.1,9.166c0,0.331-0.269,0.6-0.6,0.6H6.537c-0.331,0-0.6-0.269-0.6-0.6v-3.5
                                                            c0-0.331,0.269-0.6,0.6-0.6H17.5c0.331,0,0.6,0.269,0.6,0.6V9.166z"/>
                                                        <path d="M18.863,12.916c0-0.726-0.606-1.316-1.352-1.316s-1.352,0.591-1.352,1.316c0,0.727,0.606,1.317,1.352,1.317
                                                            S18.863,13.643,18.863,12.916z M16.961,12.916c0-0.284,0.247-0.516,0.551-0.516s0.551,0.231,0.551,0.516
                                                            c0,0.285-0.247,0.517-0.551,0.517S16.961,13.201,16.961,12.916z"/>
                                                        <path d="M20.171,1.758l-0.588-0.63l-0.12-0.083C18.907,0.796,17.995,0.6,17.387,0.6H6.613c-0.608,0-1.521,0.196-2.076,0.445
                                                            L3.91,1.639L3.829,1.758C3.581,2.314,3.387,3.226,3.387,3.834v16.333c0,0.608,0.194,1.52,0.442,2.076l0.589,0.629l0.119,0.083
                                                            C5.093,23.204,6.005,23.4,6.613,23.4h10.773c0.608,0,1.521-0.196,2.076-0.445l0.626-0.593l0.082-0.119
                                                            c0.248-0.557,0.442-1.468,0.442-2.076V3.834C20.613,3.226,20.419,2.314,20.171,1.758z M19.813,20.167
                                                            c0,0.473-0.155,1.224-0.345,1.686l-0.398,0.4c-0.461,0.191-1.21,0.347-1.683,0.347H6.613c-0.473,0-1.222-0.155-1.683-0.347
                                                            l-0.398-0.4c-0.189-0.462-0.345-1.213-0.345-1.686V3.834c0-0.473,0.155-1.224,0.345-1.686l0.398-0.401
                                                            C5.392,1.556,6.141,1.4,6.613,1.4h10.773c0.473,0,1.222,0.155,1.683,0.347l0.398,0.401c0.189,0.462,0.345,1.213,0.345,1.686V20.167
                                                            z"/>
                                                        <path d="M17.53,15.267c-0.755,0-1.37,0.629-1.37,1.4v3.5c0,0.771,0.615,1.4,1.37,1.4s1.37-0.629,1.37-1.4v-3.5
                                                            C18.9,15.896,18.285,15.267,17.53,15.267z M18.1,20.167c0,0.331-0.255,0.6-0.569,0.6s-0.569-0.269-0.569-0.6v-3.5
                                                            c0-0.331,0.255-0.6,0.569-0.6s0.569,0.269,0.569,0.6V20.167z"/>
                                                        <path d="M13.863,15.267c-0.745,0-1.352,0.591-1.352,1.317c0,0.726,0.606,1.316,1.352,1.316s1.352-0.591,1.352-1.316
                                                            C15.215,15.857,14.608,15.267,13.863,15.267z M13.863,17.1c-0.304,0-0.551-0.231-0.551-0.516c0-0.285,0.247-0.517,0.551-0.517
                                                            s0.551,0.231,0.551,0.517C14.414,16.868,14.167,17.1,13.863,17.1z"/>
                                                        <path d="M13.863,11.6c-0.745,0-1.352,0.591-1.352,1.316c0,0.727,0.606,1.317,1.352,1.317s1.352-0.591,1.352-1.317
                                                            C15.215,12.19,14.608,11.6,13.863,11.6z M13.863,13.433c-0.304,0-0.551-0.231-0.551-0.517c0-0.284,0.247-0.516,0.551-0.516
                                                            s0.551,0.231,0.551,0.516C14.414,13.201,14.167,13.433,13.863,13.433z"/>
                                                        <path d="M13.863,18.933c-0.745,0-1.352,0.591-1.352,1.317s0.606,1.317,1.352,1.317s1.352-0.591,1.352-1.317
                                                            S14.608,18.933,13.863,18.933z M13.863,20.767c-0.304,0-0.551-0.231-0.551-0.517s0.247-0.517,0.551-0.517s0.551,0.231,0.551,0.517
                                                            S14.167,20.767,13.863,20.767z"/>
                                                        <path d="M10.193,11.6c-0.756,0-1.371,0.591-1.371,1.316c0,0.727,0.615,1.317,1.371,1.317s1.371-0.591,1.371-1.317
                                                            C11.564,12.19,10.949,11.6,10.193,11.6z M10.193,13.433c-0.314,0-0.57-0.231-0.57-0.517c0-0.284,0.256-0.516,0.57-0.516
                                                            s0.57,0.231,0.57,0.516C10.764,13.201,10.508,13.433,10.193,13.433z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </span>
                                            Расcчитать
                                        </a>
                                    </nav>
                                    <nav class="headerHoverChild__nav headerCabinet__nav headerCabinet__nav--orders"><p>
                                            Мои заказы
                                        </p> <a href="{{ route('cart.index') }}" class=""><span
                                                class="headerCabinet__icon">1</span> Моя корзина
                                        </a> <a href="/profile/cart/paid" class=""><span
                                                class="headerCabinet__icon">2</span> Оплаченные товары
                                        </a> <a href="/profile/cart/transferring" class=""><span
                                                class="headerCabinet__icon">3</span> Товары на отгрузке
                                        </a> <a href="/profile/cart/transferred" class=""><span
                                                class="headerCabinet__icon">4</span>
                                            Отгруженные товары
                                        </a></nav>
                                    <nav class="headerHoverChild__nav headerCabinet__nav">
                                        <a class="exit" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span
                                                class="headerCabinet__icon">
                                            <img
                                                src="/images/assets/header/cabinet/exit.svg">
                                        </span> Выйти
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    @endguest
                    <div class="headerInfo__item"><a href="/favorites" class=""><span class="img-svg"><img
                                    src="/images/favoritesPath.svg" class="svg-icon"></span>
                            Избранное
                        </a>
                    </div>

                </nav>
                <div class="header__info headerInfo">
                    @guest
                        @if (Route::has('login'))
                        @endif
                    @else
                        <div class="headerHoverParent headerInfo__item tHeaderBalance">
                            <div class="headerInfo__icon"><span class="img-svg"><img src="/images/headerRub.svg"
                                                                                     class="svg-icon"></span></div>
                            <div class="headerInfo__wrapper"><span class="headerInfo__title">0 ₽</span> <span
                                    class="headerInfo__subtitle"><span>0</span> <span class="w-cashback">W</span></span>
                            </div>
                            <div class="headerHoverChild headerHoverChild--padding header__balance headerBalance">
                                <div>
                                    <div class="headerBalance__item">
                                        <div class="headerBalance__icon"><span class="img-svg"><img
                                                    src="/images/headerRub.svg" class="svg-icon"></span></div>
                                        <div class="headerBalance__info"><p class="headerBalance__value">0 ₽</p> <!---->
                                        </div>
                                    </div>
                                    <div class="headerBalance__item">
                                        <div class="headerBalance__icon"><span class="img-svg"><img
                                                    src="/images/headerW.svg" class="svg-icon"></span></div>
                                        <div class="headerBalance__info"><p class="headerBalance__value"><span>0</span>
                                                <span class="w-cashback">W</span></p> <!----></div>
                                    </div>
                                </div> <!----></div>
                        </div>
                    @endguest

                    <div class="headerHoverParent headerInfo__item tHeaderCart"><a href="{{ route('cart.index') }}"
                                                                                   class="headerInfo__link"></a>
                        <div class="headerInfo__icon"><span class="img-svg"><img src="/images/headerCart.svg"
                                                                                 class="svg-icon"></span></div>
                        <div class="headerInfo__wrapper"><span class="headerInfo__title">Корзина</span>
                        </div>
                    </div>
                </div>
                <div id="modal" class="modal" style="">
                    <a href="#header" class="modal__close"><span class="img-svg"><img src="/images/modalClose.svg"
                                                                                      class="svg-icon"></span>
                    </a>
                    <div class="modal__content">
                        <div class="modal__head"><h2 class="--active">Вход</h2>
                            <h2>Регистрация</h2></div>
                        <div class="modal__body">
                            <form class="el-form el-form--label-top" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="el-form-item column el-form-item--feedback is-error is-required"><label
                                        for="login"
                                        class="el-form-item__label">Email
                                        или ИНН</label>
                                    <div class="el-form-item__content">
                                        <div class="el-input"><!---->
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!----><!---->
                                        </div>

                                    </div>
                                </div>
                                <div class="el-form-item column el-form-item--feedback is-error is-required"><label
                                        for="password"
                                        class="el-form-item__label">Пароль</label>
                                    <div class="el-form-item__content">
                                        <div class="el-input"><!---->
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="el-form-item el-form-item--feedback"><!---->
                                    <div class="el-form-item__content">
                                        <button type="submit" class="button button--medium button--green">Войти</button>
                                        @if (Route::has('password.request'))
                                            <a class="modal__minor-action" href="{{ route('password.request') }}">
                                                Забыли пароль?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!----></div>
            </div>
        </div>
    </div>
</header>

@yield('content')


<footer class="footer">
    <div class="footer__top">
        <div class="container footer__top-wrapper">
            <div class="footer__about-wrapper">
                <div class="footer__logo"><span class="img-svg"><img src="/images/footerLogo.svg"
                                                                     class="svg-icon"></span></div>
                <div class="footer__about"><p>
                        Онлайн платформа строительных материалов
                    </p>
                    <p>
                        © 2019-2021 ООО «ВЕБДИЛЕР»
                    </p></div>
            </div>
            <nav class="footer__nav"><a href="/requisites" class="">Реквизиты</a><a href="/faq" class="">Как
                    пользоваться сервисом</a><a href="/personal_policy" class="">Политика в отношении обработки
                    персональных данных</a><a href="/offer_agreement" class="">Договор – оферта</a><a
                    href="/user_agreement" class="">Пользовательское соглашение сервиса WEBDILER</a></nav>
            <div class="footer__contacts">
                <div class="footer__contacts-wrapper"><p><a href="tel:88004443035">8 800 444 3035</a></p>
                    <p><a href="mailto:support@webdiler.ru">support@webdiler.ru</a></p></div>
                <div class="footer__support"><p>
                        Если остались вопросы, обратитесь в нашу техподдержку
                    </p>
                    <button class="button button--medium button--transparent footer__button">Связаться</button>
                </div>
            </div>
            <div class="footer__add"><p>
                    Не нашли завод, с которым хотите работать? Укажите его контакты и мы его добавим.
                </p>
                <button class="button button--medium button--transparent footer__button">Добавить завод</button>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__bottom-wrapper"><p><a href="#" target="_blank" class="footer__logistic">weblogist.ru</a>
                - онлайн сервис грузоперевозок
            </p> <a href="https://creat-on.ru/" target="_blank"><img src="/images/assets/footer/creat-on.png"
                                                                     alt="Creat-On Logo" title="Creat-On"></a></div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

@yield('custom.js')
</body>
</html>
