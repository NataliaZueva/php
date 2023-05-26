<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="pablic/styles/style.css" rel="stylesheet" type="text/css">
	<title>Список задач</title>
</head>

<body>
	<div class="container new">
		<h1>Мой календарь</h1>

		<form method="post" action="">
			<legend>Новая задача</legend>
			<fieldset>
				<label for="subject">Тема:</label>
				<input type="text" name="subject" id="subject"><br>

				<label for="type">Тип:</label>
				<select name="type" id="type">
					<option value="meeting">встреча</option>
					<option value="call">звонок</option>
					<option value="meeting">совещание</option>
					<option value="task">дело</option>
				</select><br>

				<label for="location">Место:</label>
				<input type="text" name="location" id="location"><br>

				<label for="datetime">Дата и время:</label>
				<input type="date" name="date" class='put put1 padd' required><input type="time" name="time" class='put put1'><br>

				<label for="duration">Длительность:</label>
				<input type="number" name="duration" id="duration"><br>

				<label for="comment">Комментарий:</label>
				<textarea name="comment" id="comment"></textarea><br>
				<button type="submit" name="sendTask">Отправить</button>
			</fieldset>

		</form>
	</div>

	<div class='container list'>
		<h1>Список задач</h1>

		<!--
            <table name="export_table">
                <tr>
                    <th>Тема</th>
                    <th>Тип</th>
                    <th>Место</th>
                    <th>Дата и время</th>
                    <th>Длительность</th>
                    <th>Комментарий</th>
                </tr>
                <tr>
                    <td name="subject_list">. </td>
                    <td name="type_list">. </td>
                    <td name="location_list">. </td>
                    <td name="datetime_list">. </td>
                    <td name="duration_list">. </td>
					<td name="comment_list">. </td>
                </tr>
            </table>
-->
		<?php
		$hostname = "localhost";
		$db = "to-do";
		$username = "root";
		$password = "";

		$conn = new PDO(
			"mysql:host=localhost;dbname=$db",
			$username,
			$password
		);

		$sql1 = "SELECT subject, type, location, datetime, duration, comment FROM task_list";

		if ($result = $conn->query($sql1)) {


			echo "<table cellspacing='0' cellpadding='0'><tr><th>Тип</th><th class ='task_list'>Задача</th><th>Место</th><th>Дата и время</th></tr>";
			foreach ($result as $row) {
				if ($row["datetime"] < 2025 - 05 - 25) {
					echo "<tr bgcolor=red>";
				} else {
					echo "<tr>";
				}
				echo "<td>" . $row["subject"] . "</td>";
				echo "<td>" . $row["type"] . "</td>";
				echo "<td>" . $row["location"] . "</td>";
				echo "<td>" . $row["datetime"] . "</td>";
			}
			echo "</table>";
		} else {
			echo "<p> Ошибка вывода данных";
		}
		?>
	</div>
</body>

</html>