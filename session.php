<?php

session_start();

if (! isset($_SESSION['username'])) {
    header('Location: login.php?msg=login');
}

if(isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
}

?>