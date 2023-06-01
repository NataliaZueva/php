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

		<form method="post" action="appliation/controllers/FormController.php">
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
		<h3>Список задач</h3>

		<table name="export_table">
			<tr>
				<th>Тип</th>
				<th>Задача</th>
				<th>Место</th>
				<th>Дата и время</th>
			</tr>
			<!-- </table> -->

			<?php foreach ($task as $val) : ?>

				<?php
				$datetime = $val["datetime"];

				$e = explode(" ", $datetime);
				$d = explode("-", $e[0]);
				$t = explode(":", $e[1]);
				$timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);

				$date = date('d/m/Y H:i', $timestamp);
				$time = date('H:i', $timestamp);

				$time = time();
				$time += 8 * 3600;
				if ($date < date("d/m/Y H:i", $time)) {
					echo "<tr bgcolor=CadetBlue>";
				} else {
					echo "<tr>";
				}
				?>

				<td><?php echo $val['type']; ?></td>
				<td><?php echo $val['subject']; ?></td>
				<td><?php echo $val['location']; ?></td>
				<td><?php echo $date; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>



	</div>
</body>

</html>