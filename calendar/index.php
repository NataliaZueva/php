<?php


// $host = 'localhost';
// $name = 'to-do';
// $username = 'root';
// $password = 'Nata@12012003';

// try {
//     $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     echo "Connected to $dbname at $host successfully.";
// } catch (PDOException $pe) {
//     die("Could not connect to the database $dbname :" . $pe->getMessage());
// }
// $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// $sql = "Show databases;";
// $res = mysqli_query($dbh, $sql);

// $sql = "SELECT * FROM news";

// print_r($dbh->query($sql));

// $result = $conn->query($sql);
// $row = $result->fetch();





// $host = 'localhost';
// $port = '3000';
// $user = 'root';
// $password = 'Nata@12012003';
// $dbh = new PDO("mysql:host=$host;", $user, $password);
// $stmt = $dbh->query('SHOW DATABASES');
// $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
// foreach ($databases as $database) {
//     echo $database, '<br>';
// }








require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();
