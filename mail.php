<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$work = $_POST['user_work'];
$what_work = $_POST['user_what_work'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'abpop-08@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'rehytdbx cerf'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('abpop-08@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('abpop2019@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Регистрация на мероприятие';
$mail->Body    = ' ФИО: ' .$name . '<br> номер телефона: ' .$phone. '<br>Почта: ' .$email. '<br>Место работы: ' .$work. '<br>Должность: ' .$what_work ;
$mail->AltBody = '';


if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: wwww.google.com');
}
?>