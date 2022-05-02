/* JS Document */
cartSum();

function cartSum() {
    var allGoods = document.querySelectorAll('.total-price-for-one');
    var allChbox = document.querySelectorAll('.checkbox');
    let arr = [];
    let sum = 0;
    for (i = 0; i < allGoods.length; i++) {
        arr[i] = allGoods[i];
        arr[i] = arr[i].innerHTML;
        if (allChbox[i].checked)
        {
            sum += parseInt(arr[i]);
        }
    }
    var cartTotal = document.getElementById('cart-total');
    var str = sum.toLocaleString();
    cartTotal.innerHTML = String(str);
}

function initQuantity(id) {

    // if(parseInt($('#quantity_input'))<=1)
    // {
    //     $('.el-input-number__decrease').classList.add("is-disabled");
    // }

    // Handle product quantity input
    var input = $('#quantity_input' + id);
    var incButton = $('#quantity_inc_button' + id);
    var decButton = $('#quantity_dec_button' + id);


    var originalVal;
    var endVal;

    incButton.on('click', function () {
        originalVal = input.val();
        endVal = parseFloat(originalVal) + 1;
        input.val(endVal);
    });

    decButton.on('click', function () {
        originalVal = input.val();
        if (originalVal > 1) {
            endVal = parseFloat(originalVal) - 1;
            input.val(endVal);
        }
    });
    setInterval(run(id), 1000);
}
function run(id) {
    var input = $('#quantity_input' + id);
    var originalVal = input.val();
    var priceForOne = document.getElementById('price-for-one' + id);
    let pivotId;

    let editedInput;
    var totalPrice = document.getElementById('total-price' + id);

    pivotId = input.data("ids");
    editedInput = parseInt((input).val());
    totalPrice.innerHTML = editedInput * parseInt(priceForOne.innerHTML);
    cartSum();
    originalVal = editedInput;

    $.ajax({
        url: "edit-cart",
        type: "PATCH",
        data: {
            editedInput: editedInput,
            pivotId: pivotId,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

function deleteItem(id) {
    $.ajax({
        url: "/cart-delete",
        type: "DELETE",
        data: {
            id: id
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.cartAccordion__body').html(data);
            run(id);
        },
        error: (data) => {
            console.log(data)
        }
    });
}

function addToEstimates() {
    var allChbox = $('.checkbox');
    var allNames = $('.cartAccordionBody__title');
    var allQty = $('.el-input__inner');

    var checkedNames = [];
    var checkedQty = [];
    var k = 0;
    for (i=0;i<allChbox.length;i++)
    {
        if (allChbox[i].checked)
        {
            checkedNames[k] = allNames[i].innerHTML;
            checkedQty[k] = allQty.eq(i).val();
            if (parseInt(checkedQty[k])===0)
                break;
            k+=1;
        }
    }
    if (checkedNames[0]!=null && parseInt(checkedQty[k])!==0) {
        document.getElementById('note').classList.add("visible");
        setTimeout(function close(){
            document.getElementById('note').classList.remove("visible");
        },5000);
        document.getElementById('el-notification__closeBtn').addEventListener('click', event =>
        {
            document.getElementById('note').classList.remove("visible");
        })
        $.ajax({
            url: "/estimates",
            type: "POST",
            data: {
                checkedNames: checkedNames,
                checkedQty: checkedQty,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            },
            error: (data) => {
                console.log(data)
            }
        });
    }
}

function handleChange(input) {
    if (input.value <= 0) input.value = 1;
}

function changeChBox(id) {
    let chBoxValue = document.getElementById('chbox'+id).checked;
    $.ajax({
        url: "/edit-chbox",
        type: "PATCH",
        data: {
            id: id,
            chBoxValue: chBoxValue,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            console.log(data)
        },
        error: (data) => {
            console.log(data)
        }
    });
}





// РАСЧЕТ ПО НАЖАТИЮ НА ENTER

// let editedInput;
// var e;
// var em;
// $(document).ready(function() {
//     $('.el-input__inner').keydown(function(e) {
//         if(e.keyCode === 13) {
//             cartSum();
//             editedInput = $('#quantity_input' + id).val();
//             e = parseInt(editedInput) * parseInt(document.getElementById('price-for-one' + id).innerHTML);
//             em = e.toLocaleString();
//             document.getElementById('total-price' + id).innerHTML = em;
//         }
//     });
// });


// ТЕСТЫ

// var input = [];
// var incButton = [];
// var decButton = [];
// var totalPrice = [];
// var priceForOne = [];
//
// var n = document.querySelectorAll('.total-price-for-one').length;
//
// for (i = 0; i < n; i++) {
//     input[i] = document.querySelectorAll('.el-input__inner')[i];
//     incButton[i] = document.querySelectorAll('.el-input-number__increase')[i];
//     decButton[i] = document.querySelectorAll('.el-input-number__decrease')[i];
//     totalPrice[i] = document.querySelectorAll('.total-price-for-one')[i];
//     priceForOne[i] = document.querySelectorAll('.price-single')[i];
//
//     var originalVal;
//     var endVal;
// }


