$('.calc-input').keyup(function () {
    (this).value = (this).value.replace(/,/g, '.');
    (this).value = (this).value.replace(/[A-Za-zА-Яа-яЁё]/g, '');
    // if ((this).value.toString().slice(-1) === '.' && (this).value.toString().slice(-2) === '.')
    // {
    //     (this).value = (this).value.replace((this).value.toString().slice(-1), '');
    // }
    // (this).value = (this).value.replace(/(.)\1{1,}/gu, '$1');
})
$('#calc').click(function () {
    let type = parseInt($('#block-type').val());
    let length;
    let height;
    let width;
    let weight;
    switch (type) {
        case 1:
            length = 0.51;
            width = 0.25;
            height = 0.219;
            weight = 20.7;
            break;
        case 2:
            length = 0.44;
            width = 0.25;
            height = 0.219;
            weight = 17.6;
            break;
        case 3:
            length = 0.398;
            width = 0.28;
            height = 0.215;
            weight = 18.4;
            break;
        case 4:
            length = 0.398;
            width = 0.25;
            height = 0.219;
            weight = 17.7;
            break;
        case 5:
            length = 0.38;
            width = 0.25;
            height = 0.219;
            weight = 17;
            break;
        case 6:
            length = 0.5;
            width = 0.12;
            height = 0.219;
            weight = 10.5;
            break;
        case 7:
            length = 0.5;
            width = 0.08;
            height = 0.219;
            weight = 7.2;
            break;
        case 8:
            length = 0.25;
            width = 0.25;
            height = 0.14;
            weight = 7.4;
            break;
        case 9:
            length = 0.25;
            width = 0.12;
            height = 0.14;
            weight = 3.9;
            break;
    }

    // РАСТВОР
    // let mixtureVal = $('#mixture').val();
    let mixture;
    // if (mixtureVal === '1')
    mixture = 0.01;
    // else if (mixtureVal === '2')
    //     mixture = 0.015;
    // else mixture = 0.02;
    length += mixture;
    height += mixture;
    width += mixture;

    //Периметр
    $('#perimeter').text($('#total-length').val());

    // Периметр и высота
    let totalLength = parseFloat($('#total-length').val());
    let totalHeight = parseFloat($('#total-height').val());

    // Площадь наложения
    let squareOfCorners = 4 * totalHeight * length / 200;
    // Площадь окон и дверей
    let squareOfWindows = parseFloat($('#square-of-windows').val());
    // Площадь кладки с учетом площадей наложения и окон
    let squareOfWall = totalLength * totalHeight / 100;
    squareOfWall = squareOfWall-squareOfCorners - squareOfWindows;
    let squareOfWallForMixture = squareOfWall;



    //Площадь кладки
    if (Number.isInteger(squareOfWall))
    {
        $('#wall-square').text(squareOfWall);
    }
    else {
        $('#wall-square').text((squareOfWall.toFixed(2)).toLocaleString('ru'));
    }

    //Площади внутренних коробок
    let squareOfSecWall=0;
    let squareOfThirdWall=0;
    let squareOfFourthWall=0;
    let wallWidthResult = width;

    // Проверка толщины стены (полкирпича, в один, в полтора, в два
    let wallWidth = $('#wall-width').val();
    let kForMixture; // Кол-во необходимого раствора на 1м2 кладки (м3)
    switch (wallWidth) {
        case '1':
            switch (type) {
                case 1:
                    kForMixture = 0.0168;
                    break;
                case 2:
                    kForMixture = 0.0175;
                    break;
                case 3:
                    kForMixture = 0.0203;
                    break;
                case 4:
                    kForMixture = 0.0181;
                    break;
                case 5:
                    kForMixture = 0.0184;
                    break;
                case 6:
                    kForMixture = 0.0083;
                    break;
                case 7:
                    kForMixture = 0.0055;
                    break;
                case 8:
                    kForMixture = 0.0278;
                    break;
                case 9:
                    kForMixture = 0.014;
                    break;
            }
            wallWidthResult-=mixture;
            break;
        case '2':
            switch (type) {
                case 1:
                    kForMixture = 0.0324;
                    break;
                case 2:
                    kForMixture = 0.0294;
                    break;
                case 3:
                    kForMixture = 0.0282;
                    break;
                case 4:
                    kForMixture = 0.0278;
                    break;
                case 5:
                    kForMixture = 0.027;
                    break;
                case 6:
                    kForMixture = 0.0306;
                    break;
                case 7:
                    kForMixture = 0.0295;
                    break;
                case 8:
                    kForMixture = 0.0278;
                    break;
                case 9:
                    kForMixture = 0.0267;
                    break;
            }
            squareOfSecWall = (totalLength - 4*length) * totalHeight/100; // С каждой стороны длина
            wallWidthResult = wallWidthResult * 2 - mixture;              // наложения равна length/2
            break;                                                        // 4 стороны => 4*length/2=2*length
        case '3':
            switch (type) {
                case 1:
                    kForMixture = 0.0464;
                    break;
                case 2:
                    kForMixture = 0.0446;
                    break;
                case 3:
                    kForMixture = 0.0462;
                    break;
                case 4:
                    kForMixture = 0.0436;
                    break;
                case 5:
                    kForMixture = 0.0432;
                    break;
                case 6:
                    kForMixture = 0.0374;
                    break;
                case 7:
                    kForMixture = 0.0338;
                    break;
                case 8:
                    kForMixture = 0.0537;
                    break;
                case 9:
                    kForMixture = 0.0389;
                    break;
            }
            squareOfCorners*=2
            squareOfSecWall = (totalLength - 4*length) * totalHeight/100;
            squareOfThirdWall = (totalLength - 6*length) * totalHeight/100;
            wallWidthResult = wallWidthResult * 3 - mixture;
            break;
        case '4':
            switch (type) {
                case 1:
                    kForMixture = 0.06;
                    break;
                case 2:
                    kForMixture = 0.0553;
                    break;
                case 3:
                    kForMixture = 0.0532;
                    break;
                case 4:
                    kForMixture = 0.0524;
                    break;
                case 5:
                    kForMixture = 0.0512;
                    break;
                case 6:
                    kForMixture = 0.0569;
                    break;
                case 7:
                    kForMixture = 0.0547;
                    break;
                case 8:
                    kForMixture = 0.0537;
                    break;
                case 9:
                    kForMixture = 0.0516;
                    break;
            }
            squareOfCorners*=3
            squareOfSecWall = (totalLength - 4*length) * totalHeight/100;
            squareOfThirdWall = (totalLength - 6*length) * totalHeight/100;
            squareOfFourthWall = (totalLength - 8*length) * totalHeight/100;
            wallWidthResult = wallWidthResult * 4 - mixture;
            break;
    }
    $('#wall-width-result').text(Math.round(wallWidthResult*1000));

    // Площадь каждой коробки (внешняя, вторая, третья и т.д)
    squareOfWall = squareOfWall + squareOfSecWall + squareOfThirdWall + squareOfFourthWall - squareOfCorners;

    // Площадь одного кирпича
    let squareOfBlock = length * height;

    // Кол-во кирпичей
    let numberOfBlocks = squareOfWall / squareOfBlock;
    $('#number-of-blocks').text(Math.round(numberOfBlocks));

    // Вес одного и всех кирпичей
    $('#weight-of-one').text(weight);
    $('#weight-of-all').text((numberOfBlocks*weight).toFixed(2));

    // Объем всех кирпичей
    let volume = (width-mixture)*(height-mixture)*(length-mixture)*numberOfBlocks;
    if (Number.isInteger(volume))
    {
        $('#volume').text(volume);
    }
    else {
        $('#volume').text(volume.toFixed(2));
    }

    // Кол-во раствора
    let volumeOfMixture = kForMixture * squareOfWallForMixture;
    if (Number.isInteger(volume))
    {
        $('#mixture-volume').text(volumeOfMixture);
    }
    else {
        $('#mixture-volume').text(volumeOfMixture.toFixed(2));
    }

    //Вес раствора
    let weightOfMixture = volumeOfMixture * 1900;
    if (Number.isInteger(volume))
    {
        $('#weight-of-mixture').text(weightOfMixture);
    }
    else {
        $('#weight-of-mixture').text(weightOfMixture.toFixed(2));
    }

    let nameOfSelect = $('#block-type option:selected').text();
    let nameOfGood = nameOfSelect.slice(0,11);
    let numberOfGoods = parseInt($('#number-of-blocks').text());

    $.ajax({
        url: "/calculations/ajax_get-goods",
        type: "GET",
        data: {
            id: 1,
            nameOfGood: nameOfGood,
            numberOfGoods: numberOfGoods,
            name: 'блок'
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.catalog__goods.catalogGoods.--grid').html(data);
        },
        error: (data) => {
            console.log(data)
        }
    });
})

// Картинка
$('#block-type').on('change', function () {

    // console.log('changed!');
    let brickImage = $('.block-image');
    switch ($('#block-type').val())
    {
        case '1':
            brickImage.html('<img src="/images/calc_keramik/143nf.jpg">');
            break;
        case '2':
            brickImage.html('<img src="/images/calc_keramik/1235nf.jpg">');
            break;
        case '3':
            brickImage.html('<img src="/images/calc_keramik/1235nf.jpg">');
            break;
        case '4':
            brickImage.html('<img src="/images/calc_keramik/112nf.jpg">');
            break;
        case '5':
            brickImage.html('<img src="/images/calc_keramik/112nf.jpg">');
            break;
        case '6':
            brickImage.html('<img src="/images/calc_keramik/674nf.jpg">');
            break;
        case '7':
            brickImage.html('<img src="/images/calc_keramik/449nf.jpg">');
            break;
        case '8':
            brickImage.html('<img src="/images/calc_keramik/45nf.jpg">');
            break;
        case '9':
            brickImage.html('<img src="/images/calc_keramik/21nf.jpg">');
            break;
    }
})
function hello(id) {
    let number = parseInt($('#number-of-blocks').text());

    $.ajax({
        url: "add-to-cart-from-calc",
        type: "POST",
        data: {
            id: id,
            number: number,
            name: 'блок'
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.catalogGoods').html(data);
        },
        error: (data) => {
            console.log(data)
        }
    });
    document.querySelector('.headerCartBody__title').innerHTML = '';
    document.querySelector('.headerCartBody__title').innerHTML = document.getElementById('catalogGoods__title'+id).innerHTML;
    let imgCartPopup = document.getElementById('el-notification__img')
    let imgOfGood = document.getElementById('catalogGoods__img'+id);
    let imgAddress = imgOfGood.getAttribute("src");
    imgCartPopup.setAttribute("src", imgAddress)


    document.getElementById('note').classList.add("visible");
    setTimeout(function close(){
        document.getElementById('note').classList.remove("visible");
    },5000);
    document.getElementById('el-notification__closeBtn').addEventListener('click', event =>
    {
        document.getElementById('note').classList.remove("visible");
    })
}
