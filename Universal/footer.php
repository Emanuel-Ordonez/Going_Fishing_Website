<?php
    session_start();
    if($_SESSION["user_type"] == 'BANNED'){
        header("location: ../ErrorPage.html");
        exit();
    }
?>
<div class="footer">
<p>&#169;2020 CIS444 Group #5 
    <?php
    if(isset($_SESSION["userID"]) and isset($_SESSION["user_type"]) and $_SESSION["user_type"]=='ADMIN'){
        print "<a href='../Login-Signup/AdminPage.php' id='admin'>  | Admin Options</a>";
    }
    ?>
</p>
</div>