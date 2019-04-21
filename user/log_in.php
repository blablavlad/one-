<?php
	session_start();

	require 'data_base/connection_DB_user.php';

	function login($log, $pas, $db_table, $mysqli) {

		$log_in = $mysqli->query("SELECT `name`, `password` FROM $db_table WHERE `name` = '$log' AND `password` = '$pas'");

		$logg = $log_in->fetch_array();

		if ($log_in->num_rows > 0) {
			$_SESSION['user_loged_in'] = true;
			$_SESSION['user_name'] = $logg['name'];
		}
		else {
			echo '<p class="log_in_error">Пароль или логин введен неверно</p>';
	}
	}

	//если в сессии есть переменная с именем пользователя
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		// setcookie("login", $_SESSION['user_name'], time()+60*60*24*30);
		echo '<p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток!';
	}
	// если куки уже были установлены
	elseif (isset($_COOKIE['login'])) {
		$_SESSION['user_loged_in'] = true;
		$_SESSION['user_name'] = $_COOKIE['login'];
		echo '<p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток!';
	}
	// если включена запомнить меня
	elseif (isset($_POST['remember'])) {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		login($log, $pas, $db_table, $mysqli);
		if (isset($_SESSION['user_loged_in'])) {
			setcookie("login", $_POST['login'], time()+60*60*24*30);
			echo '<p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток!';
		}
	}
	// если не включена
	else {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		login($log, $pas, $db_table, $mysqli);
		if (isset($_SESSION['user_loged_in'])) {
			echo '<p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток!';
		}
	}

	if (isset($_POST['log_in'])) {
		header ('location: http://mysite.loc/index.php');

		exit;
	}