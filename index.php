<?php 
	session_start();
			include 'log_in.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>регистрация пользователя</title>
</head>
<body>

	<?php
		include 'registration.php';
	?>

	<form action="index.php" method="post">
		<p>Введите логин : <input type="text" name="login"></p>
		<p>Введите пароль : <input type="text" name="password"></p>
		<p><input type="checkbox" name="remember"> Запомнить меня</p>
		<p><input type="submit"></p> <br><br>
	</form>

	<?php
		// include 'log_in.php';
	?>

	<form action="index.php" method="post">
		<p>Введите логин : <input type="text" name="login" value="<?php echo @$_POST['login']; ?>"></p>
		<p>Введите пароль : <input type="password" name="password" value="<?php echo @$_POST['password']; ?>"></p>
		<p>Повторите введённый пароль : <input type="password" name="password_2"></p>
		<p><input type="submit" name="do_registration"></p>
	</form>

	<form action="exit.php" method="post">
		<p><input type="submit" name="exit" value="Выйти"></p>
	</form>

	<a href="new_page.php">тестовая страница</a>

</body>
</html>