<!-- получение и обработка данных с формы -->

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$payment = $_POST['payment'];

	$name = trim($name);
	$lastname = trim($lastname);
	$email = trim($email);
	$phone = trim($phone);

	if (empty($name) || empty($lastname) || empty($email) || empty($phone)) {
		echo "Please fill all the fields.";
		if (!empty($name)) {
			echo " Name field already has value: ", $name;
		}
		if (!empty($lastname)) {
			echo " Lastname field already has value: ", $lastname;
		}
		if (!empty($email)) {
			echo " Email field already has value: ", $email;
		}
		if (!empty($phone)) {
			echo " Phone field already has value: ", $phone;
		}
	} else {
		$uni = time() . '_' . substr($name, 0, 4);

		$filename = "forms/response/" . $uni;
		$items = [
			"name" => $name,
			"lastname" => $lastname,
			"email" => $email,
			"phone" => $phone,
			"topic" => $topic,
			"payment" => $payment
		];

		$json = json_encode($items);

		file_put_contents($filename, $json, FILE_APPEND);

		$message = "Ваш уникальный номер: $uni";
		echo $message;
		if ($message) {
			echo '<p>Ваша заявка успешно принята.</p>';
			exit;
		} else {
			echo '<p>Ошибка при отправке заявки. Попробуйте еще раз.</p>';
		}
	}
}
