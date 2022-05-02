<div class="calc-right-container">
    <div class="bricks">
        <div class="bricks-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Необходимое количество раствора (м&sup3;)</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Марка прочности</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Марка цемента</label>
                </div>
            </div>
            <div class="calc-right-input">
                <input type="text" class="calc-input" value="1" id="volume-of-mixture">
                <select class="calc-input select" id="type-of-mixture">
                    <option value="1" selected>М50 (В3,5)</option>
                    <option value="2">М75 (В7,5)</option>
                    <option value="3">М100 (В7,5)</option>
                    <option value="4">М150 (В10)</option>
                    <option value="5">М200 (В15)</option>
                </select>
                <select class="calc-input select" id="type-of-cement">
                    <option selected value="1">ПЦ 400</option>
                    <option value="2">ПЦ 500</option>
                </select>
            </div>
        </div>
        <button id="calc" class="button button--green button--small button-calc" data-bs-toggle="collapse"
                data-bs-target=".calculations" aria-expanded="false" aria-controls="calculations">Рассчитать
        </button>
    </div>
</div>
<div class="calculations collapse" id="calculations">
    <h3 class="calculations-title">Расчеты</h3>
    <div class="calculations-table">
        <div class="table-row">
            <div class="first-column">Количество цемента</div>
            <div class="second-column" id="weight-of-cement">0</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Объем цемента</div>
            <div class="second-column" id="volume-of-cement">0</div>
            <div class="third-column">м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Количество воды</div>
            <div class="second-column" id="volume-of-water">0</div>
            <div class="third-column">литров</div>
        </div>
        <div class="table-row">
            <div class="first-column">Песок</div>
            <div class="second-column" id="weight-of-sand">0</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Объем песка</div>
            <div class="second-column" id="volume-of-sand">0</div>
            <div class="third-column">м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Плотность бетонной смеси</div>
            <div class="second-column" id="density-of-mixture">0</div>
            <div class="third-column">кг/м&sup3;</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий вес бетона</div>
            <div class="second-column" id="weight-of-mixture">0</div>
            <div class="third-column">кг</div>
        </div>
    </div>
</div>
<script src="/js/calculate/building_mixture.js"></script>
