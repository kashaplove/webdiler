<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/client/css/app.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>WEBDILER - сервис для оптовых покупателей строительных материалов</title>
</head>
<body>

<div class="modal" style="">
    <button class="modal__close"><span class="img-svg"><img src="/images/modalClose.svg" class="svg-icon"></span>
    </button>
    <div class="modal__content">
        <div class="modal__head"><h2 class="--active">Вход</h2>
            <h2>Регистрация</h2></div>
        <div class="modal__body">
            <form class="el-form el-form--label-top" onsubmit="return false;">
                <div class="el-form-item column el-form-item--feedback is-error is-required"><label for="login"
                                                                                                    class="el-form-item__label">Email
                        или ИНН</label>
                    <div class="el-form-item__content">
                        <div class="el-input"><!----><input type="text" autocomplete="off" name="login"
                                                            class="el-input__inner"><!----><span
                                class="el-input__suffix"><span class="el-input__suffix-inner"><!----><!----><!---->
                                    <!----></span><i
                                    class="el-input__icon el-input__validateIcon el-icon-circle-close"></i></span>
                            <!----><!----></div>
                        <div class="el-form-item__error">
                            Обязательное поле
                        </div>
                    </div>
                </div>
                <div class="el-form-item column el-form-item--feedback is-error is-required"><label for="password"
                                                                                                    class="el-form-item__label">Пароль</label>
                    <div class="el-form-item__content">
                        <div class="el-input"><!----><input type="password" autocomplete="off" name="password"
                                                            class="el-input__inner"><!----><span
                                class="el-input__suffix"><span class="el-input__suffix-inner"><!----><!----><!---->
                                    <!----></span><i
                                    class="el-input__icon el-input__validateIcon el-icon-circle-close"></i></span>
                            <!----><!----></div>
                        <div class="el-form-item__error">
                            Обязательное поле
                        </div>
                    </div>
                </div>
                <div class="el-form-item column" style="display: none;">
                    <div class="el-form-item__error"></div>
                </div>
                <div class="el-form-item el-form-item--feedback"><!---->
                    <div class="el-form-item__content">
                        <button class="button button--medium button--green">Войти</button>
                        <button class="modal__minor-action">Забыли пароль?</button><!----></div>
                </div>
            </form>
        </div>
    </div> <!----></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
