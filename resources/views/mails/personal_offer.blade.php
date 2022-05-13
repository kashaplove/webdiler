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

<div class="section" style="height: 100%; width: 100%; background-color: #eeeeee; padding-top: 70px; padding-bottom: 70px;">
    <div class="wrapper" style="display: flex; flex-direction: column; padding: 30px; width: 70%; background-color: #ffffff; margin-left: auto; margin-right: auto;">
        <div class="img-block" style="margin-left: auto; margin-right: auto; padding-bottom: 30px;">
            <img width="450" src="https://i.ibb.co/3rzbjG9/webdiler.png" alt="">
        </div>
        <div style="margin-left: auto; margin-right: auto; padding-bottom: 20px; font-size: 22px; font-weight: bold;">
            Здравствуйте, {{ $name }}</div>
        <div style="text-align: center; margin-left: auto; margin-right: auto; padding-bottom: 50px; font-size: 18px; font-weight: bold;">
            Товары, которыми вы интересовались в нашем
            маркетплейсе, теперь со скидкой в 10%!
        </div>
        @foreach($goodsAnalitics as $good)
            <div class="good" style="margin-left: auto; margin-right: auto; display: flex; justify-self:center; align-items: center; width: 60%; height: 70px; background-color: #F3F2F2; border-radius: 10px; padding-top: 10px; padding-right: 30px; padding-bottom: 10px; padding-left: 30px; margin-bottom: 10px;">
                <img style="margin-right: 30px" width="80"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPkAAADKCAMAAABQfxahAAAAMFBMVEX29vbHx8fExMTX19f5+fnt7e3R0dHh4eHw8PD19fXn5+fLy8vT09Pd3d3l5eXg4OBxvuVsAAAE9UlEQVR4nO2d6ZajIBBGBUFFXN7/badj95yAWSzAtor0d/9OxsMNkaUoqpsGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALzG0OBu5tkYN85Td8zU9sMnyRs3K60VCa07+zHupldE7R/5yXE3+SSmJO+Nz+j2Ll1cacvd6nJMmyH+xcDd8GLGPHHVVf9793niSo/cLS8kt8ur73TT5YorXfebPmR3udJzzZ1u1nxzpao2zx3ftk6veU63JV2u2no73bQl4kpVvHwvE9cLd/vJ7KMM+ZP5N10NYQtjnF36tY/In8x/mKPHrf0yDo0sfTPMXj9SKq6ePbMd5cibYTrBkv51+EWIupkv1P5270QE65y/WvzmPvKrD9drb+o9t7orWZ8WqTO/7AW70GJ11mV92V6sEM/Z6Y5RXOmVT/36+SyGTbxpeMUZdzQLrzlfkLJ0+12M5trAF8WaTjHnisk7ZnG+0b0gpHySOVdguiC+uO20/Rdl23iuGGWuuVbTaoefAJOzS+tz7asy16q1TRxRM2bo87a6FZlrvzyNJRljc87ZqzHXfnwdP73FtD7VXM/vn2ds6m++DnPtCWk/iT/5Ksz1RHmkSdsK1GBOXXQY+2Hm9NWWSQlpyjdPWmYmqIs3148tNI2z4zjawT3Mc4b+jYo373b/0TRj+/8cTnXr/sCEPsyJN4+znLbM5+BfH7ObyXmTws13ZwJmfcx81pOLHWji0s3jaNnwfJ22+3qIOQeyzaOMvtfTdTz8E89uZJuHrXs3bMcTQPqzr4TUuqjL307VUa/TOl20+RQ27n2wNjoUJ73pks3DwPDhZBXFzykhbcnmKuXz4atOOrOTbB66HL+64aCQ+PRLIbQtPPRLVTn+tGjzeyfSTuHub7qZqjZXaX0YDoiUF12webByTV6bEOY1weZB03qSuU/6quSaB8sy6mH7/UUnJOEINr/n61EGLBUvZqo2v09qxN1XOBnAvErz/u5B/LUHq7iqzf/sCBc0jZgo6u+PJySjCDaf/uxKJliYkDKpwiGR8CMRbK7TdiDR0F73jiUMyVDiS8HbYQhflGDzKDJxHF8Ks/Urj0yEYzWh04OtXfXRqLAXD5dx4TKGlFQr2Txq3MHwHqWxJj/8SmgnDcHm6/3JuA5D87Qln2zz6OTkzcm4jk7ZadnEos3j44PX6nHuFHGVL9s8bp6xz+uG7TJpch59IdTMgfhKnXtyxrTPEqTelhBuHs3pNy27u7Stfb/7BPU2mHTzh9So6KK+f7hKT0+Okm7+5L7JltG/znP/rHwCPSFOvPmLi8MvamYkXG+Wb55yUz7lXncF5vTr4kkX2mswJ6a+pqU612H+tTp1h+00tMO3ysy/OHjZzZBaJrQa87fle41Lv81ejfltX/LC3bgn6bCfZH7r9+Uhpf12Wy3DuzLzLat7tu5e/8suedr1mW/yWvmpbdup8yVXcrnM/+4tbKbCSYE51817yinI75pzVVsgJgP8ojlbGeDEtebp8NVPYi2exFo+ibmgDFs5mYZ5XmMtec1bMovP+wZfGSHuov5sqxn28u4JF4fPFecv9J10U/48ce4e33AZf2On0PsornUVZry02K1Ws6DC7uOkzqhgfWyttV+PY7hXYhrbz+2vs46DxCruxL+aVwS3IwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Br+AYSFRdOsVUwBAAAAAElFTkSuQmCC"
                     alt="">
                <div class="good_title"
                     style="font-size: 14px; font-weight: bold; margin-right: 30px;">{{ $good->name }}</div>
                <div class="old-price" style="margin-right: 5px;"><s style="color: #7c7c7c">{{ $good->price }} ₽</s></div>
                <div class="new-price"><b>{{ $good->price * 0.9 }} ₽</b></div>

            </div>
        @endforeach
        <div class="footer" style="margin-left: auto; margin-right: auto; margin-top: 40px; display: flex">
            <div class="footer-text">Свяжитесь с нами для получения дополнительных персональных условий</div>
            <a href="tel:88004443035" style="color: #03c871; font-weight: bold;"><span class="img-svg" style="margin-left: 10px;"><img width="15" src="https://i.ibb.co/vjrypZb/tel.png" class="svg-icon"></span>
                8 800 444 3035
            </a>
        </div>

    </div>

</div>

</body>
</html>



