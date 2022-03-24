const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx = document.querySelector('.formBx');
const body = document.querySelector('body');

signupBtn.addEventListener('click',()=>{
    formBx.classList.add('active')
    body.classList.add('active')
})
signinBtn.addEventListener('click',()=>{
    formBx.classList.remove('active')
    body.classList.remove('active')
})

// setInterval(()=>{
//     if(altura.value=='' || peso.value==''){
//         btndata.style.pointerEvents='none';
//     }else{
//         btndata.style.pointerEvents='all';
//     }   
// },500);