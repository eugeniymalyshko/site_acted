<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'imap.ukr.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'genikm@ukr.net';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::SMTP;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('irzi@ukr.net', 'Acted user');
    $mail->addAddress('genikm@ukr.net', 'Joe User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Request from the site';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//<?php
//
//// Load Composer's autoloader
//require ROOT . '/vendor/phpmailer/PHPMailer.php';
//require ROOT . '/vendor/phpmailer/SMTP.php';
//require ROOT . '/vendor/phpmailer/Exception.php';
//
//
//// Переменные, которые отправляет пользователь
//$name = $_POST['name'];
//$phone = $_POST['phone'];
//$comment = $_POST['comment'];
//
//// Формирование самого письма
//$title = "Замовлення заходу/послуги";
//$body = "
//<b>Ім'я:</b> $name<br><br>
//<b>Телефон:</b> $phone<br><br>
//<b>Повідомлення:</b><br>$comment";
//
//// Настройки phpmailer
//$mail = new \PHPMailer\PHPMailer\PHPMailer();                  // Passing `true` enables exceptions
//try {
//    //Server settings
//    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'mail.adm.tools';                         // Specify main and backup SMTP servers
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'admin@garant-food.kiev.ua';                   // SMTP username
//    $mail->Password = 'bM2adD65E8Kv';                 // SMTP password
//    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = '465';                                    // TCP port to connect to
//    $mail->CharSet = 'UTF-8';
//    //Recipients
//    $mail->setFrom('admin@garant-food.kiev.ua', 'Гарант-Сервіс');
//    $mail->addAddress('garantservice.food@gmail.com', 'Гарант-Сервіс');
//
//    //Attachments
//    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//
//    //Content
//    $mail->isHTML(true);                              // Set email format to HTML
//    $mail->isHTML(true);
//    $mail->Subject = $title;
//    $mail->Body = $body;
//
//    $mail->send();
//    echo 'Message has been sent';
//}
//catch (Exception $e) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//}
//?>
//

