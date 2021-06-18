<?php

require_once('session.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>seriesPage</title>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.6">
    <link rel="stylesheet" type="text/css" href="flickity.css">
    <link rel="stylesheet" type="text/css" href="slider.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a href="homePage.php" class="netflix-logo"><img class="logo" src="images/Netflix_Logo_RGB.png"></a>

    <!-- Links -->
    <ul class="navbar-nav">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                categorieën
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Actide</a>
                <a class="dropdown-item" href="#">Drama</a>
                <a class="dropdown-item" href="#">Thriller</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="filmsPage.php">Films</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="seriesPage.php">Series</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="newAndPopularPage.php">Nieuw en populair</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="myListPage.php">mijn lijst</a>
        </li>
        <li>
            <form method="post">
                <input type="submit" name="logout" value="Uitloggen">
            </form>
        </li>
    </ul>
</nav>


<div class="homevideo">
    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/ViuDsy7yb8M" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>

    </iframe>
</div>
<div>
    <!--films-->

    <?php
    include_once('db_connection.php');

    $sql = "select * from films as f left join categorys as c on f.category_id = c.category_id";

    $q = $connection->prepare($sql);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);

    ?>

    <?php
    $filmData = array();
    while ($film = $q->fetch()) {

        $filmData[$film['category_name']][] = $film;
    }

    foreach ($filmData as $category => $films) {
        echo '<h2>' . $category . '</h2>';
        echo '<div class="gallery js-flickity" >';
        foreach ($films as $film) {

            ?>

            <div class="gallery-cell">
                <a href="item.php?id=<?php echo $film['film_id']?>">
                    <img src="<?php echo $film['film_image']?>">
                </a>
            </div>

            <?php
        }
        echo '</div>';
    }
    ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary portfolio-button" data-toggle="modal" data-target="#exampleModalCenter">Meer informatie</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-card">
      <div class="modal-header">
        <h5 class="modal-title title" id="exampleModalLongTitle">Meer informatie over project Talentenshow</h5>
        <button type="button" class="close portfolio-button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" src="video/database.gif" alt="Card image cap">
        <p class="card-text">Gebruik gemaakt van:</p>
        <p class="card-text">- HTML</p>
        <p class="card-text">- CSS</p>
        <p class="card-text">- PHP</p>
        <p class="card-text">- PDO database verbinding</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary portfolio-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<footer>
    <div class="wrapper">
        <ul>
            <img class="logo" src="images/fb_logo.svg" alt="facebook logo">
            <img class="logo" src="images/ig_logo.svg" alt="instagram logo">
            <img class="logo" src="images/tw_logo.svg" alt="twitter logo">
            <img class="logo" src="images/yt_logo.svg" alt="youtube logo">
            <li>Audio en ondertiteling</li>
            <li>Helpcenterum</li>
            <li>Nederland, the netherlands</li>
            <li>Mediacenter</li>
        </ul>
        <ul>
            <li>Audiodescriptie</li>
            <li>Cadeaubonnen</li>
            <li>Gebruiksvoorwaarden</li>
            <li>Wettelijke bepalingen</li>
        </ul>
        <ul>
            <li><a href="">Blog</a></li>
            <li><a href="">Werk</a></li>
            <li><a href="">Prive beleid</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul>
            <li>&copy; alle rechten behouden 2021</li>

        </ul>
    </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
<script src="flickity.pkgd.min.js"></script>
<script type="text/javascript" src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
