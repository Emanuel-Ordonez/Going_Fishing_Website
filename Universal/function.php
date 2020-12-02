<?php
    if(isset($_SESSION["userID"]) and isset($_SESSION["user_type"])){
        print "<div class=\"logoutButton\"><br /><a href=\"../Login-Signup/logout.php\">Logout</a></div>";
    }
?>
<nav>
<div id='menuBar' class='navbar'>
<ul>
<li><a href='../Homepage/Homepage.php'>Home</a></li>
<li><a href='../FishDiary/diaryOverview.html'>Gallery</a></li>
<li><a href='../resources/guide.html'>Beginner's Guide</a></li>
<li><a href='../resources/gear.html'>Fishing Gear</a></li>
<li><a href='../resources/about.html'>About Us</a></li>
<li><a href='../resources/contact.html'>Contact Us</a></li>
</ul>
</div>
</nav>


<div id='mySidenav' class='sidenav'>
<!--4 warning this is fixed with href-->
<?php
    if(isset($_SESSION["userID"]) and isset($_SESSION["user_type"])){
        print "<a href='../Login-Signup/ProfilePage.php' id='profile'>User Profile</a>";
    }
    else{
        print "<a href='../Login-Signup/LoginPage.html' id='SignIn'>Sign In</a>";
        print "<a href='../Login-Signup/SignUpPage.html' id='SignUp'>Sign Up</a>";
        print "<a href='../Login-Signup/ForgotPasswordPage.html' id='fPassword'>Forgot Password</a>";
    }
?>
<!-- <a href='../Login-Signup/ProfilePage.html' id='profile'>User Profile</a>
<a href='../Login-Signup/LoginPage.html' id='SignIn'>Sign In</a>
<a href='../Login-Signup/SignUpPage.html' id='SignUp'>Sign Up</a>
<a href='../Login-Signup/ForgotPasswordPage.html' id='fPassword'>Forgot Password</a> -->
</div>