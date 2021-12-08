<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Opskrift</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
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
    $time = date("i", $timeFromDb);
}else {
    $time = date("H:i", $timeFromDb);
}

?>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title row">
        <h1 class="col-10"><?php echo $opskrift->opskNavn; ?></h1>
        <img src="img/001-shopping-basket-sort.png" alt="" class="col-2">
    </div>
</section>

<section>

    <!-- Skal stå her under, når billeder til opskrifterne er oppe -> "uploads/<?php echo $opskrift->opskImg; ?>"-->

    <img src="img/001-shopping-basket-sort.png" alt="" class="vw-100">

    <div class="row my-4">
        <div class="col d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="" class="mb-2">
            <h4 class="mb-2">Total tid</h4>
            <p><?php echo $opskrift->opskTid; ?> min</p>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="" class="mb-2">
            <h4 class="mb-2">Portion</h4>
            <p><?php echo $opskrift->opskPortioner; ?> stk.</p>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <img src="img/001-shopping-basket-sort.png" alt="" class="mb-2">
            <h4 class="mb-2">Kalorier</h4>
            <p><?php echo $opskrift->opskKcal; ?> kcal pr <br> portion</p>
        </div>
    </div>

    <div class="my-3">
        <h4>Hvad synes andre?</h4>
        <div class="d-flex stars stars__color">
            <label for="rating"></label>
            <p class="my-auto ms-2"><?php echo $opskrift->opskRate; ?>/5</p>
        </div>
    </div>

    <div class="my-3">
        <h4 class="mb-2">Ingredienser</h4>
        <div class="">
            <?php
            foreach ($ingr as $i){
                ?>
                <h6><?php echo $i->ingrNavn; ?></h6>
                <?php
            }
            ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary vw-100">Se indkøbsliste</button>
        </div>
    </div>

    <div class="my-4">
        <h4 class="mb-2">Du skal bruge</h4>
        <div class="section__antal__textitems"><?php echo $opskrift->opskAntal; ?></div>
    </div>

    <div class="my-4">
        <h4 class="mb-2">Sådan gør du</h4>
        <div class="section__beskrivelse__textitems"><?php echo $opskrift->opskBeskrivelse; ?></div>
    </div>

    <div class="my-4">
        <h4>Din oplevelse?</h4>
        <div class="stars d-flex flex-row-reverse justify-content-end">
        <input type="radio" id="one" name="rate" value="1">
        <label for="one"></label>
        <input type="radio" id="two" name="rate" value="2">
        <label for="two"></label>
        <input type="radio" id="three" name="rate" value="3">
        <label for="three"></label>
        <input type="radio" id="four" name="rate" value="4">
        <label for="four"></label>
        <input type="radio" id="five" name="rate" value="5">
        <label for="five"></label>
        </div>
    </div>
</section>


<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
