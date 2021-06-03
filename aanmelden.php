<?php
session_start();
require_once('db_connection.php');

$dbh = getDbConnection();

$email1 = $_POST['email1'];

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO members (email, password) 
            VALUES ('".$email."', '".$password_hash."')";

    $ins = $dbh->exec($sql);
}

if(isset($_REQUEST['submit'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=2.0">
    <title>Netflix 2.0</title>
</head>
<body class="aanmeld-pagina">
    <nav>
        <a href="index.php"><img class="logo" src="images/Netflix_Logo_RGB.png"></a>
        <a class="login right" href="login.php"><strong>Inloggen</strong></a>
    </nav>
    <div class="container">
        <div class="col-md-12 aanmeld-form center">
        <p class="little-text">Stap 1 van 3</p>
        <p class="title"><strong>Verzin een wachtwoord om je lidmaatschap te starten.</strong></p>
        <p class="text">Nog een paar stappen en je bent klaar!<br>We houden ook niet van te veel administratie.</p>
        <form method="post">
            <input class="input-field" type="email" name="email" value="<?php echo $email1; ?>">
            <br><br>
            <input class="input-field" type="password" name="password" placeholder="Wachtwoord" required="required">
            <br><br>
            <input class="left checkbox" type="checkbox" name="checkbox" value="Onthouden">
            <label class="left" for="checkbox">Ja, stuur mij speciale aanbiedingen van Netflix</label>
            <br><br>
            <input class="inlog-button" type="submit" name="submit" value="Doorgaan">
        </form>
        </div>
    </div>
</body>
</html>