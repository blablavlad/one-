<?php
	session_start();

	require 'connection_DB.php';

	$id = $_POST['delete'];

	$extract_user = $mysqli->query("SELECT `user` FROM $db_table WHERE `id`='$id'");

	$extr_user = $extract_user->fetch_array();

	if ($extr_user['user'] = $_SESSION['user_name']) {
		$delete = $mysqli->query("DELETE FROM $db_table WHERE `id`= '$id'");
	}

	// $delete = $mysqli->query("DELETE FROM $db_table WHERE `id`= '$id'");

	header ('location: index.php');

	exit;