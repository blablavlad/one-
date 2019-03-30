<?php
	session_start();

	require 'connection_DB.php';

	$extract = $mysqli->query("SELECT `user`, `title`, `text`, `date`, `id` FROM $db_table");

	while ($post = $extract->fetch_array()) {

		$a = htmlspecialchars($post['title']);
		$b = htmlspecialchars($post['text']);

		echo '<button><a href="view_post.php?id=' . $post['id'] . '">Промотр поста</a></button>';;

		echo '<p> Создатель поста: '. $post['user'] .'</p>'.'<p>'. $a .'<br>'. $b .'<br>'. $post['date'] .'</p><hr>';
	}