<?php

function makeData(int $x = 10, int $y = 10): array
{
    $table = [1];

    for ($i = 1; $i <= $y; $i++) {
        $row = [];
        for ($j = 1; $j <= $x; $j++) {
            $row[] = $i * $j;
        }
        $table[] = $row;
    }

    return ($table);
};
