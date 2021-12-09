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
    <link href="css/profile.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>

    <div class="header__title d-flex justify-content-center">
        <h1>Profil</h1>
    </div>
</section>

<section class="main">
    <div class="main__profile__header container d-flex flex-column justify-content-center align-items-center">
        <div class="main__profile__pic mb-2"></div>
        <h1 class="main__profile__title mb-3">Astrid Andersen</h1>
        <a href="#" class="main-btn px-5 my-2 d-flex align-items-center justify-content-between text-decoration-none">
            <p class="main__item__title fw-normal">Kontooplysninger</p>
        </a>
    </div>

    <div class="main__profile__content mt-4">
        <div class="main__profile__favorites d-flex align-items-center mb-4">
            <h1>Favorit opskrifter</h1>
            <a href="#" class="text-black">
                <i class="far fa-edit fa-4xl ms-2"></i>
            </a>
        </div>
        <div class="main__profile__lists d-flex align-items-center">
            <h1>Mine indkøbslister</h1>
            <a href="#" class="text-black">
                <i class="far fa-edit fa-4xl ms-2"></i>
            </a>
        </div>
    </div>
</section>

<?php $page="profil.php"?>

<?php include 'nav.php'?>

<script src="js/main.js"></script>
<script src="js/showHiddenInput.js"></script>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
