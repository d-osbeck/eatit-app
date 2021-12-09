<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Indkøbsliste</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/indkøbsliste.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--Navn på indkøbslisten-->
<div class="modal fade" id="exampleModalCenter1" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Indtaste et navn til listen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form onsubmit="callme()">
                    <input class="mb-4" style="width: 100%" id="tbName" type="text" placeholder="Liste">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="secondary-btn me-3" data-bs-dismiss="modal">Luk</button>
                        <button type="submit" value="submit" class="main-btn ms-3 comfirm" data-bs-dismiss="modal">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Slet vare-->
<div class="modal fade" id="exampleModalCenter2" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vil du slette vare?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="secondary-btn " data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__delete" class="main-btn" data-bs-dismiss="modal">Ja</button>
            </div>
        </div>
    </div>
</div>
<!--Slet listen-->
<div class="modal fade" id="exampleModalCenter" role="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vil du slette listen?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="secondary-btn" data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__removeall" class="main-btn" data-bs-dismiss="modal">Ja</button>
            </div>
        </div>
    </div>
</div>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title d-flex justify-content-center">
        <h1>Indkøbsliste</h1>
    </div>
</section>

<section class="main">
    <div class="main__input d-flex justify-content-between mb-4">
        <label for="grocey"></label>
        <input class="search-opskrifter-input search-input input input-field" name="text" id="text" placeholder="Tilføj vare fx 6 æg">
        <input type="hidden" id="saveIndex">
        <button class="btn p-0 ms-2" id="btn__add">
            <img class="icon__size" src="img/rediger.svg" alt="">
        </button>
        <button class="btn p-0 ms-2" style="display: none" id="btn__save">
            <img class="icon__size" src="img/rediger.svg" alt="">
        </button>
    </div>

    <div class="main__namelist d-flex mb-3">
        <h1 class="mb-0" id="welcome"> </h1>
        <button type="button" class="btn p-0 ps-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><img class="icon__size" src="img/rediger.svg" alt=""></button>
    </div>

    <div class="main__list" id="listBox">
        <!--Vare tilføjet til listen-->
    </div>

    <div class="main__list__btn d-flex justify-content-center mt-4">
        <button type="button" class="secondary-btn me-3" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Ryd liste</button>
        <button type="button" class="main-btn ms-3">Gem liste</button>
    </div>
</section>

<?php $page="opskrifter.php"?>

<?php include 'nav.php' ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="js/indkøbsliste.js"></script>
</body>
</html>