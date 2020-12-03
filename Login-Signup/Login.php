<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirmation: The Tackle Box</title>
  
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
        $password = $_POST['password'];

        $emailQuery = htmlspecialchars(stripcslashes($email));
        $passwordQuery = htmlspecialchars(stripcslashes($password));

        $query = "SELECT * FROM User WHERE email = '$emailQuery'";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) > 0){
            // $fieldsNum = mysqli_num_fields($result);
            // $userValues = array_values(mysqli_fetch_assoc($result));
            // for($index = 0; $index < $fieldsNum; $index++)
            // {
            //     print "<h2> $userValues[$index] </h2>";
            // }

            print "<h2>You have successfully logged in to your account.</h2>";
            session_start();
            $_SESSION["userID"] = $userValues[0];
            $_SESSION["user_type"] = $userValues[5];
        }
        else{
            print "<h2>Wrong credentials.</h2>";
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
