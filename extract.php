<?php
	session_start();

	require 'connection_DB.php';

	$extract = $mysqli->query("SELECT `user`, `title`, `text`, `date`, `id` FROM $db_table"); // попробовать через *

	while ($post = $extract->fetch_array()) {
		// echo '<pre>';
		// var_dump($post);
		// echo '</pre>';

		$a = htmlspecialchars($post['title']);
		$b = htmlspecialchars($post['text']);

		echo '<form action="delete.php" method="post">
				<input type="hidden" name="delete" value="' . $post['id'] . '">
				<input type="submit" value="Delete">
			</form>';
		echo '<p> Создатель поста: '. $post['user'] .'</p>'.'<p>'. $a .'<br>'. $b .'<br>'. $post['date'] .'</p><hr>';
	}