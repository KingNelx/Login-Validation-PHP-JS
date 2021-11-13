
function validation (){

    let email = document.f1.email.value;
    let password = document.f1.password.value;


    if(email.length == "" && password.length == ""){
        alert("Email and Password fields are empty");
        return false;
    }else{
       if(email.length == ""){
        alert("Email field is empty");
        return false;
       }

       if(password.length == ""){
        alert("Password field is empty");
        return false;
       }
    }
}
