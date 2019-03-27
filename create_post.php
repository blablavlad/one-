<?php
	require 'connection_DB.php';

	$title = $_POST['title'];
	$text = $_POST['text'];
	$date = date('Y-m-d H:i:s');

	// $title = htmlspecialchars($title1);
	// $text = htmlspecialchars($text1);

	$result = $mysqli->query("INSERT INTO $db_table (`title`, `text`, `date`) VALUES ('$title', '$text', '$date')");

	header ('location: index.php');

	exit;