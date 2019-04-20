<?php
	session_start();

	include 'user/log_in.php';

	echo '<link rel="stylesheet" type="text/css" href="../style_css/style.css">';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div class="container">
		<form action="log_in_page.php" method="post">
		<div>
			<input class="input_login" type="text" name="login" placeholder="Введите логин">
		</div>
		<div>
			<input class="input_login" type="text" name="password" placeholder="Введите пароль">
		</div>
		<div>
			<p><input class="input_checkbox" type="checkbox" name="remember"> Запомнить меня</p>
			<p><input class="input_submit" type="submit" name="log_in" value="Войти"></p> <br>
		</div>
		</form>
	</div>

<!-- 	<form action="log_in_page.php" method="post">
		<p>Введите логин : <input type="text" name="login"></p>
		<p>Введите пароль : <input type="text" name="password"></p>
		<p><input type="checkbox" name="remember"> Запомнить меня</p>
		<p><input type="submit" name="log_in"></p> <br>
	</form> -->

</body>
</html>