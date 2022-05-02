$('#calc').click(function () {
    let region = parseFloat($('#region').val());
    let soil = parseFloat($('#soil').val());
    let norm = Math.sqrt(region)*soil;
    if (Number.isInteger(norm))
    {
        $('#fr-depth').text(norm);
    }
    else {
        $('#fr-depth').text(norm.toFixed(2));
    }
})
