<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Om appen</title>

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
        <h1>Om appen</h1>
    </div>
</section>

<section class="main__about">
    <div class="main__about__image mb-4">
    <img src="img/bananpandekager.jpg" alt="billede af " class="rounded-3 vw-100">
    </div>

    <div class="main__about__concept mb-4">
        <h2 class="mb-2">Konceptet</h2>
        <p>"tekst om konceptet"</p>
    </div>

    <div class="main__about__goals mb-4">
        <h2 class="mb-2">Vores mål</h2>
        <p>"tekst om målene"</p>
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
