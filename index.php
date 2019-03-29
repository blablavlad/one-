<?php 

	session_start();

	include 'create_post.php';

	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		echo '<p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток! <br>';
	}
	else {
		echo '<br>';
		echo 'Пароль или логин введен неверно <br>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой сайт</title>
</head>
<body>

	<!-- войти -->
	<?php
		if (!isset($_SESSION['user_name']) && !isset($_SESSION['user_loged_in'])) {
			echo '<a href="log_in_page.php">Войти</a>';
		}
	?>

	<!-- регистрация -->
	<?php
		if (!isset($_SESSION['user_name']) && !isset($_SESSION['user_loged_in'])) {
			echo '<p><a href="registration_page.php">Зарегистрироваться</a></p>';
		}
	?>

	<!-- Выход -->
	<?php
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
			echo '<form action="exit.php" method="post">
			<p><input type="submit" name="exit" value="Выйти"></p>
			</form>';
		}
	?>

	<a href="new_page.php">тестовая страница</a>

	<!-- создание поста -->
	<?php
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
			echo '<form action="index.php" method="post">
			<p>Введите название: <input type="text" name="title"></p>
			<p>Введите текст: <input type="text" name="text"></p>
			<p><input type="submit" name="create_post" /></p>
			</form>';
		}
		 if (!empty($create_post_error)) {
			echo '<p>'. $create_post_error['0'] .'</p>'. '<p>'. $create_post_error['1'] .'</p>';
 		}
	?>

	<br><br><br>

	<?php
		require 'extract.php';
	?>

</body>
</html>