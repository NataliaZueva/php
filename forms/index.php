<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Форма</title>
	<link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="form-conf">
		<div class="form-place">
			<span class="title">
				<h1>Форма регистрации на конференцию</h1>
			</span>

			<form action="php/submit-form.php" method="POST">
				<label for="Name">Имя:<br></label>
				<input type="txt" class="form-control" name="name" value="<?= htmlspecialchars($_POST["name"] ?? "") ?>" placeholder="Введите имя" required><br>

				<label for="SurName">Фамилия:<br></label>
				<input type="txt" class="form-control" name="lastname" value="<?= htmlspecialchars($_POST["lastname"] ?? "") ?>" placeholder="Введите фамилию" required><br>

				<label for="E-mail">Электронный адрес:<br></label>
				<input type="email" class="form-control" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Введите email" required><br>

				<label for="ID">Телефон для связи:<br></label>
				<input type="txt" class="form-control" name="phone" value="<?= htmlspecialchars($_POST["phone"] ?? "") ?>" placeholder="Введите телефон" required><br>



				<label for="topic">Выберите интересующую тематику:</label>
				<select id="topic" name="topic">
					<option value="webmoney">Бизнес</option>
					<option value="yandex">Технологии</option>
					<option value="paypal">Реклама и Маркетинг</option>
				</select>
				<br>

				<label for="payment">Выберите метод оплаты участия:</label>
				<select id="payment" name="payment">
					<option value="webmoney">WebMoney</option>
					<option value="yandex">Яндекс.Деньги</option>
					<option value="paypal">PayPal</option>
					<option value="credit-card">Credit Card</option>
				</select>
				<br>

				<input type="submit" value="Отправить данные" />
			</form>
		</div>
	</div>
</body>

</html>