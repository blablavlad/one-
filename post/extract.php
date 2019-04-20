<?php
	session_start();

	require 'data_base/connection_DB.php';

	$extract = $mysqli->query("SELECT `user`, `title`, `text`, `date`, `id` FROM $db_table");

	while ($post = $extract->fetch_array()) {

		$a = htmlspecialchars($post['title']);
		$b = htmlspecialchars($post['text']);

		echo '<div class="content"><button class="view_post_button"><a class="a" href="post/view_post.php?id=' . $post['id'] . '">Промотр поста</a></button>';;

		echo '<p> Создатель поста: '. $post['user'] .'</p>'.'<p>'. $a .'<br>'. $b .'<br>'. $post['date'] .'</p></div>';
	}