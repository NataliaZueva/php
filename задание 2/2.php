<?php
$rows = 10;
$cols = 10;
echo "<table  border='0' align='center' width='350' 
        style='border-collapse:collapse;background-color:#cddada'>\n";

for ($tr = 0; $tr <= $rows; $tr++) {
    echo "<tr>";

    for ($td = 1; $td <= $cols; $td++) {

        if ($td === 1) {
            if ($tr != 0) {
                echo "<td align='center' style='background-color:#abcccf'>" . $tr . "</td>\n";
            } else {
                echo "<td style='background-color:#848f8e'>" . '' . "</td>\n";
            }
        }

        if ($tr === 0) {
            echo "<td align='center' style='background-color:#abcccf'>" . $td . "</td>\n";
        }

        if ($tr != 0 && $td != 0) {
            if ($tr === $td) {
                echo "<td align='center' style='background-color:#618a8a'>" . $tr * $td . "</td>\n";
            } else {
                echo "<td align='center'>" . $tr * $td . "</td>\n";
            }
        }
    }
    echo "</tr>\n";
}
echo "</table>";
