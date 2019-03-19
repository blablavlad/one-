<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>регистрация пользователя</title>
</head>
<body>

	<?php
		require 'connection_DB_user.php';

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
			}
			else {
				echo '<p>' . array_shift($errors) . '</p><hr>';
			}
		// }
		// // если ошибок нет
		// if (empty($errors)) {
		// 	$registration = $mysqli->query("INSERT INTO $db_table (`name`, `password`) VALUES ('$login', '$password')");
		// }


	?>

<!-- 	<form action="log_in.php" method="post">
		<p>Введите логин : <input type="text" name="login"></p>
		<p>Введите пароль : <input type="text" name="password"></p>
		<p><input type="submit"></p> <br><br>
	</form> -->

	<form action="index.php" method="post">
		<p>Введите логин : <input type="text" name="login" value="<?php echo $_POST['login']; ?>"></p>
		<p>Введите пароль : <input type="password" name="password" value="<?php echo $_POST['password']; ?>"></p>
		<p>Повторите введённый пароль : <input type="password" name="password_2"></p>
		<p><input type="submit" name="do_registration"></p>
	</form>

</body>
</html>