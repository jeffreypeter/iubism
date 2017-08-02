<?php



//if "email" variable is filled out, send email



  if (isset($_POST['email']))  {



  



  //Email information



  $admin_email = "admin@iubism.org";



$fname=$_POST['name'];



  $email = $_POST['email'];

$headers = "From: ".$email."\r\n";

 $phone= $_POST['phone'];

$headers .= "BCC: admin@iubism.org\r\n";

  $subject = $_POST['subject'];



  $message = $_POST['message'];



  $newline = '

';


$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => 1,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_POSTFIELDS => [
        'secret' => '6LcUmiwUAAAAADP_hyrHWcjqPQRNGZhYBvLkeMo7',
        'response' => $_POST['g-recaptcha-response'],
        ],
]);
$response = json_decode(curl_exec($curl));
  //send email

if ($response->success) {
    //your actual code.



 if(mail($admin_email, "$subject","Name:" . $fname . $newline. "Phone No:" . $phone .$newline. $message,$headers))


 {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

}
else
{
died("Recaptcha missing.");
}

  }



  



 

?>







  



