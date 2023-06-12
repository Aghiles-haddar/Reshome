//Section login

let btn = document.querySelector('.flip-button')
let formsignup = document.querySelector('.form-signup')
let formlogin = document.querySelector('.form-login')

btn.addEventListener('click', ()=>{
   if(formsignup.classList.contains('flip-active')){
    formsignup.classList.remove('flip-active')
    formlogin.classList.add('flip-active')
    btn.innerHTML="Je n'ai pas de compte je m'inscris"
   } else{
    formsignup.classList.add('flip-active')
    formlogin.classList.remove('flip-active')
    btn.innerHTML="J'ai déjà un compte je me connecte"
   }
})