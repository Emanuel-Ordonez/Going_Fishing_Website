function setUpMenu() {
    var code = "";
    code += "<nav>";
    code += "<div id='menuBar' class='navbar'>";
    code += "<ul>";
    code += "<li><a href='../Homepage/Homepage.html'>Home</a></li>";
    code += "<li>Weather</li>";
    code += "<li>Forums";
    code += "<ul>";
    code += "<li>Online Chat</li>";
    code += "<li>Stories</li>";
    code += "<li>Blogs</li>";
    code += "<li>Delicious Recipes</li>";
    code += "</ul>";
    code += "</li>";
    code += "<li>Maps";
    code += "<ul>";
    code += "<li>Check-In</li>";
    code += "<li>North County</li>";
    code += "<li>Mid County</li>";
    code += "<li>South County</li>";
    code += "</ul>";
    code += "</li>";
    code += "<li>Gallery";
    code += "<ul>";
    code += "<li>Post your Catch</li>";
    code += "<li>Catch of the Day</li>";
    code += "</ul>";
    code += "</li>";
    code += "<li>Fishing Resources";
    code += "<ul>";
    code += "<li><a href='../resources/guide.html'>Beginner's Guide</a></li>";
    code += "<li><a href='../resources/gear.html'>Fishing Gear</a></li>";
    code += "<li>FAQ</li>";
    code += "</ul>";
    code += "</li>";
    code += "</ul>";
    code += "</div>";
    code += "</nav>";

    return code;
}

function setUpSideNav() {
    var navCode = "";
    navCode += "<div id='mySidenav' class='sidenav'>";
    navCode += "<!--4 warning this is fixed with href-->";
    navCode += "<a href='../Login-Signup/LoginPage.html' id='SignIn'>Sign In</a>";
    navCode += "<a href='../Login-Signup/SignupPage.html' id='SignUp'>Sign Up</a>";
    navCode += "<a href='' id='fName'>Forgot Name</a>";
    navCode += "<a href='../Login-Signup/ForgotPasswordPage.html' id='fPassword'>Forgot Password</a>";
    navCode += "</div>";

    return navCode;
}