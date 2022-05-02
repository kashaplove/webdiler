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
    let typeOfMixture = $('#type-of-mixture').val();
    let typeOfCement = $('#type-of-cement').val();
    let volumeOfMixture = parseFloat($('#volume-of-mixture').val());
    let weightOfOneMixture;
    let kOfCement;
    let kOfSand;
    switch (typeOfCement) {
        case '1':
            switch (typeOfMixture) {
                case '1':
                    kOfCement = 10;
                    kOfSand = 74;
                    weightOfOneMixture = 2056;
                    break;
                case '2':
                    kOfCement = 10;
                    kOfSand = 54;
                    weightOfOneMixture = 2075;
                    break;
                case '3':
                    kOfCement = 10;
                    kOfSand = 43;
                    weightOfOneMixture = 2095;
                    break;
                case '4':
                    kOfCement = 10;
                    kOfSand = 32.5;
                    weightOfOneMixture = 2134;
                    break;
                case '5':
                    kOfCement = 10;
                    kOfSand = 25;
                    weightOfOneMixture = 2174;
                    break;
            }
            break;
        case '2':
            switch (typeOfMixture) {
                case '1':
                    kOfCement = 10;
                    kOfSand = 74;
                    weightOfOneMixture = 2048;
                    break;
                case '2':
                    kOfCement = 10;
                    kOfSand = 54;
                    weightOfOneMixture = 2063;
                    break;
                case '3':
                    kOfCement = 10;
                    kOfSand = 43
                    weightOfOneMixture = 2079;
                    break;
                case '4':
                    kOfCement = 10;
                    kOfSand = 39;
                    weightOfOneMixture = 2111;
                    break;
                case '5':
                    kOfCement = 10;
                    kOfSand = 30;
                    weightOfOneMixture = 2142;
                    break;
            }
            break;
    }
    let sumOfK = kOfCement+kOfSand;

    let weightOfMixture = volumeOfMixture * weightOfOneMixture;

    let weightOfDryMixture = volumeOfMixture * (weightOfOneMixture-215);
    let weightOfCement = (kOfCement/sumOfK) * weightOfDryMixture;
    let weightOfSand = (kOfSand/sumOfK) * weightOfDryMixture;

    let volumeOfCement = weightOfCement/1300;
    let volumeOfSand = weightOfSand/1750;

    // Вес цемента
    if (Number.isInteger(weightOfCement))
    {
        $('#weight-of-cement').text(weightOfCement);
    }
    else {
        $('#weight-of-cement').text(weightOfCement.toFixed(2));
    }

    // Объем цемента
    if (Number.isInteger(volumeOfCement))
    {
        $('#volume-of-cement').text(volumeOfCement);
    }
    else {
        $('#volume-of-cement').text(volumeOfCement.toFixed(3));
    }

    // Объем воды
    $('#volume-of-water').text('215');

    // Вес песка
    if (Number.isInteger(weightOfSand))
    {
        $('#weight-of-sand').text(weightOfSand);
    }
    else {
        $('#weight-of-sand').text(weightOfSand.toFixed(2));
    }

    // Объем песка
    if (Number.isInteger(volumeOfSand))
    {
        $('#volume-of-sand').text(volumeOfSand);
    }
    else {
        $('#volume-of-sand').text(volumeOfSand.toFixed(2));
    }

    // Плотность смеси
    let densityOfMixture = weightOfMixture/volumeOfMixture;
    if (Number.isInteger(densityOfMixture))
    {
        $('#density-of-mixture').text(densityOfMixture);
    }
    else {
        $('#density-of-mixture').text(densityOfMixture.toFixed(2));
    }

    $('#weight-of-mixture').text(weightOfMixture);

})

// // Картинка
// $('#brick-type').on('change', function () {
//
//     // console.log('changed!');
//     let brickImage = $('.brick-image');
//     switch ($('#brick-type').val())
//     {
//         case '1':
//             brickImage.html('<img src="/images/calc_bricks/brick-nf.jpeg">');
//             break;
//         case '2':
//             brickImage.html('<img src="/images/calc_bricks/brick-polnotel.jpeg">');
//             break;
//         case '3':
//             brickImage.html('<img src="/images/calc_bricks/brick-14nf.jpg">');
//             break;
//         case '4':
//             brickImage.html('<img src="/images/calc_bricks/brick-21nf.jpg">');
//             break;
//
//     }
// })
