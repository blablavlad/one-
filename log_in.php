<?php
	require 'connection_DB_user.php';

	$log = $_POST['login'];
	$pas = $_POST['password'];

	$log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table");

	while ($logg = $log_in->fetch_array()) {
		if ($log == $logg['name'] && $pas == $logg['password']) {
			// if ($pas == $logg['password']) {
			echo '<p>'. $logg['name'] . ', доброго времени суток!';
			// }
			// else {
			// 	echo 'Пароль или логин введен неверно';
			// }
			exit;
		}
		else {
				echo 'Пароль или логин введен неверно';
			}
	}