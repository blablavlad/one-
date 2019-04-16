<?php
	require 'data_base/connection_DB_user.php';

	var_dump($_POST);

	if (isset($_POST['do_registration'])) {

		$errors = array ();
		if (empty($_POST['login'])) {
			$errors[] = 'Введите логин';
		}
		if (empty($_POST['password'])) {
			$errors[] = 'Введите пароль';
		}
		if ($_POST['password'] != $_POST['password_2']) {
			$errors[] = 'Введённые пароли не совпадают';
		}
		if (empty($errors)) {
			$login = $_POST['login'];
			$password = $_POST['password'];
			$registration = $mysqli->query("INSERT INTO $db_table (`name`, `password`) VALUES ('$login', '$password')");
			header ('location: http://mysite.loc/index.php');
		}
		else {
			echo '<p>' . array_shift($errors) . '</p><hr>';
		}
		}
		// добавить проверку на одинаковые логины