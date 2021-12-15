<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Konto Oplysninger</title>

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

    <div class="header__title d-flex justify-content-center mb-4">
        <h1>Kontooplysninger</h1>
    </div>
</section>

<section class="konto">

    <div class="konto__mail container d-flex justify-content-between mb-4">
        <div class="konto__mail__display">
            <h2 class="mb-1">Mail</h2>
            <p>mail@email.com</p>
        </div>
        <img src="img/rediger.svg" alt="rediger mail" class="konto__edit__icon my-auto">
    </div>

    <div class="konto__password container d-flex justify-content-between mb-4">
        <div class="konto__password__display">
            <h2 class="mb-1">Kode</h2>
            <p>********</p>
        </div>
        <img src="img/rediger.svg" alt="rediger mail" class="konto__edit__icon my-auto">
    </div>

    <div class="konto__name container d-flex justify-content-between mb-4">
        <div class="konto__name__display">
            <h2 class="mb-1">Navn</h2>
            <p>Astrid Andersen</p>
        </div>
        <img src="img/rediger.svg" alt="rediger mail" class="konto__edit__icon my-auto">
    </div>

    <div class="konto__picture container d-flex justify-content-between mb-4">
        <div class="konto__picture__display">
            <h2 class="mb-1">Profil billede</h2>
        </div>
        <img src="img/rediger.svg" alt="rediger mail" class="konto__edit__icon my-auto">
    </div>

    <div class="konto__language container mb-3">
        <div class="konto__language__titel">
            <h2 class="mb-3">Sprog</h2>
        </div>
        <div class="konto__language__slider d-flex">
            <p class="my-auto me-4">Dansk</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            <p class="my-auto ms-4">Engelsk</p>
        </div>
    </div>
</section>

<section class="suppprt">
        <div class="support__content container ">
            <h2 class="support__content__titel mb-3">Support</h2>
            <p class="support__content__text mb-4">
            Hvis du har problemer eller spørgsmål med appen kan du kontakt support.
            <br><br>
            Telefontider er mellem 9-15 man-tors og kan kontaktes på telefon <a href="tel:+45 98 76 54 32">+45 98 76 54 32</a>
            <br><br>
            Ellers kan support kontaktes via mail døgnet rundt på <a href="mailto:support@eatit.dk">support@eatit.dk</a>
            </p>
        </div>
</section>

<?php $page="profil.php"?>
<?php include "includes/nav.php" ?>

<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
