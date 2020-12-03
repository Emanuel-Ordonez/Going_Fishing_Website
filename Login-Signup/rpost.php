<?
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Confirmation: The Tackle Box</title>
  
  <!--This file is for all files-->
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />
  
  <!-- <script type="text/javascript" src="../Universal/function.js"> </script> -->

  <meta charset="UTF-8">
</head>

<body>
<!--Container separates body from footer-->
<div class="main-container">
  <h1 class ="companyName">The Tackle Box</h1>
    <!-- <script>
      document.write(setUpMenu());
      document.write(setUpSideNav());
    </script> -->
    <?php
        include_once '../Universal/function.php';
    ?>
  
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
    
        $postID = $_POST['removePost'];
    
        $query = "SELECT * FROM Album_Entry WHERE picID = $postID";
        $result = mysqli_query($db, $query);
    
        if(mysqli_num_rows($result) > 0){
            $query = "DELETE FROM Album_Entry WHERE picID = $postID";
            $result = mysqli_query($db, $query);
            if($result){
                print"<h2>You successfully removed a post.</h2>";
            }
            else{
                print"<h2>Was unable to get post.  Try again!</h2>";
            }
        }
        else{
            print"<h2>No post exists.</h2>";
        }
      ?>
    <h2>Click <a href="AdminPage.php">here</a> to go back to the Admin Page.</h2>
  </div>

<!--Separate footer from body-->
</div>    
<!-- <script>
  document.write(setUpFooter());
</script> -->
<?php
    include_once '../Universal/footer.php';
?>
</body>
</html>
