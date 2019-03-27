<?php
	require 'connection_DB.php';

	$extract = $mysqli->query("SELECT `title`, `text`, `date`, `id` FROM $db_table"); // попробовать через *

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
		echo '<p>'. $a .'<br>'. $b .'<br>'. $post['date'] .'</p><hr>';
		// echo '<p>'. $post['title'] .'<br>'. $post['text'] .'<br>'. $post['date'] .'</p><hr>';
	}