<?php
	session_start();

	require 'D:\OpenServer\OSPanel\domains\mysite.loc\data_base\connection_DB.php';
	echo '<link rel="stylesheet" type="text/css" href="../style_css/style.css">';

	$id = $_GET['id'];

	$extract_post = $mysqli->query("SELECT * FROM $db_table WHERE `id` = $id");

	$extr_post = $extract_post->fetch_array();

	$a = htmlspecialchars($extr_post['title']);
	$b = htmlspecialchars($extr_post['text']);

	echo '<p class="view_text1">Доброго времени суток, ' . $_SESSION['user_name'] . '</p>';

	echo '<p class="view_text2"> Создатель поста: '. $extr_post['user'] .'</p>';
	echo '<p class="view_text2">'. $a .'</p>';
	echo '<p class="view_text2">'. $b .'</p>';
	echo '<p class="view_text2">'. $extr_post['date'] .'</p>';

	echo '<button class="on_main_page2"><a href="../index.php">Назад</a></button>';

	// Редактирование данных в БД
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		if ($extr_post['user'] === $_SESSION['user_name']) {
			echo '<div class="view_div1"><button class="view_button"><a href="change_post.php?id=' . $extr_post['id'] . '">Редактировать запись</a></button></div>';
		}
	}

	// Удаление данных из БД
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		if ($extr_post['user'] === $_SESSION['user_name']) {
			echo '<div class="view_div2"><form action="delete.php" method="post">
					<input type="hidden" name="delete" value="' . $extr_post['id'] . '">
					<input class="view_button" type="submit" value="Delete">
				</form></div>';
		}
	}

	// echo '<p class="view_text2"> Создатель поста: '. $extr_post['user'] .'</p>';
	// echo '<p class="view_text2">'. $a .'</p>';
	// echo '<p class="view_text2">'. $b .'</p>';
	// echo '<p class="view_text2">'. $extr_post['date'] .'</p>';

	// echo '<button class="on_main_page2"><a href="../index.php">Назад</a></button>';

	// var_dump($extr_post);

?>