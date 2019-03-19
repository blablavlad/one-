<?php
	require 'connection_DB_user.php';

	// $errors = array ();
	// if ($_POST['login'] == '') {
	// 	$errors[] = 'Введите логин';
	// }
	// if ($_POST['password'] == '') {
	// 	$errors[] = 'Введите пароль';
	// }
	// if ($_POST['password'] != $_POST['password_2']) {
	// 	$errors[] = 'Введите логин';
	// }
	// if (empty($errors)) {
	// }
	// else {
	// 	echo '<p>' . array_shift($errors) . '</p><hr>';
	// }



	$login = $_POST['login'];
	$password = $_POST['password'];
	$password_2 = $_POST['password_2'];

	if ($password != $password_2) {

		header ('location: index.php');
		// echo 'Повторите введённый пароль верно'; //перенести в другое место
		
	}
	else {
		$registration = $mysqli->query("INSERT INTO $db_table (`name`, `password`) VALUES ('$login', '$password')");
	}

	header ('location: index.php');

	exit;