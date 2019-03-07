<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой сайт</title>
</head>
<body>

 	<form action="create_post.php" method="post">
		<p>Название: <input type="text" name="title" /></p>
		<p>Текст: <input type="text" name="text" /></p>
		<p><input type="submit" /></p>
	</form>

	<hr>
	<?php
		$today = date('Y-m-d h:i:s');
		echo "$today";
	?>
	<hr>

	<?php
		require 'extract_post.php';
	?>
	
</body>
</html>
