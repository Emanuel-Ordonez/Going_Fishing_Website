<?php
 session_start();
    if($_SESSION["user_type"] == 'USER'){
        header("location: ../ErrorPage.html");
        exit();
    }
?>
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <link rel="stylesheet" href="StyleSheet.css">
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <div class="container">
            <div class="right-align"><br /><a href="../Homepage/Homepage.php">Back</a></div>
            <h1>Admin Options</h1>

            <div class="banUser">
                
                <form class="banForm" method="post" action="ban.php">
                    <fieldset>
                        <legend>Ban User</legend>
                            <input name="banUser" type="number" id="userID" aria-label="user ID entry"  placeholder="User ID to ban" required>
                            <input type="Submit" value="Ban User">
                    </fieldset>
                </form>
            </div>    
            <div class="giveAdmin">
                
                <form class="adminForm" method="post" action="admin.php">
                    <fieldset>
                        <legend>Give Admin to User</legend>
                            <input name="adminUser" type="number" id="userID" aria-label="user ID entry"  placeholder="Username to give admin" required>
                            <input type="Submit" value="Ban User">
                    </fieldset>
                </form>
            </div>
            <div class="removePost">
                
                <form class="postForm" method="post" action="rpost.php">
                    <fieldset>
                        <legend>Remove Post</legend>
                            <input name="removePost" type="number" id="removePost" aria-label="post entry"  placeholder="Post to remove" required>
                            <input type="Submit" value="Remove Post">
                    </fieldset>
                </form>
            </div>    
        </div>
    </body>
</html>
