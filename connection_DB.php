	<?php
		$db_host = 'localhost';
		$db_user = 'root';
		$db_password = '';
		$db_base = 'test';
		$db_table = 'post';

		$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

		if ($mysqli->connect_error) {
			die ('Ошибка : ('. $mysqli->connect_errno .') ' . $mysqli->connect_error);
		}