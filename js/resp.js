burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navList = document.querySelector('.nav-list')
logo = document.querySelector('.logo')


burger.addEventListener('click', ()=>{
    logo.classList.toggle('vis')
    navList.classList.toggle('vis');
    navbar.classList.toggle('h-nav');
})