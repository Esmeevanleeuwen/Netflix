<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.6">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
    <title>Netflix Home</title>
</head>

<style>
    .hidden {
        display: none;
    }
</style>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="#" class="navbar-brand">
            <img src="images/pageUsed/Netflix_2015_logo.svg" alt="Netflix Logo" width="10%" height="10%"
                 class="d-inline-block align-top" />
            <span class="hidden">Netflix</span>
        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#toggleMobileMenu"
                aria-controls="toggleMobileMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMobileMenu">
            <ul class="navbar-nav ms-auto text-center">
                <li>
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Series</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Films</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div class="container-fluid">
    <img src="images/series/ragnarok.webp" alt="Suicide Squad" id="trailer-photo">
</div>


<?php
include_once('db_connection.php');

//$sql = "SELECT film_id, film_name, film_descr, film_image, category_id FROM films";
//$sql = "select * from films as f left join categorys as c on f.category_id = c.category_id";
$sql = "select * from film as f left join category as c on f.category_id = c.category_id";

$q = $connection->prepare($sql);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);

?>

<?php
$filmData = array();
while ($film =  $q->fetch())
{
//    $filmData[$film['category_name']][] = $film;
    $filmData[$film['name']][] = $film;
}
//echo '<pre>';
//print_r($filmData);
//echo '</pre>';

foreach ($filmData as $category => $films )
{
    foreach($films as $film){


    ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $film['film_id']; ?><!--</td>-->
<!--        <td>--><?php //echo $film['film_name']; ?><!--</td>-->
<!--        <td>--><?php //echo $film['film_image']; ?><!--</td>-->
<!--        <td>--><?php //echo $film['category_name']; ?><!--</td>-->
<!--        <td>--><?php //echo $film['title']; ?><!--</td>-->
<!--        <td><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></td>-->
<!--    </tr>-->

        <ul>
            <li>
                <?php echo $film['film_id']; ?>
                <a href="item.php"><?php echo $film['title']; ?></a>
            </li>
        </ul>

    <?php
    }
}
?>

</div>

<div class="lineup-carousel">
    <p>Continue Watching</p>
    <ul>
        <li><a href="javascript:void(0)" class="carousel-item"><img src="images/series/Brooklyn-Nine-Nine.jpg" alt="series"></a></li>
        <li><a href="javascript:void(0)" class="carousel-item"><img src="images/series/Brooklyn-Nine-Nine.jpg" alt="series"></a></li>
        <a href="javascript:void(0)" class="carousel-item"><img src="images/series/Brooklyn-Nine-Nine.jpg" alt="series"></a>
        <a href="javascript:void(0)" class="carousel-item"><img src="images/series/Brooklyn-Nine-Nine.jpg" alt="series"></a>
        <a href="javascript:void(0)" class="carousel-item"><img src="images/series/Brooklyn-Nine-Nine.jpg" alt="series"></a>
    </ul>
</div>

<!--<div class="lineup-carousel">-->
<!--    <p>--><?php //echo $film['category_id']; ?><!--</p>-->
<!--    <ul>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--        <a href="javascript:void(0)" class="carousel-item"><img src="--><?php //echo $film['film_image']; ?><!--" alt="series"></a>-->
<!--    </ul>-->
<!--</div>-->

<div class="carousel">

</div>



</body>
</html>