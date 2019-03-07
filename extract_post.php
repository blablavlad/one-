<?php 
	require 'connection_DB.php';

	$extrackt = $mysqli->query("SELECT `title`, `text`, `date`, `id` FROM $db_table");

	// $extrackt_id = $mysqli->query("SELECT `id` FROM $db_table"); //присвоение переменной значение id 

	while ($result = $extrackt->fetch_array()) {
		echo '<form action="delete.php" method="post">
						<input type="hidden" name="delete" value="'.$result['id'].'">
						<input type="submit" value="Delete">
					</form>';
		// var_dump($result);
		echo '<p>' . $result['title'] . '<br>' . $result['text'] . '<br>' . $result['date'] . '<hr></p>';
		// echo '<a href="delete.php?id='. $result['id'] .'">Удалить нахуй уже</a>';
	}