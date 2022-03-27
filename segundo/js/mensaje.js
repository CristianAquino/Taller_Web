const mensaje = document.querySelector('.mensaje');

setTimeout(()=>{
    if(mensaje.classList[1]=='register'){
        mensaje.classList.remove('register');
    }else{
        mensaje.classList.remove('dash');
    }
},3000);