<?php
include_once('db_connection.php');
require_once('session.php');

print_r($_GET['id']);

$sql = "select * from films as f left join categorys as c on f.category_id = c.category_id where film_id= :film_id";


$q = $connection->prepare($sql);
$q->execute(array(':film_id' => $_GET['id']));
$q->setFetchMode(PDO::FETCH_ASSOC);

$film = $q->fetch();

print_r($film);

?>
