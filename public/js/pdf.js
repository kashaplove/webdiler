price = document.querySelectorAll('.price');
let sum = 0;
let a;
for(i=0;i<price.length;i++)
{
    a = price[i].innerHTML.replace(/\s/g,'');
    sum+=parseInt(a);
}



document.querySelector('.total-td-sum').innerHTML = sum.toLocaleString('ru');
