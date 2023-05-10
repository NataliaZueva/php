<? include("creating_list2.php"); ?>

<table>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Телефон</th>
        <th>Тема</th>
        <th>Оплата</th>
        <th>Удаление</th>
    </tr>

    <?php foreach ($requests as $item) : ?>
        <tr style="border-bottom: 1px solid black;">
            <td><?php echo htmlspecialchars($item["name"]); ?></td>
            <td><?php echo htmlspecialchars($item['lastname']); ?></td>
            <td><?php echo htmlspecialchars($item['phone']); ?></td>
            <td><?php echo htmlspecialchars($item['topic']); ?></td>
            <td><?php echo htmlspecialchars($item['payment']); ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="delete" value="<?php echo $item['uni']; ?>">
                    <button type="submit">Удалить</button><!-- При нажатии на кнопку отправляется POST-запрос с id удаляемой строки -->
                </form>
            </td>

        <?php endforeach; ?>
</table>