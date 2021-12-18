var lbtn = document.getElementById("login_button");
var rbtn = document.getElementById("register_button");


var usernameWarning = document.getElementById("username_warning");
var passwordWarning = document.getElementById("password_warning");

var loginForm = document.getElementById("loginF");
var registerForm = document.getElementById("registerF")


function validation(){
    let username = document.myform.username.value;
    let password = document.myform.password.value;

    if(username ==null || username==""){
        usernameWarning.classList.remove("warning_hide");
        return false;
    }
    else if(password.length<6){
        usernameWarning.classList.add("warning_hide");
        passwordWarning.classList.remove("warning_hide");
        return false;
    }
}
function rValidation(){
    let username = document.registerForm.username.value;
    let password = document.registerForm.password.value; 
    let email = document.registerForm.email.value;

    if(username ==null || username==""){
        alert("Username can't be empty")
        return false;
    }
    else if(password.length<6){
        alert("Password has to be 6 characters long")
        return false;
    }
}

rbtn.addEventListener("click",function(event){
    loginForm.classList.add("form_hide");
    registerForm.classList.remove("form_hide");

})