const archivo = document.querySelector('.archivo');
const perro = document.querySelector('.imgRegister img');

archivo.addEventListener('change',()=>{
    if(archivo.value == ''){
        perro.src = "img/ejemplo.jpg";
    }else{
        perro.src = archivo.value;
    }
    console.log(perro.src);
})