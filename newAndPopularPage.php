<?php

require_once('session.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css?v=1.6">
  <link rel="stylesheet" type="text/css" href="flickity.css">
  <link rel="stylesheet" type="text/css" href="slider.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <img class="logo" src="images/Netflix_Logo_RGB.png">

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
  <a class="nav-link" href="#">Films</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Series</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Nieuw en populair</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">mijn lijst</a>
</li>
<li>
  <form method="post">
    <input type="submit" name="logout" value="Uitloggen">
  </form>
</li>
</ul>
</nav>


<div class="homevideo">
  <iframe width="100%" height="600px" src="https://www.youtube.com/embed/ViuDsy7yb8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div>
<!--films-->

<!-- Flickity HTML init -->
<div class="gallery js-flickity">
  <div class="gallery-cell"><img src="./films/avatar.JPG"></div>
  <div class="gallery-cell"><img src="./films/batman.JPG"></div>
  <div class="gallery-cell"><img src="./films/batman.JPG"></div>
  <div class="gallery-cell"><img src="./films/batman.JPG"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
</div>

<footer>
  <div class="wrapper">
      <ul>
          <img class="logo" src="images/fb_logo.JPG" alt="facebook logo">
          <img class="logo" src="images/ig_logo.JPG" alt="instagram logo">
          <img class="logo" src="images/tw_logo.JPG" alt="twitter logo">
          <img class="logo" src="images/yt_logo.JPG" alt="youtube logo">
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
          <li>&copy; alle rechten behouden 2021 </li>

      </ul>
  </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"></script>
<script src="./index.js"></script>
<script src="flickity.pkgd.min.js"></script>
</html>
