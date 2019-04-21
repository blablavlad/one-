<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>

	<?php
		echo '<link rel="stylesheet" type="text/css" href="../style_css/style.css">';
		include 'user/registration.php';
	?>

	<div class="container_1">
		<form action="registration_page.php" method="post">
			<p><input class="input_login" type="text" name="login" value="<?php echo @$_POST['login']; ?>" placeholder="Введите логин"></p>
			<p><input class="input_login" type="password" name="password" value="<?php echo @$_POST['password']; ?>" placeholder="Введите пароль"></p>
			<p><input class="input_login" type="password" name="password_2" placeholder="Повторите введённый пароль"></p>
			<p><input class="input_submit" type="submit" name="do_registration"></p>
		</form>
	</div>

	<p><button><a class="on_main_page" href="index.php">Назад</a></button></p>

</body>
</html>

