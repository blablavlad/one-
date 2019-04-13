<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pas = '';
	$db_base = 'test';
	$db_table = 'post';

	$mysqli = new mysqli($db_host, $db_user, $db_pas, $db_base);
	if ($mysqli->connection_error) {
		die ('Ошибка подключения : ('. $mysqli->connection_errno . ') ' . $mysqli->connection_error);	
	}