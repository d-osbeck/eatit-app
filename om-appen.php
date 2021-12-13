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
        <h2 class="mb-2">Eat it - det nemme valg!</h2>
        <p>
            Er mere end bare en app! Det er hjælp til dig, der gerne vil spare lidt på madbudgettet og samtidig gøre noget godt for miljøet.
            <br><br>
            Du indtaster blot de ingredienser du allerede har i hjemmet og straks kommer app´en med lækre og nemme løsninger.
        </p>
    </div>

    <div class="main__about__goals mb-4">
        <h2 class="mb-2">Nemt, hurtigt og lige til</h2>
        <p>
            Tjek køleskabet, skabe og fryseren og se hvilke nemme og lækre retter du kan fremtrylle hjemme i dit eget køkken.
            <br><br>
            Samtidig undgår du at fodre skraldespanden med penge, du i stedet kunne bruge på lidt lækkert til weekenden, tage en tur i biografen eller komme ud at rejse for.
            <br><br>
            De ingredienser du mangler, sender du med et klik videre til din indkøbsseddel, der gør det nemt for dig at købe de manglende ingredienser med hjem efter en travl dag.
        </p>
    </div>

    <div class="main__about__btn d-flex justify-content-center mt-4">
        <a href="ingredienser.php" class="btn main-btn vw-100 mb-3">Kom igang</a>
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
