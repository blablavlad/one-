<?php
	session_start();
	require 'connection_DB.php';

	$create_post_error = array ();

	if (isset($_POST['create_post'])) {

		if (empty($_POST['title'])) {
			$create_post_error [] = 'Вы не ввели название!';
		}
		if (empty($_POST['text'])) {
			$create_post_error [] = 'Вы не ввели текст!';
		}

		if (empty($create_post_error)) {
			$title = $_POST['title'];
			$text = $_POST['text'];
			$date = date('Y-m-d H:i:s');
			$user = $_SESSION['user_name'];

			$result = $mysqli->query("INSERT INTO $db_table (`user`, `title`, `text`, `date`) VALUES ('$user', '$title', '$text', '$date')");

			header ('location: index.php');

			exit;
		}
	}