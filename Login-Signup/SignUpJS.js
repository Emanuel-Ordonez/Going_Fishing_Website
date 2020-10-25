function checker()
{
    var passNode = document.getElementById("Pass");
    var repassNode = document.getElementById("RePass");
    var passLabel = document.getElementById("Mismatch");
    if(passNode.value == repassNode.value)
    {
        passLabel.innerHTML = "Password match!";
        passLabel.style.color = "green";
        passLabel.style.visibility = "visible";
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

function changeVerify()
{
    var oldPassNode = document.getElementById("oldPass");
    var newPassNode = document.getElementById("newPass");
    var newPassVerifyNode = document.getElementById("newPassVerify");
    var passLabel = document.getElementById("Mismatch");
    if(oldPassNode.value == newPassNode.value)
    {
        passLabel.innerHTML = "Can't use old password!";
        passLabel.style.visibility = "visible";
    }
    else if(oldPassNode.value == newPassVerifyNode.value)
    {
        passLabel.innerHTML = "Can't use old password!";
        passLabel.style.visibility = "visible";
    }
    // else if(oldPassNode.value != newPassNode.value || oldPassNode.value != newPassVerifyNode.value)
    // {
    //     passLabel.innerHTML = "Password do not match!";
    //     passLabel.style.color = "red";
    //     passLabel.style.visibility = "hidden";
    // }
    else if(newPassNode.value == newPassVerifyNode.value)
    {
        passLabel.innerHTML = "Password match!";
        passLabel.style.color = "green";
        passLabel.style.visibility = "visible";
    }
    else if(newPassNode.value != newPassVerifyNode.value)
    {
        passLabel.innerHTML = "Password do not match!";
        passLabel.style.color = "red";
        passLabel.style.visibility = "visible";
    }
    else
    {
        passLabel.innerHTML = "Password do not match!";
        passLabel.style.color = "red";
        passLabel.style.visibility = "hidden";
    }
}