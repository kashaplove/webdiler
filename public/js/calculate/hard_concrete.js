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
    let typeOfConcrete = $('#type-of-concrete').val();
    let typeOfCement = $('#type-of-cement').val();
    let volumeOfConcrete = parseFloat($('#volume-of-concrete').val());
    let weightOfOneMixture;
    let kOfCement;
    let kOfSand;
    let kOfRubble;
    switch (typeOfCement) {
        case '1':
            switch (typeOfConcrete) {
                case '1':
                    kOfCement = 10;
                    kOfSand = 46;
                    kOfRubble = 70;
                    weightOfOneMixture = 2494;
                    break;
                case '2':
                    kOfCement = 10;
                    kOfSand = 35;
                    kOfRubble = 57;
                    weightOfOneMixture = 2465;
                    break;
                case '3':
                    kOfCement = 10;
                    kOfSand = 28;
                    kOfRubble = 48;
                    weightOfOneMixture = 2332;
                    break;
                case '4':
                    kOfCement = 10;
                    kOfSand = 21;
                    kOfRubble = 39;
                    weightOfOneMixture = 2348;
                    break;
                case '5':
                    kOfCement = 10;
                    kOfSand = 19;
                    kOfRubble = 37;
                    weightOfOneMixture = 2489;
                    break;
                case '6':
                    kOfCement = 10;
                    kOfSand = 12;
                    kOfRubble = 27;
                    weightOfOneMixture = 2476;
                    break;
            }
            break;
        case '2':
            switch (typeOfConcrete) {
                case '1':
                    kOfCement = 10;
                    kOfSand = 58;
                    kOfRubble = 81;
                    weightOfOneMixture = 2494;
                    break;
                case '2':
                    kOfCement = 10;
                    kOfSand = 45;
                    kOfRubble = 66;
                    weightOfOneMixture = 2465;
                    break;
                case '3':
                    kOfCement = 10;
                    kOfSand = 35
                    kOfRubble = 56;
                    weightOfOneMixture = 2332;
                    break;
                case '4':
                    kOfCement = 10;
                    kOfSand = 26;
                    kOfRubble = 45;
                    weightOfOneMixture = 2348;
                    break;
                case '5':
                    kOfCement = 10;
                    kOfSand = 24
                    kOfRubble = 43;
                    weightOfOneMixture = 2489;
                    break;
                case '6':
                    kOfCement = 10;
                    kOfSand = 16;
                    kOfRubble = 32;
                    weightOfOneMixture = 2476;
                    break;
            }
            break;
    }
    let sumOfK = kOfCement+kOfSand+kOfRubble;

    let weightOfMixture = volumeOfConcrete * weightOfOneMixture;

    let weightOfDryMixture = volumeOfConcrete * (weightOfOneMixture-190);
    let weightOfCement = (kOfCement/sumOfK) * weightOfDryMixture;
    let weightOfSand = (kOfSand/sumOfK) * weightOfDryMixture;
    let weightOfRubble = (kOfRubble/sumOfK) * weightOfDryMixture;

    let volumeOfCement = weightOfCement/1680;
    let volumeOfSand = weightOfSand/1300;
    let volumeOfRubble = weightOfRubble/1540;

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
        $('#volume-of-cement').text(volumeOfCement.toFixed(2));
    }

    // Объем воды
    $('#volume-of-water').text('190');

    // Вес щебня
    if (Number.isInteger(weightOfRubble))
    {
        $('#weight-of-rubble').text(weightOfRubble);
    }
    else {
        $('#weight-of-rubble').text(weightOfRubble.toFixed(2));
    }

    // Объем щебня
    if (Number.isInteger(volumeOfRubble))
    {
        $('#volume-of-rubble').text(volumeOfRubble);
    }
    else {
        $('#volume-of-rubble').text(volumeOfRubble.toFixed(2));
    }

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
    let densityOfMixture = weightOfMixture/volumeOfConcrete;
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
