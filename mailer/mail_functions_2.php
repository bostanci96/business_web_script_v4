<?php
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.yandex.com';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet ="utf-8";
$mail->Username = "system@utkubostanci.com.tr"; 
$mail->Password = "6303.Oub";
  $mail->SetFrom("system@utkubostanci.com.tr", "Bostanci96 System"); // Mail attigimizda yazacak isim


  $mail->AddAddress('info@mehtibeats.com', $ayar["site_title"]);


  $mail->CharSet = 'UTF-8';


  $mail->Subject = $ayar["site_title"].' İletişim Formu';


  $mail->MsgHTML($ileti);
