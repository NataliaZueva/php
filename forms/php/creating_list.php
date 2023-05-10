<?php
$dir = '/Users/Наталья/OneDrive/Рабочий стол/учеба/3 семестр/php/forms/response';

if (is_dir($dir)) {
    $files = scandir($dir);
    array_shift($files);
    array_shift($files);

    for ($i = 0; $i < sizeof($files); $i++) {

        $filename = "/Users/Наталья/OneDrive/Рабочий стол/учеба/3 семестр/php/forms/response/" . $files[$i];
        $json_string = file_get_contents($filename);
        $date = json_decode($json_string, true);

        $name = $date["name"];
        $lastname = $date["lastname"];
        $email = $date["email"];
        $phone = $date["phone"];
        $topic = $date["topic"];
        $payment = $date["payment"];

        echo "
                <tr>
                    <td><input class='checkbox_row' name='$files[$i]' type='checkbox' value='$files[$i]'> </td>
                    <td><div class='row' id='$files[$i]'>Имя: $name Фамилия: $lastname<br>
                        Номер: $phone </br> 
                        E-mail $email</br> 
                        Тема: $topic </br> 
                        Способ оплаты: $payment</br> 
                    </div></td>
                </tr>";
    };
} else echo $dir . ' - директории нет;<br>';
