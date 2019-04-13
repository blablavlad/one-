<?php
	session_start();

	require 'D:\OpenServer\OSPanel\domains\mysite.loc\data_base\connection_DB.php';

	$id = $_GET['id'];

	var_dump($_GET);

	$extract_post = $mysqli->query("SELECT `title`, `text` FROM $db_table WHERE `id` = $id");

	$extr_post = $extract_post->fetch_array();

	$title = htmlspecialchars($extr_post['title']);
	$text = htmlspecialchars($extr_post['text']);

	echo '<form action="change_post.php?id=' . $id . '" method="post">
		<p>Изменить название: <input type="text" name="title" value="' . $title . '"></p>
		<p>Изменить текст: <input type="text" name="text" value="' . $text . '"></p>
		<p><input type="submit" name="change_post_1" /></p>
	</form>';

	$title_change = $_POST['title'];
	$text_change = $_POST['text'];

	if (isset($_POST['change_post_1'])) {
		$make_change = $mysqli->query("UPDATE $db_table SET `title` = '$title_change', `text` = '$text_change' WHERE `id` = '$id'");

		header ('location: view_post.php?id=' . $id . '');
		exit;
	}

?>