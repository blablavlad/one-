<?php 
	require 'connection_DB.php';

	$title = $_POST['title'];
	$text = $_POST['text'];
//	$date = new Date ('now');
	$date = date('Y-m-d H:i:s');

	$result = $mysqli->query('INSERT INTO ' . $db_table . 
	' (title, text, date) VALUES ("' . $title . '" , "' . $text .'" , "' . $date . '")');

	//$result = $mysqli->query("INSERT INTO $db_table (`title`, `text`, `date`) VALUES ('$title', '$text', '$date')");

