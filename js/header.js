const dropdownBtn = document.querySelector('.dropdown_btn');
const nav =document.querySelector('header .header-buttom');


dropdownBtn.addEventListener('click', (e)=>{
    nav.classList.toggle('apear');
})

