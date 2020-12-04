<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>About Us: The Tackle Box</title>
  
  <!--This file is for all files-->
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />
  <!--local css for this page only-->
  <link rel="stylesheet" type="text/css" href="aboutStyle.css" />
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
    <h2>About Us</h2>
    <p>The Tackle Box is a social community where the competitive nature of fishing is honored via the posting of one's greatest catches. It is our goal that those with an abundance of fishing experience will enjoy the competitive nature of posting images while beginners might gain a better understanding of various fish, fishing techniques, and equipment. To become part of this helpful community, <a href='../Login-Signup/SignUpPage.html' id='SignUp'>sign up now</a>!</p>
    <img id="fish_image" src="images/fishjump.png" alt="fish jumping" class="img-options-center">
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
