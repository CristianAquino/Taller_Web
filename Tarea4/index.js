const archivo = document.querySelector('.archivo');
const perro = document.querySelector('.perro img');

const mensaje = document.querySelector('.active')

// const cancelar = document.querySelector('.cancelar');
// const txt = document.querySelectorAll('.inputBox input');
// const radio = document.querySelectorAll('.inputRadio input');

archivo.addEventListener('change',()=>{
    perro.src = archivo.value;
    console.log(perro.src)
})

setTimeout(()=>{
    mensaje.classList.remove('active');
},1500);

// cancelar.addEventListener('click',()=>{
//     txt.forEach(element => element.value = '');
//     radio.forEach(element => element.checked = false);
// })