<?php 

$pan = "ACWP0000";
$name = "Shanal Omar";
$city = "Kanpur";
$phone = "8687158171";
$paid_amt = "200";
$today = "Tuesday";
$to = "shanal.shivam.omar1@gmail.com";

$subject = 'Payment Successfull';

    $req='Payment Successfull';

    $message ='<html>

    <head>

      <title>Payment Successfull</title>

    </head>

    <body>

    Dear '.$name.' , <br>
    <b>8G URN -</b> AAETR7431AF2023L<br>
    <b>Your PAN No.</b> "'.$pan.'"<br>
    
    <p>I hope this email finds you well. I am writing to inform you that we have successfully received your payment. Thank you for completing the payment process.</p>     
    
    <p>Received with Thanks from '.$name.' , '.$city.', '.$phone.' the sum of <b>Rupees '.$paid_amt.'</b> by online. Dated '.$today.'.</p>

    

    Warm regards,<br>
    <b>Roof Federation Team</b>
    </body>

    </html>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers  .= "From: $req <info@rooffederation.com>" . "\r\n";

    mail($to, $subject, $message, $headers);
    
    ?>