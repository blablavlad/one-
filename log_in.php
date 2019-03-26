<?php
	session_start();

	require 'connection_DB_user.php';

	function login() {
		global $log, $pas, $db_table, $mysqli;

		$log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table WHERE `name` = '$log' AND `password` = '$pas'");

		$logg = $log_in->fetch_array();
		// echo $logg['name'];
		// echo $logg['password'];

		// var_dump($log_in);
		if ($log_in->num_rows > 0) {
			$_SESSION['user_loged_in'] = true;
			$_SESSION['user_name'] = $logg['name'];
		}
		else {
			echo '<br>';
			echo 'Пароль или логин введен неверно';
	}
	}

	// если куки уже были установлены
	if (isset($_COOKIE['login'])) {
		$_SESSION['user_loged_in'] = true;
		$_SESSION['user_name'] = $_COOKIE['login'];
		echo '<p>'. $_SESSION['user_name'] . ', доброго времени суток!';
	}
	// если включена запомнить меня
	elseif (isset($_POST['remember'])) {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		login();
		if (isset($_SESSION['user_loged_in'])) {
			setcookie("login", $_POST['login'], time()+60*60*24*30);
			echo '<p>'. $_SESSION['user_name'] . ', доброго времени суток!';
		}
	}
	// если не включена
	else {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		login();
	}