function validateForm() {

    var usrname = document.getElementById("uname").value;
    var passw = document.getElementById("pass").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var gender = document.getElementsByName("gender");
    var ischecked = false;
    var course = document.getElementById("course").value;
    var declare = document.getElementById("trueinfo");
    var terms = document.getElementById("terms");
   

    //checking if input fields are empty

    if(usrname == "" || passw == "" || phone == "") {

        displayErrBox("All fields are mandatory.");
        return false;

    }

    //checking username length

    if(usrname.length < 2 || usrname.length > 10) {
        displayErrBox("Username length should be between 2 to 10. ");
        return false;
    }

    if(passw.length < 8) {
        displayErrBox("Password must be greater than 8 characters.");
        return false;
    }

    if(isNaN(phone)) {
        displayErrBox("Contact number should be number.");
        return false;
    }

    if(phone.length != 10) {
        displayErrBox("Phone number should contain 10 digits");
        return false;
    }
    if(!emailFormat.test(email)) {
        displayErrBox("Invalid email format.");
        return false;
    }

    for(i = 0; i < gender.length; i++) {

        if(gender[i].checked) {
            ischecked = true;
            break;
        }

    }

    if(!ischecked) {

        displayErrBox("Select a gender.");
        return false;

    }
    
    if(course == "select") {
        displayErrBox("Select a course.");
        return false;
    }
   
    if(!declare.checked) {
        displayErrBox("Accept that all informations are correct.");
        return false;
    }
   
    if(!terms.checked) {
        displayErrBox("Accept the terms and conditions.");
        return false;
    }


    return true;

}

function displayErrBox(msg) {
    var emsg = document.getElementById("msg");
    var errbox = document.getElementById("errmsg");
    emsg.innerHTML = msg;
    errbox.style.display = "flex";
    errbox.style.justifyContent = "space-between";
}

function removeBox() {
    document.getElementById("errmsg").style.display = "none";
}