<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Главная Страница</title>
	</head>

	<body>
		<form method="post">
			<fieldset id="form_sign_in">
			<legend>Введите имя пользователя и пароль</legend>

				<div class="input">
					<label>Имя пользователя</label><br>
					<input type="text" name="input_name" required><br>
					<label>Пароль</label><br>
					<input type="password" name="input_password" required>
					<button class="btn_input" name="btn_log">Войти</button><br><br>
				</div>
				<a href="register.php">Зарегистрироваться</a>
			</fieldset>
		</form>

		<?php
			require_once 'database.php';
			require_once 'functions.php';

			if(isset($_POST['btn_log'])){
				$name = $_POST['input_name'];
				$password = $_POST['input_password'];
				$user = get_user($link, $name, $password);

				if($user != null){
				    echo "hello!";
					header('Location: secret_page.html');
				}
			}
		 ?>

	</body>
</html>
