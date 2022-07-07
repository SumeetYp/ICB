const sideBar = document.querySelector('.sideBar');
sideBar.classList.add('hideSideBar');
const hamBurger = document.querySelector('.hamBurger');
const cross = document.querySelector('.cross');
hamBurger.addEventListener('click', e=>{
    sideBar.classList.remove('hideSideBar');
    sideBar.classList.add('displaySideBar');
    setTimeout(()=>{
        cross.style.display = 'flex';
    }, 500);
})
cross.addEventListener('click', e=>{
    sideBar.classList.add('hideSideBar');
    sideBar.classList.remove('displaySideBar');
    cross.style.display = 'none';
})