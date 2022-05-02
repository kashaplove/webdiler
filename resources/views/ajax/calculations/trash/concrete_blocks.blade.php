<div class="calc-right-container">
    <div class="bricks">
        <div class="bricks-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Длина блока (мм)</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Ширина блока (мм)</label>
                </div>
                <div class="slab-length calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Высота блока (мм)</label>

                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Плотность (кг/м&sup3;)</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Общая длина всех стен (м)</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Общая площадь окон и дверей (м&sup2;)</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Высота стен по углам</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Толщина стен</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Толщина раствора в кладке</label>
                </div>
            </div>
            <div class="calc-right-input">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <select class="calc-input select">
                    <option selected>400</option>
                    <option value="2">250</option>
                    <option value="3">300</option>
                    <option value="4">350</option>
                    <option value="5">500</option>
                    <option value="6">600</option>
                    <option value="7">700</option>
                </select>

                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <select class="calc-input select">
                    <option selected>Половина блока</option>
                    <option value="2">В 1 блок</option>
                    <option value="3">В 1,5</option>
                    <option value="4">В 2</option>
                </select>
                <select class="calc-input select">
                    <option selected>Раствор 10</option>
                    <option value="2">Раствор 15</option>
                    <option value="3">Раствор 20</option>
                </select>
            </div>
        </div>
        <button class="button button--green button--small button-calc" data-bs-toggle="collapse"
                data-bs-target=".calculations" aria-expanded="false" aria-controls="calculations">Рассчитать
        </button>
    </div>
</div>
<div class="calculations collapse" id="calculations">
    <h3 class="calculations-title">Расчеты</h3>
    <div class="calculations-table">
        <div class="table-row">
            <div class="first-column">Периметр строения</div>
            <div class="second-column">30</div>
            <div class="third-column">м</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общая площадь кладки</div>
            <div class="second-column">48</div>
            <div class="third-column">м2</div>
        </div>
        <div class="table-row">
            <div class="first-column">Толщина стены</div>
            <div class="second-column">7</div>
            <div class="third-column">м2</div>
        </div>
        <div class="table-row">
            <div class="first-column">Количество блоков</div>
            <div class="second-column">12</div>
            <div class="third-column">м3</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий вес блоков</div>
            <div class="second-column">28200</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий объем блоков</div>
            <div class="second-column">28200</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Кол-во раствора на всю кладку</div>
            <div class="second-column">28200</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Примерный вес раствора</div>
            <div class="second-column">28200</div>
            <div class="third-column">кг</div>
        </div>
    </div>
</div>

{{--<script src=""></script>--}}

