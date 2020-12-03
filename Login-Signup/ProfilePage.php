<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User Profile</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
        <script type="text/javascript" src="SignUpJS.js"></script>
    </head>
    <body>
        <div class="center-profile">
            <div class="right-align"><a href="../Homepage/Homepage.php">Back</a></div>
            <h1>User Profile</h1>
            <br /><img class="profilePic" src="usericon.png" alt="UserProfile">
            <table id="userInfo" aria-label="User info" class="userinfo">
                <caption>User Details</caption>
                <tbody>
                    <?php
                        $db = mysqli_connect("localhost", "group5", "k9mWTDJZ7V0w");
                        if(!$db){
                            print "<h2> Error - Could not connect to server </h2>";
                            exit;
                        }
                    
                        $selectdb = mysqli_select_db($db, "group5");
                    
                        if(!$selectdb){
                            print "<h2> Error - Unable to select specific database </h2>";
                            exit;
                        }
                        
                        $targetedID = $_SESSION["userID"];
                        $query = "SELECT * FROM User WHERE userID = $targetedID";
                        $result = mysqli_query($db, $query);
                    
                        if (mysqli_num_rows($result) > 0) {
                            $userValues = array_values(mysqli_fetch_assoc($result));
                            $username = $userValues[2];
                            $email = $userValues[1];
                            $date_created = $userValues[4];
                            print "<tr>";
                            print "<th id='username'>Username: </th>";
                            print "<td headers='username' class='username'>$username</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th id='email'>Email: </th>";
                            print "<td headers='email' class='email'>$email</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th id='date_created'>Date Created: </th>";
                            print "<td headers='date_created' class='date'>$date_created</td>";
                            print "</tr>";
                        }
                        else{
                            print "<tr>";
                            print "<th id='username'>Username: </th>";
                            print "<td headers='username' class='username'>ERROR</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th id='email'>Email: </th>";
                            print "<td headers='email' class='email'>ERROR</td>";
                            print "</tr>";
                            print "<tr>";
                            print "<th id='date_created'>Date Created: </th>";
                            print "<td headers='date_created' class='date'>ERROR</td>";
                            print "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <form method="post" action="profileChange.php">
                <label class="changePass">Change User Password</label>
                
                <div class="passChange">
                    <label>Old Password</label>
                    <input name="oldPass" id="oldPass" aria-label="Enter Old Password" type="password" required>
                </div>
                
                <div class="passChange">
                    <label>New Password</label>
                    <input name="newPass" id="newPass" aria-label="Enter New Password" type="password" required>
                </div>
                
                <div class="passChange">
                    <label>Repeat New Password</label>
                    <input name="newPassVerify" id="newPassVerify" aria-label="Enter New Password Again" type="password" required>
                </div>
                
                <div class="Mis">
                    <label id="Mismatch">Passwords do not match</label>
                </div>
                <input name="changePass" type="Submit" value="Change Password">
            </form>
        </div>
        <script type = "text/javascript" src = "SignUpJSReg2.js"></script>
    </body>
</html>
