const sideBar = document.querySelector('.sideBar');
const hamBurger = document.querySelector('.hamBurger');
const cross = document.querySelector('.cross');
const body = document.getElementsByTagName('body')[0];

sideBar.classList.add('hideSideBar');

hamBurger.addEventListener('click', e=>{
    sideBar.classList.remove('hideSideBar');
    sideBar.classList.add('displaySideBar');
    body.classList.add('fixed-position');
    setTimeout(()=>{
        cross.style.display = 'flex';
    }, 500);
})

cross.addEventListener('click', e=>{
    sideBar.classList.add('hideSideBar');
    sideBar.classList.remove('displaySideBar');
    body.classList.remove('fixed-position');
    cross.style.display = 'none';
})