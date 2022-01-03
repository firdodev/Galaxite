function checklogin(){
    if(document.getElementById("email").value == "" && document.getElementById("password").value == ""){
        document.getElementById("error-msg").innerHTML = "Email or Password is not correct !";
        return false;
    }else{
        location.replace("profile.html")
        return true;
    }
}