<?php
$host = 'localhost';
$dbname = 'netflix';
$user = 'root';
$pass = '';

try {
    $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function getDbConnection() {
    $host = 'localhost';
    $dbname = 'netflix';
    $user = 'root';
    $pass = '';

    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    return $dbh;
}
?>
