<?php 
	session_start();
	include 'log_in.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой сайт</title>
</head>
<body>

	<!-- войти -->
	<form action="index.php" method="post">
		<p>Введите логин : <input type="text" name="login"></p>
		<p>Введите пароль : <input type="text" name="password"></p>
		<p><input type="checkbox" name="remember"> Запомнить меня</p>
		<p><input type="submit"></p> <br>
	</form>
	<!-- регистрация -->
	<p><a href="registration_page.php">Зарегистрироваться</a></p>

	<form action="exit.php" method="post">
		<p><input type="submit" name="exit" value="Выйти"></p>
	</form>

	<a href="new_page.php">тестовая страница</a>
	<!-- создание поста -->
	<form action="create_post.php" method="post">
		<p>Введите название: <input type="text" name="title"></p>
		<p>Введите текст: <input type="text" name="text"></p>
		<p><input type="submit" /></p>
	</form>

	<?php
		require 'extract.php';
	?>

</body>
</html>