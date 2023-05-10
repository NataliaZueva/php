<?php
if (isset($_POST['delete'])) {
    $filename = '';
    foreach ($_POST as &$value) {
        // $filename = "response/" . $value;
        if (file_exists($filename)) {
            echo 'hello';
            unlink($filename);
            header("Refresh:0");
        }
    }
}
