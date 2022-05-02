<div class="calc-right-container">
    <div class="bricks">
        <div class="bricks-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Необходимое количество бетона (м&sup3;)</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Марка прочности</label>
                </div>
                <div class="slab-length calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Крупный заполнитель</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Мелкий заполнитель</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Марка цемента</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Подвижность смеси</label>
                </div>
            </div>
            <div class="calc-right-input">
                <input type="text" class="calc-input"
                       onkeyup="this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '');">
                <select class="calc-input select">
                    <option selected>М7,5 (В0,5)</option>
                    <option value="2">М10 (В0,75)</option>
                    <option value="3">М15 (В1)</option>
                    <option value="4">М20 (В1,5)</option>
                    <option value="5">М25 (В2)</option>
                    <option value="5">М35 (В2,5)</option>
                    <option value="5">М50 (В7,5)</option>
                </select>
                <select class="calc-input select">
                    <option selected>Керамзит</option>
                    <option value="2">Полистирол</option>
                </select>
                <select class="calc-input select">
                    <option selected>Песок карьерный</option>
                    <option value="2">Песок речной</option>
                    <option value="3">Керамзитовый песок</option>
                </select>
                <select class="calc-input select">
                    <option selected>ПЦ 300</option>
                    <option value="2">ПЦ 400</option>
                    <option value="3">ПЦ 500</option>
                </select>
                <select class="calc-input select">
                    <option selected>Ж1</option>
                    <option value="2">П1</option>
                    <option value="3">П2</option>
                    <option value="4">П3</option>
                    <option value="5">П4</option>
                    <option value="6">Ж2</option>
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
            <div class="first-column">Количество кирпича</div>
            <div class="second-column">12</div>
            <div class="third-column">м3</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий вес кирпича</div>
            <div class="second-column">28200</div>
            <div class="third-column">кг</div>
        </div>
        <div class="table-row">
            <div class="first-column">Общий объем кирпича</div>
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
