<?php
require_once('session.php');
include_once('db_connection.php');

print_r($_GET['id']);

$sql = "select * from films as f left join categorys as c on f.category_id = c.category_id where film_id= :film_id";


$q = $connection->prepare($sql);
$q->execute(array(':film_id' => $_GET['id']));
$q->setFetchMode(PDO::FETCH_ASSOC);

$filmData = $q->fetch();

$filmData = array();
while ($film = $q->fetch()) {

    $filmData[$film['category_name']][] = $film;
}

foreach ($filmData as $category => $films) {

    foreach ($films as $film) {

        ?>

        <div class="gallery-cell">
            <img src="<?php echo $film['film_image']?>">
        </div>

        <?php
    }

}
?>
</div>


