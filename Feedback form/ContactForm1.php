<?php
  $name = $_POST['Name'];
  $visitor_email=$_POST['Email'];
  $visiter_PhNum=$_POST['Phone Number'];
  $message=$_Post=$_POST['Message'];

  $email_from='ledallakalyan5299@gmail.com';

  $email_subject="FeedBack";

   $email_body="User Name : $name.\n".
                "User Email: $visitor_email.\n".
                "User PhoneNum: $visiter_PhNum.\n".
                "User Feedback: $message.\n";

    $to="ledalla_vishnu@srmap.edu.in";
    
    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);
   
     header("Location: index.html");
?>