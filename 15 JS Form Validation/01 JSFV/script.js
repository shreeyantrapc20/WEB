function validate() {
    
    var condition = /^[A-Z a-z0-9.]+$/;
    
    var usrName = document.getElementById("usr").value;
    var passWord = document.getElementById("pass").value;
    var phoneNo = document.getElementById("phone").value;



    //Checking empty username

    if(usrName == "" || passWord == "" || phoneNo == "") {
        document.getElementById("errmsg").innerHTML = "Input fields cannot be empty";
        return false;
    } 
    
    //checking username length
    if(usrName.length < 2 || usrName.length > 10) {
        document.getElementById("errmsg").innerHTML = "Username length should be between 2 to 10 characters";
        return false;
    }

    //checking phone number
    if( isNaN(phoneNo) ) {
        document.getElementById("errmsg").innerHTML = "Phone number should only contain numbers";
        return false;
    }

    //checking phone number length
    if( phoneNo.length != 10 ) {
        document.getElementById("errmsg").innerHTML ="Phone number should contain 10 digits";
        return false;
    }

    //checking string pattern condition
    if(usrName.match(condition)) {
        return true;
    } else {
        document.getElementById("errmsg").innerHTML = "Username should not contain special chatacters";
        return false;
    }

    

}

function displayError() {
    document.getElementById("error").style.display = "block";
}