<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Eat it - Opskrift</title>


    <meta name="robots" content="All">
    <meta name="description" content="Eat it er app´en der inspirerer dig til at tænke i nye baner, stoppe madspild lidt efter lidt og gør at du altid har din indkøbsseddel lige ved hånden.">
    <meta name="author" content="Eat it">
    <meta name="copyright" content="© Eat it 2021. All Rights Reserved">
    <meta name="keywords" content="opskrifter, madopskrifter, aftensmad, madrester, madspild">
    <meta name="og:title" content="Eat it - Find din nye livret">
    <meta name="og:description" content="Eat it er app´en der inspirerer dig til at tænke i nye baner, stoppe madspild lidt efter lidt og gør at du altid har din indkøbsseddel lige ved hånden.">
    <meta name="og:type" content="app">


    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/opskrift.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
require "settings/init.php";
$bind = [':opskId' => $_GET['opskId']];
$opskrift = $db->sql("SELECT * FROM opskrift WHERE opskId = :opskId", $bind);
$opskrift = $opskrift[0];

$bind = [':opskId' => $_GET['opskId']];
$ingr = $db->sql("
    SELECT * FROM opskrift_ingredienser_con
    INNER JOIN ingredienser ON conIngrId = ingrId
    WHERE conOpskId = :opskId
", $bind);

$timeFromDb = strtotime("$opskrift->opskTid");
if (((int) date("H", $timeFromDb)) === 00) {
    $timehour = date(null, $timeFromDb);
}else {
    $timehour = date("h", $timeFromDb).strip_tags(" t");
}
$timemin = date("i", $timeFromDb).strip_tags(" min");

?>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title row">
        <h1 class="col-10"><?php echo $opskrift->opskNavn; ?></h1>
        <div class="col-2 d-flex justify-content-end">
        <img src="img/hjerte.svg" alt="hjerte tilføj til favorit" id="favorit" class="py-auto" style="max-height: 40px;">
        </div>
    </div>
</section>

<section class="main__opskrift__beskrivelse">
    <img src="img/<?php echo $opskrift->opskBillede; ?>" alt="billede af <?php echo $opskrift->opskNavn; ?>" class="rounded-3 vw-100">

    <div class="row my-4">
        <div class="col d-flex flex-column align-items-center">
            <img src="img/ur.svg" alt="ur" class="mb-2 img__icon__size">
            <h4 class="mb-3">Total tid</h4>
            <p><?php echo $timehour; ?> <?php echo $timemin; ?></p>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <img src="img/personer.svg" alt="personer" class="mb-2 img__icon__size">
            <h4 class="mb-3">Portion</h4>
            <p><?php echo $opskrift->opskPortioner; ?> stk.</p>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <img src="img/diagram.svg" alt="cirkeldiagram" class="mb-2 img__icon__size">
            <h4 class="mb-3">Kalorier</h4>
            <p><?php echo $opskrift->opskKcal; ?> kcal pr <br> portion</p>
        </div>
    </div>

    <div class="my-4">
        <h4 class="mb-3">Hvad synes andre?</h4>
        <div class="d-flex">
            <img src="img/stjerne_gul.svg" alt="stjerne" class="othersrate__icon__size">
            <p class="my-auto ms-2"><?php echo $opskrift->opskRate; ?>/5</p>
        </div>
    </div>

    <div class="my-4">
        <h4 class="mb-3">Kategorier</h4>
        <div class="d-flex flex-wrap">
            <div class="list__item py-1 px-3 m-1 align-items-center">Hurtig</div>
            <div class="list__item py-1 px-3 m-1 align-items-center">Kød</div>
            <div class="list__item py-1 px-3 m-1 align-items-center">Grønsager</div>
            <div class="list__item py-1 px-3 m-1 align-items-center">Glutenfri</div>
            <div class="list__item py-1 px-3 m-1 align-items-center">Laktosefri</div>
        </div>
    </div>

    <div class="my-4">
        <h4 class="mb-3">Ingredienser</h4>
        <div class="d-flex flex-wrap">
            <?php
            foreach ($ingr as $i){
                ?>
                <div class="list__item py-1 px-3 m-1 d-flex align-items-center">
                    <p><?php echo $i->ingrNavn; ?></p>
                    <img src="img/kurv_hvid.svg" alt="kurv" class="ms-1 ">
                </div>
                <?php
            }
            ?>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="indkøbsliste.php" class="btn main-btn vw-100 mb-3">Se indkøbsliste</a>
        </div>
    </div>

    <div class="my-4">
        <h4 class="mb-3">Du skal bruge</h4>
        <div class="section__antal__textitems"><?php echo $opskrift->opskAntal; ?></div>
    </div>

    <div class="my-4">
        <h4 class="mb-3">Sådan gør du</h4>
        <div class="section__beskrivelse__textitems"><?php echo $opskrift->opskBeskrivelse; ?></div>
    </div>

    <div class="my-4">
        <h4>Din oplevelse?</h4>
        <div class="stars d-flex flex-row-reverse justify-content-end">
        <label for="one"></label>
            <input type="radio" id="one" name="rate" value="1">
        <label for="two"></label>
            <input type="radio" id="two" name="rate" value="2">
        <label for="three"></label>
            <input type="radio" id="three" name="rate" value="3">
        <label for="four"></label>
            <input type="radio" id="four" name="rate" value="4">
        <label for="five"></label>
            <input type="radio" id="five" name="rate" value="5">
        </div>
    </div>
</section>

<?php $page="opskrifter.php"?>
<?php include "includes/nav.php" ?>

<script src="js/main.js"></script>
<script src="js/opskrift.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
