<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Sign up </title>
        <!--This file is for all files-->
        <link rel="stylesheet" type="text/css" href="../Universal/style.css" />

        <script type="text/javascript" src="../Universal/function.js"> </script>

        <meta charset="UTF-8">
    </head>
<body>
<!--Container separates body from footer-->
<div class="main-container">
  <h1 class ="companyName">The Tackle Box</h1>
    <script>
      document.write(setUpMenu());
      document.write(setUpSideNav());
    </script>
  
  <div class="content-container">
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

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $USER = "USER";

        $emailQuery = htmlspecialchars(stripcslashes($email));
        $usernameQuery = htmlspecialchars(stripcslashes($username));
        $passwordQuery = htmlspecialchars(stripcslashes($password));
        $USER = "USER";

        $query = "SELECT email FROM User WHERE email = '$emailQuery'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) > 0){
            print "<h2> Error - Email already in use! </h2>";
        }
        else{
            $row = mysqli_fetch_assoc($result);
            $query = "INSERT INTO User (email, display_name, password, user_type) VALUES ('$emailQuery', '$usernameQuery', '$passwordQuery', '$USER')";
            $result = mysqli_query($db, $query);
            if($result){
                print "<h2> Sign up successful! </h2>";
            }
            else{
                print "<h2> Error - Unable to create account, Sign up again! </h2>";
            }
        }
    ?>
    <h2>Click <a href="../Homepage/Homepage.html">here</a> to go back to the homepage.</h2>
  </div>

<!--Separate footer from body-->
</div>    
<script>
  document.write(setUpFooter());
</script>
</body>
</html>