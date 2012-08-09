<?php

$path = dirname(__FILE__);
define('THE_PATH', $path);

if (isset($_POST['is_posted'])) {
	require_once(THE_PATH.'/lib/sendmail.php');
} else {
	require_once(THE_PATH.'/lib/contact_form.php');
}