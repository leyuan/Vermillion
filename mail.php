<?php
require 'PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_from = strip_tags(trim($_POST["name"]));
    $name_from = str_replace(array("\r","\n"),array(" "," "), $name_from);
    $email_from = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    if ( empty($name_from) OR empty($message) OR !filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
        echo "bad request";
        exit;
    }

    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "support@aichenginfo.ca";
    $mail->Password = "aichenginfo101";
    $to = "lyuu@mailinator.com";
    $name = "Troy";

    $mail->AddAddress($to, $name);
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = "New Message From Website";
    $email_content = "Name: $name_from\n";
    $email_content .= "Email: $email_from\n\n";
    $email_content .= "Message:\n$message\n";
    $mail->Body = $email_content;

    try{
        $mail->Send();
        echo "success";
    } catch(Exception $e){
        var_dump($e);
        echo "fail";
    }
}


?>