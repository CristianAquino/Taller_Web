const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx = document.querySelector('.formBx');

signupBtn.addEventListener('click',()=>{
    formBx.classList.add('active');
})
signinBtn.addEventListener('click',()=>{
    formBx.classList.remove('active');
})
