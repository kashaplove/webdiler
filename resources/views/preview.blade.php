<!DOCTYPE html>
<html>
<head>
    <title>WEBDILER - смета</title>
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
    {{--    <link href="{{ asset('css/pdf.css') }}" type="text/css" rel="stylesheet"/>--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="https://webdiler.ru/favicons/favicon-32x32.png"/>--}}

</head>
<style>
    body {
        background-color: #c0c0c0;
        font-family: DejaVu Sans, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: content-box;
    }

    .container {
        width: 80%;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-self: center;
    }

    .title {
        margin-top: 70px;
        text-align: center;
    }

    .button {
        font-weight: bold;
        font-size: 14px;
        display: inline-flex;
        padding: 0 25px;
        text-align: center;
        border-radius: 5px;
        align-items: center;
        justify-content: center;
        transition: .3s;
        text-decoration: none;
        color: #fff;
        background-color: #03c871;
        width: 200px;
        height: 40px;
    }

    .button:hover {
        background-color: #029655
    }

    .button-generate {
        display: flex;
        align-self: flex-end;
        margin-top: 30px;
    }

    .inner {
        width: 890px;
        height: 1400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self: center;
        margin-bottom: 50px;
    }

    .main-div {
        height: 100%;
        width: 100%;
        margin-top: 15px;
        display: flex;
        flex-direction: column;
        background-color: white;
    }

    .table {
        margin-bottom: 20px;
        border-collapse: collapse;
        width: 75%;
        align-self: center;
    }

    .th {
        padding: 5px;
        border: 1px solid black;
    }

    .td, .price {
        border: 1px solid black;
        padding: 5px;
    }

    .table-name {
        width: 45%;
    }

    .table-type {
        width: 10%;
    }

    .total-tr {
        border-top: 2px solid black;
    }

    .total-td, .total-td-text, .total-td-sum, .total-td-first {
        font-weight: bold;
        border: 1px solid black;
        text-align: right;
    }

    .total-td-sum {
        text-align: left;
        padding-left: 5px;
    }

    .total-td {
        border-left: none;
        border-right: none;
    }

    .total-td-text {
        border-left: none;
        padding-right: 5px;
    }

    .total-td-first {
        border-left: 1px solid black;
        border-right: none;
    }

    tr {
        font-size: 12px;
    }

    .table-price {
        width: 10%;
    }

    .table-number {
        width: 18%;
    }

    .table-sum {
        width: 25%;
    }

    .total-td-sum, .total-td-text {
        font-weight: bold;
    }
</style>
<body>
<div class="container">
    <div class="inner">
        <div class="button-generate">
            <a href="{{ route('pdf.generate', $estimate->id) }}" class="button">Скачать PDF</a>
        </div>
        <div class="main-div">
            <h5 class="title">
                {{ $estimate->name . $estimate->id }}
                @if ($estimate->created_at!= null)
                    от {{ $estimate->created_at->format('d.m.Y') }}
                @endif
            </h5>
            <table class="table">
                <tr>
                    <th class="th table-name">Название товара</th>
                    <th class="th table-type">Ед. изм.</th>
                    <th class="th table-price">Цена за ед., руб.</th>
                    <th class="th table-number">Кол-во</th>
                    <th class="th table-sum">Сумма по позиции, руб.</th>
                </tr>
                @foreach($estimate->goods as $good)
                    <tr>
                        <td class="td">{{ $good->name }}</td>
                        <td class="td">шт.</td>
                        <td class="td">{{ number_format($good->price,0,'',' ') }}</td>
                        <td class="td">{{ number_format($good->pivot->number_of_goods,0,'',' ') }}</td>
                        <td class="price">{{ number_format($good->price * $good->pivot->number_of_goods,0,'',' ') }}</td>
                    </tr>
                @endforeach
                <tr class="total-tr">
                    <td class="total-td-first"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td-text">Итого по смете:</td>
                    <td class="total-td-sum"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
        price = document.querySelectorAll('.price');
        let sum = 0;
        let a;
        for (i = 0; i < price.length; i++) {
            a = price[i].innerHTML.replace(/\s/g, '');
            sum += parseInt(a);
        }
        document.querySelector('.total-td-sum').innerHTML = sum.toLocaleString('ru');
</script>
</body>
</html>
