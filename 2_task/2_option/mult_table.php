<?php

include("multiplication.php");

$table = makeData(5, 5);

echo "<table class='multi_table'>\n";

for ($i = 0; $i < count($table); $i++) {
    if ($i == 0) {
        echo '<td class="null_td">', $i, '</td>';
    } else {
        echo '<td class="heading_td">', $i, '</td>';
    }
}

foreach ($table as $key1 => $row) {
    echo '<tr>';
    if ($key1 != 0) {
        if ($key1) {
            echo '<td class="heading_td">', $key1, '</td>';
        }
        foreach ($row as $key2 => $cell) {
            if ($key1 - 1  == $key2) {
                echo '<td class="same_td">', $cell, '</td>';
            } else {
                echo '<td>', $cell, '</td>';
            }
        }
    }

    echo "</tr>\n";
}
echo '</table>';
