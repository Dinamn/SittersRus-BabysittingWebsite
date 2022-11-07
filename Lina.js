//Login page
var email = document.forms['loginfom']['email'];
var password = document.forms['loginfom']['password'];

var emailError = document.getElementById('emailError');
var passError = document.getElementById('passError');

email.addEventListener('taxt_input', email_verify);
password.addEventListener('taxt_input', pass_verify);

function validated(){
    if(email.value.length < 9){
        email.style.border = "1px solid red";
        emailError.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.length < 6){
        password.style.border = "1px solid red";
        passError.style.display = "block";
        password.focus();
        return false;
    }
}

function email_verify(){
    if(email.value.length >= 8){
        email.style.border = "1px solid silver";
        emailError.style.display = "block";
        return true;
    }
}

function pass_verify(){
    if(password.value.length >= 5){
        password.style.border = "1px solid silver";
        passError.style.display = "block";
        return true;
    }
}
