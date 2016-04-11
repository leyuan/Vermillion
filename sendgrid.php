<?php
require("sendgrid-php/sendgrid-php.php");

$sendgrid = new SendGrid('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');
$email = new SendGrid\Email();
$email
    ->addTo('leyuan@mailinator.com')
    ->setFrom('lyuu@mailinator.com')
    ->setSubject('New Message')
    ->setText('Hello World!')
    ->setHtml('<strong>Hello World!</strong>')
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