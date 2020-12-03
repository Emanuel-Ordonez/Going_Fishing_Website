function checker() //Sign Up Page
{
    var passNode = document.getElementById("Pass");
    var repassNode = document.getElementById("RePass");
    var passLabel = document.getElementById("Mismatch");
    if(passNode.value == repassNode.value)
    {
        passLabel.innerHTML = "Password match!";
        passLabel.style.color = "green";
        passLabel.style.visibility = "visible";
        document.getElementById("SignUp").disabled = false;
    }
    else if(repassNode.value == "")
    {
        passLabel.innerHTML = "Password do not match!";
        passLabel.style.color = "red";
        passLabel.style.visibility = "hidden";
    }
    else
    {
        passLabel.innerHTML = "Password do not match!";
        passLabel.style.color = "red";
        passLabel.style.visibility = "visible";
    }
}

function checker2() //Forgot Password Page
{
    var passNode = document.getElementById("Pass");
    var repassNode = document.getElementById("RePass");
    var passLabel = document.getElementById("Mismatch");
    if(passNode.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})/))
    {
        passLabel.innerHTML = "Password fits criteria!";
        passLabel.style.color = "green";
        passLabel.style.visibility = "visible";
    }
    else
    {
        passLabel.innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number, and one special character.";
        passLabel.style.color = "red";
        passLabel.style.visibility = "visible";
    }
}

function changeVerify() //Profile Page
{
    var oldPassNode = document.getElementById("oldPass");
    var newPassNode = document.getElementById("newPass");
    var newPassVerifyNode = document.getElementById("newPassVerify");
    var passLabel = document.getElementById("Mismatch");
    if(newPassNode.value!="" || newPassVerifyNode.value!="")
    {
        if(newPassNode.value!=oldPassNode.value)
        {
            if(newPassNode.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})/) || newPassVerifyNode.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})/))
            {
                passLabel.innerHTML = "Password fits criteria!";
                passLabel.style.color = "green";
                passLabel.style.visibility = "visible";
                if(newPassNode.value==newPassVerifyNode.value)
                {
                    passLabel.innerHTML = "Password match!";
                    passLabel.style.color = "green";
                    passLabel.style.visibility = "visible";
                    document.getElementById("changePass").disabled = false;
                }
                else if((newPassNode.value!=newPassVerifyNode.value) && (newPassNode.value!="" && newPassVerifyNode.value!=""))
                {
                    passLabel.innerHTML = "Password do not match!";
                    passLabel.style.color = "red";
                    passLabel.style.visibility = "visible";
                }
                // else if((newPassNode.value=="" && newPassVerifyNode.value!="") || (newPassVerifyNode.value=="" && newPassNode.value!=""))
                // {
                //     passLabel.innerHTML = "Password do not match!";
                //     passLabel.style.color = "red";
                //     passLabel.style.visibility = "hidden";
                // }
            }
            else
            {
                passLabel.innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number, and one special character.";
                passLabel.style.color = "red";
                passLabel.style.visibility = "visible";
            }
        }
        else
        {
            passLabel.innerHTML = "Can't use old password!";
            passLabel.style.color = "red";
            passLabel.style.visibility = "visible";
        }
    }
}