@extends('layouts.sample')
@section('title', 'WEBDILER - сервис для оптовых покупателей строительных материалов')
@section('content')
<div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-swiper-slide-index="1">
            <div class="main-slider__thumb"
                 style="background: linear-gradient(179.79deg, rgba(0, 0, 0, 0) 73.67%, rgba(0, 0, 0, 0.2) 99.42%), linear-gradient(270deg, rgba(0, 3, 39, 0) 46.77%, rgba(0, 2, 27, 0.325) 100%), url(https://sun9-69.userapi.com/impg/CMzExqvv5kdYBGLdyQnDVseTwaY8xL5w33X0wQ/t1oWEbmWBzg.jpg?size=2500x1500&quality=96&sign=96d3f3eb335783e387afb2e087a1b4fa&type=album);"></div>
            <div class="slider-container">
                <div class="carousel-info">
                    <h1 class="carousel-title" style="color: rgb(31, 31, 31);">
                        Система для закупок <br>строительных материалов <br>по оптовым ценам</h1>
                    <p class="main-slider__description" style="color: rgb(31, 31, 31);">• Оптовые цены без привязки
                        к объёму <br>• Широкий ассортимент товаров от различных производителей <br>• Возможность
                        сравнить продукцию различных заводов и выбрать оптимальный вариант</p>
                    <button class="button button--big main-slider__button button--green">Зарегистрироваться</button>
                </div>
            </div>
        </div>

        <div class="carousel-item" data-swiper-slide-index="2">
            <div class="main-slider__thumb"
                 style="background: linear-gradient(179.79deg, rgba(0, 0, 0, 0) 73.67%, rgba(0, 0, 0, 0.2) 99.42%), linear-gradient(270deg, rgba(0, 3, 39, 0) 46.77%, rgba(0, 2, 27, 0.325) 100%), url(https://sun9-10.userapi.com/impg/VFvcePf7bgoZqHWxha0IvssxehCumTUiohsMjw/P0qc7K7Pgo8.jpg?size=2500x1500&quality=96&sign=d7191b66cd9262a300718b8a286acd0e&type=album);"></div>
            <div class="slider-container">
                <div class="carousel-info"><h1 class="carousel-title" style="color: rgb(52, 97, 121);">Как
                        пользоваться сервисом<br>оптовых закупок webdiler.ru</h1>
                    <p class="main-slider__description" style="color: rgb(31, 31, 31);">• Выберите товар используя
                        фильтры<br>• Сформируйте счет в разделе "моя корзина"<br>• После пополнения счета оплатите
                        выбранный товар<br>• Сформируйте доверенность в системе и заберите товар<br>• Скачайте
                        закрывающие документы в личном кабинете</p>
                    <button class="button button--big main-slider__button button--green">Как пользоваться сервисом
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-swiper-slide-index="0">
            <div class="main-slider__thumb"
                 style="background: linear-gradient(179.79deg, rgba(0, 0, 0, 0) 73.67%, rgba(0, 0, 0, 0.2) 99.42%), linear-gradient(270deg, rgba(0, 3, 39, 0) 46.77%, rgba(0, 2, 27, 0.325) 100%), url(https://sun9-69.userapi.com/impg/CMzExqvv5kdYBGLdyQnDVseTwaY8xL5w33X0wQ/t1oWEbmWBzg.jpg?size=2500x1500&quality=96&sign=96d3f3eb335783e387afb2e087a1b4fa&type=album);"></div>
            <div class="slider-container">
                <div class="carousel-info"><h1 class="carousel-title" style="color: rgb(255, 163, 0);">
                        Заказать доставку</h1>
                    <p class="main-slider__description" style="color: rgb(31, 31, 31);">• Вы можете заказать
                        доставку оплаченного товара у нас на сайте<br>• В разделе "оплаченные товары" выберете
                        продукцию и оформите доставку</p> <!----></div>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <div id="mainSliderProgressBar" class="main-slider__bar"></div>
</div>


<div class="instruction">
    <div class="container">
        <div class="instruction__head-wrapper"><h2>Как пользоваться сервисом</h2>
            <button class="button button--medium button--green-transparent">Остались вопросы?</button>
        </div>
        <div class="instruction__wrapper">
            <nav class="instruction__nav">
                <a class="" data-bs-toggle="collapse" href="#instruction__collapse-first">1. Выберите товар</a>
                <a class="" data-bs-toggle="collapse" href="#instruction__collapse-second">2. Сформируйте счёт</a>
                <a class="" data-bs-toggle="collapse" href="#instruction__collapse-third">3. Оплатите товар</a>
                <a class="" data-bs-toggle="collapse" href="#instruction__collapse-fourth">4. Отгрузка товара</a>
                <a class="" data-bs-toggle="collapse" href="#instruction__collapse-fifth">5. Закрывающие документы</a>
            </nav>
            <div class="instruction__text collapse multi-collapse" id="instruction__collapse-first" style="" aria-expanded="true">
                <div style=""><h3>1. Выберите товар</h3>
                    <div><p>Выберете в каталоге необходимую вам категорию.</p>
                        <p>Настройте фильтры на странице товаров которые соответстуют вашей смете.</p>
                        <p>После, добавьте необходимые товары из каталога и передите в раздел <a
                                href="profile/cart/index" target="_blank" rel="noopener">"Корзина"</a>.</p></div>
                    <button class="button button--medium button--green instruction__button">Следующий шаг</button>
                </div>
            </div>
            <div class="instruction__text active collapse multi-collapse"  id="instruction__collapse-second">
                <div style=""><h3>2. Сформируйте счёт</h3>
                    <div><p>В разделе <a href="profile/cart/index" target="_blank" rel="noopener">"Моя корзина"</a>&nbsp;выберете
                            и укажите количество товаров на которые вы хотите выставить счёт на оплату.</p>
                        <p>Если выбранный товар можно оплатить с помощью кэшбэка, укажите сумму кэшбэка и перерасчитайте
                            стоимость товара.</p>
                        <p>Далее вы можете выставлять счёт.</p></div>
                    <button class="button button--medium button--green instruction__button">Следующий шаг</button>
                </div>
            </div>
            <div class="instruction__text active collapse multi-collapse" id="instruction__collapse-third">
                <div style=""><h3>3. Оплатите товар</h3>
                    <div><p>После оплаты счета вам придет уведомление на электронную почту.</p>
                        <p>Свой баланс вы можете проверить в верхнем правом углу (если вы находитесь в личном
                            кабинете).</p>
                        <p>Перейдя в раздел <a href="profile/cart/index" target="_blank" rel="noopener">"Моя
                                корзина"</a>, выберете товар который собираетесь оплатить, при необходимости укажите
                            сумму используемого кэшбэка и оплатите товар.</p></div>
                    <button class="button button--medium button--green instruction__button">Следующий шаг</button>
                </div>
            </div>
            <div class="instruction__text active collapse multi-collapse" id="instruction__collapse-fourth">
                <div style=""><h3>4. Отгрузка товара</h3>
                    <div><p>Перейдите в раздел <a href="profile/cart/paid" target="_blank" rel="noopener">"Оплаченные
                                товары"</a>, выберете товар указав необходимое количество и нажмите создать отгрузку.
                        </p>
                        <p>В открывшемся окне укажите данные водителя.</p>
                        <p>&nbsp;</p></div>
                    <button class="button button--medium button--green instruction__button">Следующий шаг</button>
                </div>
            </div>
            <div class="instruction__text active collapse multi-collapse" id="instruction__collapse-fifth">
                <div style=""><h3>5. Закрывающие документы</h3>
                    <div><p>После завершения отгрузки, к данной отгрузке будет закреплен закрывающий документ в раздел
                            <a href="profile/documents/acts" target="_blank" rel="noopener">"Мои документы"</a>.</p>
                        <p>Там же вы можете найти: счета на оплату, доверенности и счет-фактуры на аванс.</p></div>
                    <!----></div>
            </div>
        </div>
    </div>
</div>

<div class="advantages">
    <div class="container"><h3 class="centered">Webdiler - это маркетплейс строительных материалов <br>с честными ценами
            от производителя</h3>
        <div class="advantages__wrapper">
            <div class="advantages__item">
                <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesCashback.svg"
                                                                         class="svg-icon"></span></div>
                <h5 class="advantages__title">Оплати <br>кэшбэком до 99%</h5>
                <p class="advantages__description">Покупайте товары, получайте кэшбэк и используйте его при следующих
                    покупках. Одна единица кэшбэка равна одному рублю.</p></div>
            <div class="advantages__item">
                <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesWorkflow.svg"
                                                                         class="svg-icon"></span></div>
                <h5 class="advantages__title">Электронный <br>документооборот</h5>
                <p class="advantages__description">Доступ ко всем вашим счетам, доверенностям и закрывающим документам в
                    одном личном кабинете.</p></div>
            <div class="advantages__item">
                <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesControl.svg"
                                                                         class="svg-icon"></span></div>
                <h5 class="advantages__title">Контроль <br>поставок 24/7</h5>
                <p class="advantages__description">Система оповестит вас при поступлении средств и начислении кэшбэка,
                    при отгрузке товара и формировании отгрузочных документов.</p></div>
            <div class="advantages__item">
                <div class="advantages__icon"><span class="img-svg"><img src="/images/advantagesService.svg"
                                                                         class="svg-icon"></span></div>
                <h5 class="advantages__title">Обслуживание <br>24 часа</h5>
                <p class="advantages__description">Система 24/7 позволяет выставить счёт и доверенность онлайн в любое
                    время без привязки и занятости менеджеров.</p></div>
        </div>
    </div>
</div>
@endsection
