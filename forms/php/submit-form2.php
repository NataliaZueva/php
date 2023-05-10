<!-- получение и обработка данных с формы -->

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$topic = $_POST['topic'];
	$payment = $_POST['payment'];

	$delimiter = ',';

	$name = trim($name);
	$lastname = trim($lastname);
	$email = trim($email);
	$phone = trim($phone);

	if (strpos(($name || $lastname || $email || $phone), $delimiter) !== false) {
		$name = str_replace($delimiter, '', $name);
		$lastname = str_replace($delimiter, '', $lastname);
		$email = str_replace($delimiter, '', $email);
		$$phone = str_replace($delimiter, '', $phone);
	}

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
		$data = $uni . '||' . $name . '||' . $lastname . '||' .  $email . '||' . $phone . '||' . $topic . '||' . $payment . '||' . $_SERVER['REMOTE_ADDR'] . '||' . date('Y-m-d H:i:s', time()) . '||' . "PHP_EOL\n";
		file_put_contents('forms/response2/data.txt', $data, FILE_APPEND);

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
