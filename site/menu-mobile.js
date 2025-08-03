var abrir =  document.getElementById('open-menu')
var menu = document.getElementById('menu-mobile')
var overlay = document.getElementById('overlay-menu')

abrir.addEventListener('click', ()=>{
    menu.classList.add('open-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('open-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('open-menu')
})