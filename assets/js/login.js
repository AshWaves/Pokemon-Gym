document.getElementById("btn-register").addEventListener("click",register);
document.getElementById("btn-start-sesion").addEventListener("click",login);

//global declaration of variables
let loginForm=document.getElementById("form-login");
let loginRegister=document.getElementById("form-register");
let loginContainer=document.getElementById("login-container");
let backBoxLoign=document.getElementById("back-box-login");
let backBoxRegister=document.getElementById("back-box-register");
//to call my form register
function register(){
    
    loginRegister.style.display="block";
    loginContainer.style.left="320px";
    loginContainer.style.top="-420px";
    loginForm.style.display="none";
    backBoxRegister.style.opacity=0;
    backBoxLoign.style.opacity="1";
}

function login(){
    if(window.innerWidth>800){
        loginRegister.style.display="none";
        loginContainer.style.left="10px";
        loginContainer.style.top="-420px";
        loginForm.style.display="block";
        backBoxRegister.style.opacity=1;
        backBoxLoign.style.opacity="0";
    }else{
        loginRegister.style.display="none";
    loginContainer.style.left="0";
    loginContainer.style.top="-420px";
    loginForm.style.display="block";
    backBoxRegister.style.opacity=1;
    backBoxLoign.style.opacity="0";
    }
    
}