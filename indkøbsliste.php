<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Eat it - Ingredienser</title>

    <meta name="robots" content="All">
    <meta name="description" content="Eat it er app´en der inspirerer dig til at tænke i nye baner, stoppe madspild lidt efter lidt og gør at du altid har din indkøbsseddel lige ved hånden.">
    <meta name="author" content="Eat it">
    <meta name="copyright" content="© Eat it 2021. All Rights Reserved">
    <meta name="keywords" content="opskrifter, madopskrifter, aftensmad, madspild, madrester, indkøbsseddel">
    <meta name="og:title" content="Eat it - Opret og gem din egen indkøbsseddel">
    <meta name="og:description" content="Hold styr på hvad du mangler når du er ude og handle.">
    <meta name="og:type" content="app">

    <link href="css/indkøbsliste.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--Navn på indkøbslisten-->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nyt navn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-1">Liste navn:</p>
                <label for="navn-input"></label>
                <input class="input-field list__name__field bg-transparent rounded-3 mb-4 w-100" id="navn-input" placeholder="Navn">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-3 border-black" data-bs-dismiss="modal">Luk</button>
                <button type="button" class="start makelist rounded-3 border-black btn btn-primary" data-bs-dismiss="modal">Start</button>
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
                <button type="button" class="secondary-btn bg-transparent px-5 me-2" data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__delete" class="main-btn px-5 ms-2" data-bs-dismiss="modal">Ja</button>
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
                <button type="button" class="secondary-btn bg-transparent px-5 me-2" data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__removeall" class="main-btn px-5 ms-2" data-bs-dismiss="modal">Ja</button>
            </div>
        </div>
    </div>
</div>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title d-flex justify-content-center">
        <h1 class="m-0">Indkøbsseddel</h1>
    </div>
</section>

<section class="main">
    <div class="main__input container d-flex justify-content-between mb-4">
        <label for="text"></label>
        <input class="search-opskrifter-input search-input input input-field" name="text" id="text" placeholder="Tilføj vare fx 6 æg">
        <input type="hidden" id="saveIndex">
        <button class="main-btn p-0 ms-2" id="btn__add">
            <i class="fas fa-plus p-3"></i>
        </button>
        <button class="btn p-0 ms-2" style="display: none" id="btn__save">
            <img class="icon__size" src="img/rediger.svg" alt="">
        </button>
    </div>

    <div class="main__namelist container d-flex mb-3">
        <h1 class="mb-0 name" id="name">Liste</h1>
        <button type="button" class="btn p-0 ps-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><img class="icon__size" src="img/rediger.svg" alt=""></button>
    </div>

    <div class="main__list container" id="listBox">
        <!--Vare tilføjet til listen-->
    </div>

    <div class="main__list__btn d-flex justify-content-center mt-4">
        <button type="button" class="secondary-btn px-4 me-2 bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Ryd liste</button>
        <button type="button" class="main-btn px-4 ms-2">Gem liste</button>
    </div>
</section>

<?php $page="indkøbsliste.php"?>
<?php include "includes/nav.php" ?>

<script src="js/main.js"></script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="js/indkøbsliste.js"></script>
</body>
</html>