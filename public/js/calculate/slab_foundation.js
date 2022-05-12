$('.calc-input').keyup(function () {
    (this).value = (this).value.replace(/,/g,'.');
    (this).value = (this).value.replace(/[A-Za-zА-Яа-яЁё]/g, '');
    // if ((this).value.toString().slice(-1) === '.' && (this).value.toString().slice(-2) === '.')
    // {
    //     (this).value = (this).value.replace((this).value.toString().slice(-1), '');
    // }
    // (this).value = (this).value.replace(/(.)\1{1,}/gu, '$1');
})
$('#calc').click(function () {
    let width = parseFloat($('#width').val());
    let length = parseFloat($('#length').val());
    let height = parseFloat($('#height').val());

    let perimeter = 2*(width+length);
    let sOfBase = width*(length);
    let sOfSide = (2*height*length+2*height*width)/1000;
    let vOfConcrete = height*length*width/1000;
    let weight = (width*length*height/1000)*2350;

    if (Number.isInteger(perimeter))
    {
        $('#perimeter').text(perimeter);
    }
    else {
        $('#perimeter').text(perimeter.toFixed(2));
    }

    if (Number.isInteger(sOfBase))
        $('#s-of-base').text(sOfBase);
    else $('#s-of-base').text(sOfBase.toFixed(2));

    if (Number.isInteger(sOfSide))
        $('#s-of-side').text(sOfSide);
    else $('#s-of-side').text(sOfSide.toFixed(2));

    if (Number.isInteger(vOfConcrete))
        $('#v-of-concrete').text(vOfConcrete);
    else $('#v-of-concrete').text(vOfConcrete.toFixed(2));

    if (Number.isInteger(weight))
        $('#weight').text(weight);
    else $('#weight').text(weight.toFixed(2));

    $.ajax({
        url: "/calculations/ajax_get-goods",
        type: "GET",
        data: {
            id: 2,
            nameOfGood: 'плита',
            name: 'плита'
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
function hello(id) {

    $.ajax({
        url: "add-to-cart-from-calc",
        type: "POST",
        data: {
            id: id,
            name: 'плита'
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.catalogGoods').html(data);
            // console.log(data)
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
