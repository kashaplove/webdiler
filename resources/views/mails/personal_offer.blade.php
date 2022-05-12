<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
@foreach($goodsAnalitics as $good)
    <div class="wrapper" style="margin-left: auto">
        <h3>Здравствуйте, {{ $name }}</h3>
        <h4>Уведомляем Вас, что цены на товары, которыми вы интересовались в нашем
            маркетплейсе, изменились.</h4>
        <div class="good">
            <div class="good_title">{{ $good->name }}</div>
        </div>
    </div>

@endforeach
</body>
</html>



