<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Contact Us: The Tackle Box</title>
  
  <!--This file is for all files-->
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />

  <!--local css for this page only-->
  <link rel="stylesheet" type="text/css" href="contactStyle.css" />
  
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
    <h2>Contact Us</h2>
    <div class="contact-container">
        <form  method="POST" action="form.php" id="contact-form">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" placeholder="Your first name beginning with a capital letter" pattern="^[A-Z][a-z]+$" required>
      
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" placeholder="Your last name beginning with a capital letter." pattern="^[A-Z][a-z]+$" required>
      
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email with correct format." pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
      
          <label for="question">Message</label>
          <textarea id="message" name="message" placeholder="What is your message?" style="height:200px" required></textarea>
          
          <input type="reset" value="Reset">
          <input type="submit" id="submit" name="submit" value="Send">
        </form>

      </div>
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
