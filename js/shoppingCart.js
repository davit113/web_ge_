document.querySelector('.orders-wraper').addEventListener('change', (e) =>{
    const currentTarget = e.target;
    console.log(e.target);

    const price = currentTarget.closest('.order').querySelector('.order-price').textContent.replace(',','.').replace('$', '');
    const sum = currentTarget.closest('.order').querySelector('.order-total');

    sum.textContent = String(parseFloat(price) * currentTarget.value.at(-1))
    .replace(',','.') +'$';

})