<!DOCTYPE html>
<html>
<head>
    <title>WEBDILER - смета</title>
</head>
<body style="font-family: DejaVu Sans, sans-serif;">
<div class="container" style="display: flex;justify-content: center;">
    <div class="main-div" style="width: 700px; display: flex;flex-direction: column;">
        <h4 class="title" style="text-align: center">
            {{ $estimate->name . $estimate->id }}
            @if ($estimate->created_at!= null)
                от {{ $estimate->created_at->format('d.m.Y') }}
            @endif
        </h4>
        <table class="table" style="border-collapse: collapse; font-size: 13px">
            <tr>
                <th class="th table-name" style="border: 1px solid black; padding: 2px; text-align: left">Название товара</th>
                <th class="th table-type" style="border: 1px solid black; padding: 2px; text-align: left">Ед. изм.</th>
                <th class="th table-price" style="border: 1px solid black; padding: 2px; text-align: left">Цена за ед., руб.</th>
                <th class="th table-number" style="border: 1px solid black; padding: 2px 4px 2px 2px; text-align: left;">Кол-во</th>
                <th class="th table-sum" style="border: 1px solid black; padding: 2px; text-align: left">Сумма по позиции, руб.</th>
            </tr>
            @php
                $sum = 0;
            @endphp
            @foreach($estimate->goods as $good)
                <tr>
                    <td class="td" style="border: 1px solid black; padding: 2px;">{{ $good->name }}</td>
                    <td class="td" style="border: 1px solid black; padding: 2px;">шт.</td>
                    <td class="td" style="border: 1px solid black; padding: 2px;">{{ number_format($good->price,0,'',' ') }}</td>
                    <td class="td" style="border: 1px solid black; padding: 2px;">{{ number_format($good->pivot->number_of_goods,0,'',' ') }}</td>
                    <td class="price" style="border: 1px solid black; padding: 2px;">{{ number_format($good->price * $good->pivot->number_of_goods,0,'',' ') }}</td>
                </tr>
                @php
                $sum+=$good->price * $good->pivot->number_of_goods
                @endphp
            @endforeach
            <tr class="total-tr" style="border-top: 2px solid black;">
                <td class="total-td-first" style="border: 1px solid black; padding: 2px; border-right-color: white"></td>
                <td class="total-td" style="border: 1px solid black; padding: 2px; border-right-color: white"></td>
                <td class="total-td" style="border: 1px solid black; padding: 2px; border-right-color: white"></td>
                <td class="total-td-text" style="border: 1px solid black; padding: 2px; text-align: right">Итого по смете:</td>
                <td class="total-td-sum" style="border: 1px solid black; padding: 2px;">{{ number_format($sum,0,'',' ') }}</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>

