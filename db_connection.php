<?php

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
