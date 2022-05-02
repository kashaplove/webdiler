function hello(id) {

    $.ajax({
        url: "add-to-cart",
        type: "POST",
        data: {
            id: id
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

// function close() {
//     document.getElementById('note').classList.remove("visible");
//     console.log('Закрываем!')
// }
