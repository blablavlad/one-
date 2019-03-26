<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>

	<?php
		include 'registration.php';
	?>

	<form action="registration_page.php" method="post">
		<p>Введите логин : <input type="text" name="login" value="<?php echo @$_POST['login']; ?>"></p>
		<p>Введите пароль : <input type="password" name="password" value="<?php echo @$_POST['password']; ?>"></p>
		<p>Повторите введённый пароль : <input type="password" name="password_2"></p>
		<p><input type="submit" name="do_registration"></p>
	</form>

	<p><a href="index.php">Назад</a></p>

</body>
</html>

