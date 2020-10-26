// input validation for first name
function chkfname(event){
    var fname = event.currentTarget;
    var pos = fname.value.search(/^[A-Z][a-z]+$/);
    if (pos != 0){
        alert("The first name was not input correctly.\n" + "Please try again\n");
        return false;
    }
    else {
        return true;
    }
}

// input validation for last name
function chklname(event){
    var lname = event.currentTarget;
    var pos = lname.value.search(/^[A-Z][a-z]+$/);
    if (pos != 0){
        alert("Your last name was not input correctly.\n" + "Please try again\n");
        return false;
    }
    else {
        return true;
    }
}

// input validation for email
function chkemail(event){
    var email = event.currentTarget;
    var pos = email.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);
    if (pos != 0){
        alert("The email was not input correctly.\n" + "Please try again\n");
        return false;
    }
    else {
        return true;
    }
}