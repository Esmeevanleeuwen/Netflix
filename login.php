<?php

require_once('db_connection.php');

$dbh = getDbConnection();

$message = "";
if(isset($_GET['mmsg']) && $_GET['msg'] == 'login') {
    $message = "Eerst inloggen aub!";
}

if (isset($_POST['submit']) && ! empty($_POST['username'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "SELECT email, password
            FROM members
            Where email = '".$email."'";
    
    $result = $dbh->query($sql);

    if($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if(password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $email;
            header('Location: homePage.php');
        }
        else {
            echo '<script>alert("ongeldige login")</script>';
        }
    }
    else {
        echo '<script>alert("ongeldige login")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.9">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Netflix 2.0</title>
</head>
<body class="login-page">
    <a href="index.php"><img class="logo" src="images/Netflix_Logo_RGB.png"></a>
    <div class="container">
        <div class="col-md-12 login-form center">
        <form method="post">
            <p><?php echo $message; ?></p>
            <h2>Inloggen</h2>
            <br>
            <input class="input-field" type="text" name="username" placeholder="E-mailadres of telefoonnummer">
            <br><br>
            <input class="input-field" type="password" name="password" placeholder="Wachtwoord">
            <br><br><br>
            <input class="inlog-button" type="submit" name="submit" value="Inloggen">
            <br><br>
            <input class="left" type="checkbox" id="checkbox" name="checkbox" value="Onthouden">
            <label class="left" for="checkbox">Mijn gegevens onthouden</label>
            <a class="right" href="">Hulp nodig?</a>
            <a class="left" href="https://www.facebook.com/">Inloggen met facebook</a>
            <i class="fab fa-facebook-square"></i>
        </form>
        </div>
    </div>
</body>
</html>
