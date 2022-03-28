const mensaje = document.querySelector('.mensaje');
const mensajedash = document.querySelector('.dash');

// setTimeout(()=>{
//     if(mensaje.classList[0]=='mensaje'){
//         mensaje.classList.remove('register');
//     }else{
//         mensaje.classList.remove('dash');
//     }
// },3000);
setTimeout(()=>{
    mensaje.style.display = 'none';
},3000);
setTimeout(()=>{
    mensajedash.style.display = 'none';
},3000);