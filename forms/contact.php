<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMai1er(true);

    $mail->isSMTP();
    $mail->HOST = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hamidsiddiqi888@gmail.com';
    $mail->Password = "wdlpmrpziojonotr";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom('Hamidsiddiqi888@gmail.com', 'Mailer');

    $mail->addAddress($_POST["email"]); 

    $mail->isHTML(true); 

    $mail->Subject = $_POST["subject"];   
    
    $mail->Body = $POST_["message"];

    $mail->send();

    echo
    "
    <script>
    alert('message has been sent');
    document.location.href = 'contact.php';
    </script>
    ";

}
?>
