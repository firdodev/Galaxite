function checksignup(){
    if(document.getElementById("email").value == "" || document.getElementById("password").value == "" || document.getElementById("first-name").value == "" || document.getElementById("last-name").value == ""){
        document.getElementById("error-msg").innerHTML = "Your application is not fill correct !";
        return false;
    }else{
        location.replace("profile.html")
        return true;
    }
}