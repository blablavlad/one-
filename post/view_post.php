<?php
	session_start();

	require 'D:\OpenServer\OSPanel\domains\mysite.loc\data_base\connection_DB.php';

	$id = $_GET['id'];

	$extract_post = $mysqli->query("SELECT * FROM $db_table WHERE `id` = $id");

	$extr_post = $extract_post->fetch_array();

	$a = htmlspecialchars($extr_post['title']);
	$b = htmlspecialchars($extr_post['text']);

	echo '<p>Пост создал, ' . $extr_post['user'] . '</p>';

	echo '<p>Залогиненный пользователь, ' . $_SESSION['user_name'] . '</p>'; //удалить после исправления ошибки

	// Редактирование данных в БД
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		if ($extr_post['user'] === $_SESSION['user_name']) {
			echo '<button><a href="change_post.php?id=' . $extr_post['id'] . '">Редактировать запись</a></button>';
		}
	}

	// Удаление данных из БД
	if (isset($_SESSION['user_name']) && isset($_SESSION['user_loged_in'])) {
		if ($extr_post['user'] === $_SESSION['user_name']) {
			echo '<form action="delete.php" method="post">
					<input type="hidden" name="delete" value="' . $extr_post['id'] . '">
					<input type="submit" value="Delete">
				</form>';
		}
	}

	echo '<p> Создатель поста: '. $extr_post['user'] .'</p>'.'<p>'. $a .'<br>'. $b .'<br>'. $extr_post['date'] .'</p><hr>';

	echo '<a href="../index.php">Вернуться на главную</a>';

	var_dump($extr_post);

?>