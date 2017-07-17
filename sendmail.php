<?php

//if "email" variable is filled out, send email

  if (isset($_POST['email']))  {

  

  //Email information

  $admin_email = "elan@ifmusa.org";

$fname=$_POST['name'];

  $email = $_POST['email'];

 $phone= $_POST['phone'];

  $subject = $_POST['subject'];

  $message = $_POST['message'];

  $newline = '
';

  //send email

  mail($admin_email, "$subject","Name:" . $fname . $newline. "Phone No:" . $phone .$newline. $message,"From:" . $email);

  

  //Email response

  echo "Thank you for contacting us!";

  }

  

 
?>



  

