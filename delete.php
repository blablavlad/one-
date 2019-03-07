<?php 
	require 'connection_DB.php';

	$id = $_POST['delete'];

	$delete = $mysqli->query("DELETE FROM $db_table WHERE `id`= '$id'");

	header('location: index.php');
	
	exit;