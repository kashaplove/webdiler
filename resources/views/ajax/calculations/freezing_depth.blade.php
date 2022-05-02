<div class="calc-right-container">
    <div class="freezing-depth">
        <div class="freezing-depth-input">
            <div class="calc-right-info-text">
                <div class="slab-type calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Республика, край, область</label>
                </div>
                <div class="slab-width calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Характеристики грунта</label>
                </div>
                <div class="slab-length calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Тепловой режим сооружения</label>

                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">Особенности сооружения</label>
                </div>
                <div class="slab-height calc-right-info">
                    <i class="calc-right-exclamation"></i>
                    <label class="calc-right-text">°С воздуха в помещении</label>
                </div>
            </div>
            <div class="calc-right-input">
                <select class="calc-input select" id="region">
                    <option value="18.05" selected>Московская область</option>
                    <option value="33.75">Татарстан</option>
                    <option value="56.85">Кемеровская область</option>
                </select>
                <select class="calc-input select" id="soil">
                    <option value="0.23" selected>Суглинки и глины</option>
                    <option value="0.28">Супеси, пески мелкие и пылеватые</option>
                    <option value="0.3">Пески гравелистые, крупные и средней крупности</option>
                    <option value="0.34">Крупнообломочные грунты</option>
                </select>
                <select class="calc-input select">
                    <option selected>Отапливаемое</option>
                    <option value="2">Не отапливаемое</option>
                </select>
                <select class="calc-input select">
                    <option selected>Без подвала с полами, устраиваемыми по грунту</option>
                    <option value="2">Без подвала с полами, устраиваемыми на лагах по грунту</option>
                    <option value="3">Без подвала с полами, устраиваемыми по утепленному цокольному перекрытию</option>
                    <option value="4">С подвалом или техническим подпольем</option>
                </select>
                <select class="calc-input select">
                    <option selected>0</option>
                    <option value="2">5</option>
                    <option value="3">10</option>
                    <option value="4">15</option>
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
            <div class="first-column">Нормативная глубина промерзания грунта</div>
            <div class="second-column" id="fr-depth">0</div>
            <div class="third-column">м</div>
        </div>
{{--        <div class="table-row">--}}
{{--            <div class="first-column">Расчетная глубина сезонного промерзания грунта</div>--}}
{{--            <div class="second-column">0.55</div>--}}
{{--            <div class="third-column">м</div>--}}
{{--        </div>--}}
    </div>
</div>
<script src="/js/calculate/freezing_depth.js"></script>
{{--        <iframe style="overflow: hidden" id="iframe" name="iframe" src="https://stroy-calc.ru/widj?str=raschet-fundamenta-plita&bgcol=fff&tcol=000&elcol=03c871&dis=none" width="100%" height="2000px" marginwidth=0 marginheight=0 frameborder=0></iframe>--}}
