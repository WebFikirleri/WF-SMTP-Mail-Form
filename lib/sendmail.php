<?php

	require_once(THE_PATH.'/lib/phpmailer/class.phpmailer.php');
	require_once(THE_PATH.'/lib/phpmailer/class.smtp.php');
	require_once(THE_PATH.'/lib/config.php');

	$pdata = $_POST;

	$message = file_get_contents(THE_PATH.'/lib/contact_mail.tpl.php');
	$message = strtr($message, $pdata);

	$mail = new PHPMailer(true);

	$mail->SetLanguage('tr');

	$mail->IsSMTP();
	$mail->CharSet = "UTF-8";
	$mail->Host = $config['mail_host'];
	$mail->SMTPAuth = true;
	if ($config['smpt_secure'] != '') {
		$mail->SMTPSecure = $config['smpt_secure'];
	}
	$mail->Port = $config['mail_port'];
	$mail->Username = $config['mail_username'];
	$mail->Password = $config['mail_password'];
	$mail->SetFrom($config['mail_from'],$config['mail_sender']);
	$mail->AddAddress($config['mail_to']);
	$mail->Subject = $config['mail_subject'];
	$mail->AltBody = 'Mesajı görüntülemek için HTML destekli bir e-posta istemcisi kullanınız...';

	$mail->MsgHTML($message);

	try {
		$mail->Send();
		require_once(THE_PATH.'/lib/success.tpl.php');
	} catch (phpmailerException $e) {
		$error = $e->errorMessage();
		require_once(THE_PATH.'/lib/error.tpl.php');
	}