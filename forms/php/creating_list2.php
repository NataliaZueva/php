<?php
$file = '/Users/Наталья/OneDrive/Рабочий стол/учеба/3 семестр/php/forms/response2/data.txt';

if (file_exists($file)) {
    $contents = file_get_contents($file);
    $lines = explode("||PHP_EOL", $contents);

    $requests = array();
    foreach ($lines as $line) {
        if (!empty($line)) {

            $arrdata = array_pad(explode('||', $line), 9, '');
            $request['uni']  = $arrdata[0];
            $request['name']  = $arrdata[1];
            $request['lastname']  = $arrdata[2];
            $request['email']  = $arrdata[3];
            $request['phone']  = $arrdata[4];
            $request['topic']  = $arrdata[5];
            $request['payment']  = $arrdata[6];
            $request['IP']  = $arrdata[7];
            $request['date']  = $arrdata[8];

            array_push($requests, $request);
        }
    };
} else echo $file . ' - файла нет;<br>';
array_pop($requests);

function deleteRow($tableData, $rowId)
{
    foreach ($tableData as $key => $row) {
        if (trim($row['uni']) == trim($rowId)) {
            unset($tableData[$key]);
        }
    }
    return $tableData;
}

if (isset($_POST['delete'])) {
    $deleteId = $_POST['delete'];
    $requests = deleteRow($requests, $deleteId);
}
