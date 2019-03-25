<?php
	session_start();

	require 'connection_DB_user.php';

	function login() {
		$log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table WHERE `name` = '$log' AND `password` = '$pas'");
	
		$logg = $log_in->fetch_array();
		echo $logg['name'];
		echo $logg['password'];

		var_dump($log_in);
		if ($log_in->num_rows > 0) {
			$_SESSION['user_loged_in'] = true;
			$_SESSION['user_name'] = $logg['name'];
			echo '<p>'. $_SESSION['user_name'] . ', доброго времени суток!';
		}
		else {
			echo '<br>';
			echo 'Пароль или логин введен неверно';
	}
	}

	if (isset($_POST['remember'])) {
		setcookie("login", $_POST['login'], time()+60*60*24*30);
		setcookie("password", $_POST['password'], time()+60*60*24*30);
		$log = $_COOKIE['login'];
		$pas = $_COOKIE['password'];
		login();
	}
	else {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		login();
	}

	if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
		# code...
	}

	// $log = $_POST['login'];
	// $pas = $_POST['password'];

	// $log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table WHERE `name` = '$log' AND `password` = '$pas'");
	
	// $logg = $log_in->fetch_array();
	// echo $logg['name'];
	// echo $logg['password'];

	// var_dump($log_in);
	// if ($log_in->num_rows > 0) {
	// 	$_SESSION['user_loged_in'] = true;
	// 	$_SESSION['user_name'] = $logg['name'];
	// 	echo '<p>'. $_SESSION['user_name'] . ', доброго времени суток!';
	// }
	// else {
	// 	echo '<br>';
	// 	echo 'Пароль или логин введен неверно';
	// }