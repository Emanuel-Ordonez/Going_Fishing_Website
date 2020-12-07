<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Error: The Tackle Box</title>
  
  <!--This file is for all files-->
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />
  
  <!-- <script type="text/javascript" src="../Universal/function.js"> </script> -->
  <script type="text/javascript" src="contactScript1.js"> </script>

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
    <h2>There was an error submitting your contact form.</h2>
    <h2>Click <a href="contact.php">here</a> to try again.</h2>
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
