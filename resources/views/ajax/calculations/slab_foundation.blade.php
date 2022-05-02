<div class="calc-right-container">
    <div class="slab-foundation">
        <div class="slab-foundation-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Марка бетона</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Ширина плиты (м)</label>
                </div>
                <div class="slab-length calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Длина плиты (м)</label>

                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Высота плиты (мм)</label>
                </div>
            </div>
            <div class="calc-right-input">
                <select class="calc-input select">
                    <option selected>М300</option>
                    <option value="2">М350</option>
                    <option value="3">М250</option>
                </select>

                <input type="text" class="calc-input" id="width" value="0">
                <input type="text" class="calc-input" id="length" value="0">
                <input type="text" class="calc-input" id="height" value="0">
            </div>
        </div>
        <button id="calc" class="button button--green button--small button-calc" data-bs-toggle="collapse"
                data-bs-target=".calculations" aria-expanded="false" aria-controls="calculations">Рассчитать
        </button>
    </div>
    <div class="slab-image">
        <img src="/images/slab.jpg" alt="">
    </div>
</div>
<div class="calculations collapse" id="calculations">
    <h3 class="calculations-title">Расчеты</h3>
    <div class="calculations-table">
        <div class="table-row">
            <div class="first-column">Периметр плиты</div>
            <div class="second-column" id="perimeter">0</div>
            <div class="third-column">м</div>
        </div>
        <div class="table-row">
            <div class="first-column">Площадь подошвы плиты</div>
            <div class="second-column" id="s-of-base">0</div>
            <div class="third-column">м&sup2;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Площадь боковой поверхности</div>
            <div class="second-column" id="s-of-side">0</div>
            <div class="third-column">м&sup2;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Объем бетона</div>
            <div class="second-column" id="v-of-concrete">0</div>
            <div class="third-column">м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Вес бетона</div>
            <div class="second-column" id="weight">0</div>
            <div class="third-column">кг</div>
        </div>
    </div>
    <h3 class="calc-goods-title">Товары для Вас</h3>
    <div class="catalog__goods catalogGoods --grid calc-goods">

    </div>
</div>
<script src="/js/calculate/slab_foundation.js"></script>
