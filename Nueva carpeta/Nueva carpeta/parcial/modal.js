let open = document.querySelector('.open');
let close = document.querySelector('.close');
let content = document.querySelector('.modal');

open.addEventListener('click',()=>{
content.classList.add('active')
})

close.addEventListener('click',()=>{
    content.classList.remove('active')
})