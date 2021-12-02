
function validateForm() {
    var a = document.forms["Form"]["email"].value;
    var b = document.forms["Form"]["password"].value;
    if (!a || !b) {
      alert("Please Fill All Required Fields");
      return false;
    }else{
        alert("Thanks for login!");
        return true;
    }
  }