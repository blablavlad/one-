<?php
	session_start();

	require 'connection_DB_user.php';

	$log = $_POST['login'];
	$pas = $_POST['password'];

	$log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table");

	while ($logg = $log_in->fetch_array()) {
		if ($log == $logg['name'] && $pas == $logg['password']) {
			$login = true; 
			$_SESSION['user_name'] = $logg['name'];
		}
	}

	if (isset($_SESSION['user_name'])) {
	// if ($login = true) {
		echo '<p>'. $_SESSION['user_name'] . ', доброго времени суток!';
	}
	else {
		echo 'Пароль или логин введен неверно';
	}