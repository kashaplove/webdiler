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
    let length = parseFloat($('#length').val())/1000;
    let width = parseFloat($('#width').val())/1000;
    let height = parseFloat($('#height').val())/1000;
    let density = parseFloat($('#density').val());

    let volumeOfOne = length*width*height;
    let weightOfOne = volumeOfOne*density;
    console.log('volumeOfOne: ' + volumeOfOne);
    console.log('weightOfOne: ' + weightOfOne);
})
