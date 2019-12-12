<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Регистрация</title>
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
					<button class="btn_input" name="btn_reg">Зарегестрироваться</button><br><br>
				</div>
			</fieldset>
		</form>

		<?php
			require_once 'database.php';
			require_once 'functions.php';

			if(isset($_POST['btn_reg'])){
				$name = $_POST['input_name'];
				$password = $_POST['input_password'];
				add_user($link, $name, $password);
			}

		?>
	</body>
</html>
