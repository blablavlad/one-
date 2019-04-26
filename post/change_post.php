<?php
	session_start();

	require 'D:\OpenServer\OSPanel\domains\mysite.loc\data_base\connection_DB.php';
	echo '<link rel="stylesheet" type="text/css" href="../style_css/style.css">';

	$id = $_GET['id'];

	$extract_post = $mysqli->query("SELECT `title`, `text` FROM $db_table WHERE `id` = $id");

	$extr_post = $extract_post->fetch_array();

	$title = htmlspecialchars($extr_post['title']);
	$text = htmlspecialchars($extr_post['text']);

	echo '<form action="change_post.php?id=' . $id . '" method="post">
			<p class="change_name_post">Изменить название: <input class="post_title" type="text" name="title" value="' . $title . '"></p>
			<p class="change_text_post">Изменить текст: <textarea class="post_text_change" name="text" rows="10" cols="50">' . $text . '</textarea></p>
			<p class="change_post_submit"><input class="post_submit" type="submit" name="change_post_1" /></p>
		</form>';

	echo '<button class="on_main_page2"><a href="../index.php">Назад</a></button>';

	$title_change = $_POST['title'];
	$text_change = $_POST['text'];

	if (isset($_POST['change_post_1'])) {
		$make_change = $mysqli->query("UPDATE $db_table SET `title` = '$title_change', `text` = '$text_change' WHERE `id` = '$id'");

		header ('location: view_post.php?id=' . $id . '');
		exit;
	}

?>