<?php
	session_start()

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>тест</title>
</head>
<body>

	<?php
	if (isset($_SESSION['user_loged_in'])) {
		echo '<p>'. $_SESSION['user_name'] . ' , доброго времени суток<p> <p><a href="index.php">вернуться назад</a></p>';
	}
	else {
		echo '<p>Вы не вошли<br><a href="index.php">Войти</a></p>';
	}

	?>

</body>
</html>