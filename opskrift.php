<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Opskrifter</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
require "settings/init.php";
$bind = [':opskId' => $_GET['opskId']];
$opskrift = $db->sql("SELECT * FROM opskrift WHERE opskId = :opskId", $bind);
$opskrift = $opskrift[0];

$timeFromDb = strtotime("$opskrift->opskTid");
if (((int) date("H", $timeFromDb)) === 00) {
    $time = date("i", $timeFromDb);
}else {
    $time = date("H:i", $timeFromDb);
}

?>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title d-flex justify-content-center">
        <h1><?php echo $opskrift->opskNavn; ?></h1>
    </div>
</section>

<section>
    <img src="uploads/<?php echo $opskrift->opskImg; ?>" alt="">

    <div class="d-flex justify-content-evenly">
        <div class="d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="">
            <h3>Total tid</h3>
            <p><?php echo $opskrift->opskTid; ?> min</p>
        </div>
        <div class="d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="">
            <h3>Portioner</h3>
            <p><?php echo $opskrift->opskPortioner; ?></p>
        </div>
        <div class="d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="">
            <h3>Kcal</h3>
            <p><?php echo $opskrift->opskKcal; ?></p>
        </div>
    </div>

    <div class="">
        <h2>Hvad synes andre?</h2>
        <div class="d-flex">
            <img src="img/001-shopping-basket-sort.png" alt="" style="height: 25px">
            <p><?php echo $opskrift->opskRate; ?>/5</p>
        </div>
    </div>

    <div class="">
        <h2>Ingredienser</h2>
        <div class="">"Ingredienser man kan tilføje til indkøbeliste"</div>
        <button class="btn btn-primary">Se indkøbsliste</button>
    </div>



</section>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
