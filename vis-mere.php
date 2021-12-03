<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title d-flex justify-content-center">
        <h1>Mere</h1>
    </div>
</section>

<section class="main">
    <div class="main__items">
        <a href="#" class="main-btn mx-4 mt-0 mb-2 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Indkøbsliste</p>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="#" class="main-btn mx-4 my-2  d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Blog</p>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="#" class="main-btn mx-4 my-2 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Kontooplysninger</p>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="#" class="main-btn mx-4 my-2 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Læs om appen</p>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="#" class="secondary-btn mx-4 my-2 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Servicevilkår</p>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="#" class="secondary-btn mx-4 mt-2 mb-0 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Fortrolighedspolitik</p>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>

    <div class="main__support container pt-3">
        <p class="main__support__msg text-center">Har du brug for support, så kontakt vores supportcenter på <a href="">support@eatit.dk</a></p>
    </div>

    <a class="text-decoration-none" href="index.php">
        <div class="main-btn d-flex justify-content-center mx-5 mt-4">
            <p class="main-btn__title">Log af</p>
        </div>
    </a>
</section>

<?php $page="vis-mere.php"?>

<?php include 'nav.php'?>

<script src="js/main.js"></script>
<script src="js/showHiddenInput.js"></script>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
