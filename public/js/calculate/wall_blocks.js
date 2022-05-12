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
            length = 0.39;
            width = 0.19;
            height = 0.188;
            weight = 15;
            break;
        case 2:
            length = 0.6;
            width = 0.3;
            height = 0.2;
            weight = 25;
            break;
        case 3:
            length = 0.6;
            width = 0.2;
            height = 0.4;
            weight = 25;
            break;
        case 4:
            length = 0.51;
            width = 0.25;
            height = 0.219;
            weight = 23;
            break;
        case 5:
            length = 0.4;
            width = 0.2;
            height = 0.2;
            weight = 23;
            break;
        case 6:
            length = 0.25;
            width = 0.12;
            height = 0.065;
            weight = 3.3;
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
                    kForMixture = 0.0154;
                    break;
                case 2:
                    kForMixture = 0.02035;
                    break;
                case 3:
                    kForMixture = 0.0088;
                    break;
                case 4:
                    kForMixture = 0.0168;
                    break;
                case 5:
                    kForMixture = 0.0299;
                    break;
                case 6:
                    kForMixture = 0.021;
                    break;
            }
            wallWidthResult-=mixture;
            break;
        case '2':
            switch (type) {
                case 1:
                    kForMixture = 0.0299;
                    break;
                case 2:
                    kForMixture = 0.0391;
                    break;
                case 3:
                    kForMixture = 0.017;
                    break;
                case 4:
                    kForMixture = 0.0324;
                    break;
                case 5:
                    kForMixture = 0.0565;
                    break;
                case 6:
                    kForMixture = 0.0439;
                    break;
            }
            squareOfSecWall = (totalLength - 4*length) * totalHeight/100; // С каждой стороны длина
            wallWidthResult = wallWidthResult * 2 - mixture;              // наложения равна length/2
            break;                                                        // 4 стороны => 4*length/2=2*length
        case '3':
            switch (type) {
                case 1:
                    kForMixture = 0.0443;
                    break;
                case 2:
                    kForMixture = 0.058;
                    break;
                case 3:
                    kForMixture = 0.0254;
                    break;
                case 4:
                    kForMixture = 0.048;
                    break;
                case 5:
                    kForMixture = 0.083;
                    break;
                case 6:
                    kForMixture = 0.066;
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
                    kForMixture = 0.0588;
                    break;
                case 2:
                    kForMixture = 0.0765;
                    break;
                case 3:
                    kForMixture = 0.03368;
                    break;
                case 4:
                    kForMixture = 0.0635;
                    break;
                case 5:
                    kForMixture = 0.1095;
                    break;
                case 6:
                    kForMixture = 0.087;
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
            id: 0,
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
            brickImage.html('<img src="/images/keramzitobeton.jpg">');
            break;
        case '2':
            brickImage.html('<img src="/images/calc_wall_blocks/gazobeton.jpg">');
            break;
        case '3':
            brickImage.html('<img src="/images/calc_wall_blocks/penobeton.jpg">');
            break;
        case '4':
            brickImage.html('<img src="/images/calc_wall_blocks/keramkrupnoformat.jpeg">');
            break;
        case '5':
            brickImage.html('<img src="/images/calc_wall_blocks/teploblock.png">');
            break;
        case '6':
            brickImage.html('<img src="/images/calc_wall_blocks/brick-stroy.png">');
            break;

    }
})
