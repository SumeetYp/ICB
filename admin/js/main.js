// Admin Event Page

let upButton = document.querySelector('.upButton');
let pastButton = document.querySelector('.pastButton');
let addEvent = document.querySelector('.addEvent');

function active(act,deact,display){
    act.style.cssText += 'border-top-left-radius: 10px;border-top-right-radius: 10px;background-color: #D9D9D9;';
    deact.style.cssText += 'border-radius: 0px;background-color: #fff;';
    addEvent.style.display=display;
}
active(upButton,pastButton,'none')


upButton.addEventListener('click',()=>{
    active(upButton,pastButton,'none');
})

pastButton.addEventListener('click',()=>{
    active(pastButton,upButton,'block');
})