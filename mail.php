<?php
  if(isset( $_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
  
    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "ngoupayousalim@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader);
    echo "Email sent!";
    header("location: Portfolio.html");
  }
  
?>