<?php

require_once('db_connection.php');

$dbh = getDbConnection();

if (isset($_POST['submit']) && ! empty($_POST['username'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT email, password
            FROM members
            Where email = '".$email."'";
    
    $result = $dbh->query($sql);

    if($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if($row['password'] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: homePage.php');
        }
        else {
            echo '<script>alert("ongeldige login")</script>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.7">
    <title>Netflix 2.0</title>
</head>
<body class="login-page">
    <a href="index.php"><img class="logo" src="images/Netflix_Logo_RGB.png"></a>
    <div class="container">
        <div class="col-md-12 login-form center">
        <form method="post">
            <h1>Inloggen</h1>
            <label>Gebruikersnaam</label>
            <input type="text" name="username">
            <br>
            <label>Wachtwoord</label>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit" value="Verzenden">
        </form>
        </div>
    </div>
</body>
</html>