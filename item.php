<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Netflix 2.0</title>
</head>

<?php
require_once('session.php');
include_once('db_connection.php');

//print_r($_GET['id']);

$sql = "select * from films as f left join categorys as c on f.category_id = c.category_id where film_id= :film_id";


$q = $connection->prepare($sql);
$q->execute(array(':film_id' => $_GET['id']));
$q->setFetchMode(PDO::FETCH_ASSOC);

$filmData = $q->fetch();
//print_r($filmData);
//print ($filmData['film_release']);
//print ($filmData['film_image']);
//$filmData = array();

?>

<div class="item-text">
    <img class="item-image" src="<?php print $filmData['film_image'] ?>">

    <h3 class="item-text"><?php print $filmData['film_name'] ?></h3>
    <p class="item-text"><?php print $filmData['film_descr'] ?></p>
    <p class="item-text"><?php print ($filmData['film_release']); ?></p>
    <p class="item-text"><?php print ($filmData['category_name']); ?></p>
    <p></p>
</div>


<!--//while ($film = $q->fetch()) {-->
<!--//-->
<!--//    $filmData[$film['category_name']][] = $film;-->
<!--//-->
<!--//}-->
<!---->
<!--//foreach ($filmData as $category => $films) {-->
<!--//    print $film['film_release'];-->
<!--//-->
<!--//    foreach ($films as $film) {-->
<!--//        print $film['film_release'];-->
<!--//-->
<!--//        ?>-->
<!---->
<!--        <div class="gallery-cell">-->
<!--            <img src="--><?php //echo $film['film_image']?><!--">-->
<!--        </div>-->
<!---->
<!--        --><?php
//    }
//
//}
?>
</div>


