<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_from = strip_tags(trim($_POST["name"]));
    $name_from = str_replace(array("\r","\n"),array(" "," "), $name_from);
    $email_from = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);
    $reserve = $_POST["reserve"];

    if ( empty($name_from) OR empty($message) OR !filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
        echo "bad request";
        exit;
    }
    require("sendgrid-php/sendgrid-php.php");

    $email_content = "Name: $name_from\n\n";
    $email_content .= "Email: $email_from\n\n";
    $email_content .= "Reserve: $reserve\n\n";
    $email_content .= "Message:\n\n$message\n\n";
    $sendgrid = new SendGrid('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');
    $email = new SendGrid\Email();
    $email
        ->addTo('info@redleafcanada.com')
        ->setFrom($email_from)
        ->setSubject('New Message From Website')
        ->setText("$email_content")
    ;

    try {
        $sendgrid->send($email);
        echo "success";
    } catch(\SendGrid\Exception $e) {
        echo $e->getCode();
        foreach($e->getErrors() as $er) {
            echo $er;
        }
    }
}
