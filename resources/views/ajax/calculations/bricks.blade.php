<div class="calc-right-container">
    <div class="bricks">
        <div class="bricks-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Размер (Д*Ш*В) или вид кирпича</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Общая длина всех стен (м)</label>
                </div>
                <div class="slab-length calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Высота стен по углам (см)</label>

                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Толщина стен</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Толщина раствора в кладке</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Общая площадь окон и дверей (м&sup2;)</label>
                </div>
            </div>
            <div class="calc-right-input">
                <select class="calc-input select" id="brick-type">
                    <option value="1" selected>250*120*65 Облицовочный (одинарный)</option>
                    <option value="2">250*120*65 1 НФ (одинарный)</option>
                    <option value="3">250*120*88 1,4 НФ (полуторный)</option>
                    <option value="4">250*120*140 2,1 НФ (двойной)</option>
                </select>
                <input type="text" class="calc-input" id="total-length" value="30">
                <input type="text" class="calc-input" id="total-height" value="300">
                <select class="calc-input select" id="wall-width">
                    <option value="1" selected>Половина кирпича</option>
                    <option value="2">В 1 кирпич</option>
                    <option value="3">В 1,5</option>
                    <option value="4">В 2</option>
                </select>
                <select class="calc-input select" id="mixture">
                    <option value="1" selected>Раствор 10</option>
                    <option value="2">Раствор 15</option>
                    <option value="3">Раствор 20</option>
                </select>
                <input type="text" class="calc-input" id="square-of-windows" value="0">
            </div>
        </div>
        <button id="calc" class="button button--green button--small button-calc" data-bs-toggle="collapse"
                data-bs-target=".calculations" aria-expanded="false" aria-controls="calculations">Рассчитать
        </button>
    </div>
    <div class="brick-image">
        <img src="/images/calc_bricks/brick-nf.jpeg">
    </div>
</div>
<div class="calculations collapse" id="calculations">
    <h3 class="calculations-title">Расчеты</h3>
    <div class="calculations-table">
        <div class="table-row">
            <div class="first-column">Периметр строения</div>
            <div class="second-column" id="perimeter">0</div>
            <div class="third-column">м</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общая площадь кладки</div>
            <div class="second-column" id="wall-square">0</div>
            <div class="third-column">м&sup2;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Толщина стены</div>
            <div class="second-column" id="wall-width-result">0</div>
            <div class="third-column">мм</div>
        </div>
        <div class="table-row">
            <div class="first-column">Количество кирпича</div>
            <div class="second-column" id="number-of-bricks">0</div>
            <div class="third-column">шт</div>
        </div>
        <div class="table-row">
            <div class="first-column">Вес одного кирпича</div>
            <div class="second-column" id="weight-of-one">0</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий вес кирпича</div>
            <div class="second-column" id="weight-of-all">0</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий объем кирпича</div>
            <div class="second-column" id="volume">0</div>
            <div class="third-column">м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Кол-во раствора на всю кладку</div>
            <div class="second-column" id="mixture-volume">0</div>
            <div class="third-column">м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Примерный вес раствора</div>
            <div class="second-column" id="weight-of-mixture">0</div>
            <div class="third-column">кг</div>
        </div>
    </div>
    <h3 class="calc-goods-title">Товары для Вас</h3>
    <div class="catalog__goods catalogGoods --grid calc-goods">

    </div>
</div>
<script src="/js/calculate/bricks.js"></script>
