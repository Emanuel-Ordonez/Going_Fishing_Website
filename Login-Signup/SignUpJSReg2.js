document.getElementById("changePass").disabled = true;

var samePassNode1 = document.getElementById("newPass");
var samePassNode2 = document.getElementById("oldPass");
var samePassNode3 = document.getElementById("newPassVerify");

samePassNode1.addEventListener("keyup", changeVerify);
samePassNode2.addEventListener("keyup", changeVerify);
samePassNode3.addEventListener("keyup", changeVerify);