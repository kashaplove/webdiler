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
    let type = parseInt($('#brick-type').val());
    let length;
    let height;
    let width = 0.12;
    let weight;
    switch (type) {
        case 1:
            length = 0.25;
            height = 0.065;
            weight = 3.6;
            break;
        case 2:
            length = 0.25;
            height = 0.065;
            weight = 3.6;
            break;
        case 3:
            length = 0.25;
            height = 0.088;
            weight = 4.3;
            break;
        case 4:
            length = 0.25;
            height = 0.14;
            weight = 7.2;
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
                    kForMixture = 0.021;
                    break;
                case 2:
                    kForMixture = 0.021;
                    break;
                case 3:
                    kForMixture = 0.0175;
                    break;
                case 4:
                    kForMixture = 0.013;
                    break;
            }
            wallWidthResult-=mixture;
            break;
        case '2':
            switch (type) {
                case 1:
                    kForMixture = 0.043;
                    break;
                case 2:
                    kForMixture = 0.043;
                    break;
                case 3:
                    kForMixture = 0.035;
                    break;
                case 4:
                    kForMixture = 0.028;
                    break;
            }
            squareOfSecWall = (totalLength - 4*length) * totalHeight/100; // С каждой стороны длина
            wallWidthResult = wallWidthResult * 2 - mixture;              // наложения равна length/2
            break;                                                        // 4 стороны => 4*length/2=2*length
        case '3':
            switch (type) {
                case 1:
                    kForMixture = 0.066;
                    break;
                case 2:
                    kForMixture = 0.066;
                    break;
                case 3:
                    kForMixture = 0.053;
                    break;
                case 4:
                    kForMixture = 0.043;
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
                    kForMixture = 0.085;
                    break;
                case 2:
                    kForMixture = 0.085;
                    break;
                case 3:
                    kForMixture = 0.07;
                    break;
                case 4:
                    kForMixture = 0.053;
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
    let squareOfBrick = length * height;

    // Кол-во кирпичей
    let numberOfBricks = squareOfWall / squareOfBrick;
    $('#number-of-bricks').text(Math.round(numberOfBricks));

    // Вес одного и всех кирпичей
    $('#weight-of-one').text(weight);
    $('#weight-of-all').text((numberOfBricks*weight).toFixed(2));

    // Объем всех кирпичей
    let volume = (width-mixture)*(height-mixture)*(length-mixture)*numberOfBricks;
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

    let nameOfSelect = $('#brick-type option:selected').text();
    let nameOfGood = nameOfSelect.slice(0,11);
    let numberOfGoods = parseInt($('#number-of-bricks').text());

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
$('#brick-type').on('change', function () {

    // console.log('changed!');
    let brickImage = $('.brick-image');
    switch ($('#brick-type').val())
    {
        case '1':
            brickImage.html('<img src="/images/calc_bricks/brick-nf.jpeg">');
            break;
        case '2':
            brickImage.html('<img src="/images/calc_bricks/brick-polnotel.jpeg">');
            break;
        case '3':
            brickImage.html('<img src="/images/calc_bricks/brick-14nf.jpg">');
            break;
        case '4':
            brickImage.html('<img src="/images/calc_bricks/brick-21nf.jpg">');
            break;

    }
})
