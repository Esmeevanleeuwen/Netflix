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
