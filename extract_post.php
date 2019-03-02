<?php 
	require 'connection_DB.php';

	$extrackt = $mysqli->query("SELECT `title`, `text`, `date` FROM $db_table");

	while ($result = $extrackt->fetch_array()) {
		var_dump($result);
		echo "<hr>";
	}
