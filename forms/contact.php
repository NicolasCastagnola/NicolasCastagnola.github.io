<?php
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = 'Castagnola.nicolas@gmail.com';
    $headers = "From: " .$mailFrom;
    $text = "Message From: ".$name.".\n\n".$message;
    mail($mailTo, $subject, $headers, $text);

  }
?>
