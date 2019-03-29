<?php
	session_start();

	require 'connection_DB.php';

	$id = $_POST['change_post'];

	$extract_post = $mysqli->query("SELECT `title`, `text` FROM $db_table WHERE `id` = $id");

	$extr_post = $extract_post->fetch_array();

	$title = htmlspecialchars($extr_post['title']);
	$text = htmlspecialchars($extr_post['text']);

	echo '<form action="change_post.php" method="post">
		<p>Изменить название: <input type="text" name="title" value="' . $title . '"></p>
		<p>Изменить текст: <input type="text" name="text" value="' . $text . '"></p>
		<p><input type="submit" name="change_post" /></p>
	</form>';

	if (isset($_POST['change_post'])) {
		$make_change = $mysqli->query("UPDATE $db_table SET `title` = '$title', `text` = '$text' WHERE `id` = '$id'");

		// header ('location: index.php');

		// exit;
	}

?>