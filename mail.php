<?php
	if (!empty($_POST["name"]))
		$name = $_POST["name"];
	if (!empty($_POST["mobile"]))
		$mobile = $_POST["mobile"];
	if (!empty($_POST["subject"]))
		$subject = $_POST["subject"];
	if (!empty($_POST["email"]))
		$email = $_POST["email"];
	if (!empty($_POST["message"]))
		$message = $_POST["message"];

	if (empty($name))
	{
		echo -1;
		Exit();
	}
	if (empty($subject))
	{
		echo -2;
		Exit();
	}
	if (empty($message))
	{
		echo -3;
		Exit();
	}
	
	$to = "creadz@gmail.com";
	$mailsubject = "มีข้อความจาก ".$name." เรื่อง ".$subject;
	$mailfrom = "no-reply@baanrommaichaiklong.com";

	$bodymessage .= "<br> ข้อความจาก : " . $name;
	$bodymessage .= "<br> หัวข้อ : " . $subject;
	$bodymessage .= "<br> ip address : " . $_SERVER['REMOTE_ADDR'];
	$bodymessage .= "<br> เบอโทรศัพท์ : " . $mobile;
	$bodymessage .= "<br> อีเมล์ : " . $email;
	$bodymessage .= "<br> ข้อความ : " . $message;

	$headers = "MIME-Version: 1.0\r\n";
    $headers.= "From: =?utf-8?b?".base64_encode($mailfrom)."?=<".$mailfrom.">\r\n";
    $headers.= "Content-Type: text/html;charset=utf-8\r\n";
    $headers.= "Reply-To: $reply\r\n";  
    $headers.= "X-Mailer: PHP/" . phpversion();

	if (@mail($to, $mailsubject, $bodymessage, $headers))
		echo 1;
	else
		echo 0;