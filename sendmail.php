<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'PHPMailer/language');
$mail->IsHTML(true);

$mail->setForm('s.konstantinn.dev@gmail.com');
$mail->addAddress('sinizin2000@gmail.com');
$mail->Subject = 'Тест';

$hand = "Правая";
if($_POST['hand'] == 'left'){
    $hand = 'Левая';
}

$body = '<h1>ПИСЬМО.ВСЕ ОК!</h1>';

$mail->Body = $body;

if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($responce);
?>