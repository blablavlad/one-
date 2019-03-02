<?php 
	require 'connection_DB.php';

	$title = $_POST['title'];

	$delete = $mysqli->query("DELETE FROM $db_table WHERE `title`= '$title'");