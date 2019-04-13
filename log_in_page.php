<?php
	session_start();

	include 'user/log_in.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="log_in_page.php" method="post">
		<p>Введите логин : <input type="text" name="login"></p>
		<p>Введите пароль : <input type="text" name="password"></p>
		<p><input type="checkbox" name="remember"> Запомнить меня</p>
		<p><input type="submit" name="log_in"></p> <br>
	</form>

</body>
</html>