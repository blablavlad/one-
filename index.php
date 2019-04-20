<?php 
	// сделать навигацию
	session_start();

	include 'D:\OpenServer\OSPanel\domains\mysite.loc\post\create_post.php';

	echo '<link rel="stylesheet" type="text/css" href="../style_css/style.css">';
	// echo '<link rel="stylesheet" type="text/css" href="' . __DIR__ . '/style_css/style.css">'; //не работает 

	// require __DIR__ . '/style_css/style.css';

	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		echo '<div class="header"><p>'. htmlspecialchars($_SESSION['user_name']) . ', доброго времени суток! </p></div>';
	}
	else {
		echo '<div class="header"><p>Пароль или логин введен неверно </p></div>';
	}
	// echo '<link rel="stylesheet" type="text/css" href="style.css">';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой сайт</title>
</head>
<body>
	<!-- <div class="content"> -->
	<!-- войти -->
	<?php
		if (!isset($_SESSION['user_name']) && !isset($_SESSION['user_loged_in'])) {
			echo '<div class="input"><p><a class="a" href="log_in_page.php">Войти</a></p></div>';
		}
	?>

	<!-- регистрация -->
	<?php
		if (!isset($_SESSION['user_name']) && !isset($_SESSION['user_loged_in'])) {
			echo '<p><a class="registration" href="registration_page.php">Зарегистрироваться</a></p>';
		}
	?>

	<!-- Выход -->
	<?php
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
			echo '<form action="user/exit.php" method="post">
			<p><input type="submit" class="exit" name="exit" value="Выйти"></p>
			</form>';
		}
	?>

	<!-- создание поста -->
	<?php
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
			echo '<form class="create_post" action="index.php" method="post">
			<p><input class="post_title" type="text" name="title" placeholder="Введите название"></p>
			<p><textarea class="post_text" name="text" placeholder="Введите текст" rows="10" cols="50"></textarea></p>

			<p><input class="post_submit" type="submit" name="create_post" /></p>
			</form>';
		}
		 if (!empty($create_post_error)) {
			echo '<p>'. $create_post_error['0'] .'</p>'. '<p>'. $create_post_error['1'] .'</p>';
 		}
	?>

	<?php
		require 'post/extract.php';
	?>

	<!-- </div> -->
</body>
</html>

<!-- <p><textarea name="text"></textarea></p>
<p><input class="post_text" type="text" name="text" placeholder="Введите текст"></p> -->
