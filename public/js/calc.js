$('.sidebar__item').click(function() {
    $('.sidebar__item').removeClass('item-active');
    $(this).toggleClass('item-active');
    let id = $(this).attr('id');
    $.ajax({
        url: "/calculations/ajax_" + id,
        type: "GET",
        success: (data) => {
            $('.calc-right').html(data);
            // let positionParameters = location.pathname.indexOf('?');
            // let url = location.pathname.substring(positionParameters,location.pathname.length);
            // let newURL = url + '?'; // http://127.0.0.1:8000/calculations?
            // newURL += 'calculate=' + id; // http://127.0.0.1:8000/calculations?calculate=bricks
            // history.pushState({}, '', newURL);
        },
        error: (data) => {
            console.log(data)
        }
    });
});


