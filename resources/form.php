<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $errors = '';
  if(empty($_POST['firstname'])  || empty($_POST['lastname'])  || empty($_POST['email']) || empty($_POST['message'])){
    $errors .= "\n Error: all fields are required";
  }
  
  $to = 'thetackleboxform@gmail.com';
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email_address = $_POST['email']; 
  $message = $_POST['message'];
  
  if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
  {
      $errors .= "\n Error: Invalid email address";
  }

  if(empty($errors)){
    $email_subject = "Contact form submission: " . $fname . " " . $lname;
    $email_body = "You have received a new message. ".
    " Here are the details:\nFirst Name: " . $fname .
    "\nLast Name: " . $lname .
    "\nEmail: " . $email_address . 
    "\nMessage:\n" . $message;
    $headers = "From:" . $to;
    $headers .= "\nReply-To:" . $email_address;
    mail($to,$email_subject,$email_body,$headers);
    header('Location: confirmation.html');
  }
  else{
    header('Location: error.html');
  }
}
?>