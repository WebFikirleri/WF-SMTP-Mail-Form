<?php

$config['mail_host'] = '';            			// SMTP Hostu
$config['mail_port'] = 587;                     // SMTP Portu
$config['smpt_secure'] = '';					// SSL kullanan bir sunucu için ön ek *
$config['mail_username'] = '';    				// SMTP Kullanıcı Adı (E-Posta Adresi Olmalıdır) **
$config['mail_from'] = '';           			// Gönderici Adresi ***
$config['mail_password'] = '';                	// SMTP Kullanıcı Parolası
$config['mail_sender'] = '';                    // E-Postada Gönderen Kişinin Adı Bölümünde Gözükecektir
$config['mail_to'] = '';                		// E-Postanın kime gideceği
$config['mail_subject'] = '';					// E-Postanın konusu
$config['base_url'] = '';						// Script'in bulunduğu dizine ait url ****

/**
*	Örneğin gmail için bu alana girilecek değer 'tls' olmalıdır.
	Sertifikasız sunucular için boş bırakınız.

** 	Bazı sunucularda kullanıcı adı
	hesapadi@alanadi.com yerine hesapadi+alanadi.com
	şeklinde olabilmektedir.
	
*** Bazı sunucularda smtp kullanıcı adı ile aynı olması gerekmektedir.
	Eğer bu şekilde bir zorunluluk yoksa noreply@alanadi.com şeklinde kullanabilirsiniz.
	
**** contact.php dosyasının olduğu dizin olmalıdır. Örn:
	http://alanadi.com/
	ya da
	http://alanadi.com/mail/
	
*/