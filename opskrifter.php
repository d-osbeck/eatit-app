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
    <link href="css/opskrifter.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section class="header pb-0">
    <?php include 'includes/header-bar.php'?>
    <div class="header__title d-flex justify-content-center">
        <h1>Opskrifter</h1>
    </div>
</section>

<section class="main">
    <div class="main__search container d-flex mb-3">
        <div class="input-field w-100">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="me-1">
                <path stroke="#ADADAD" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
            </svg>
            <label for="search-input"></label>
            <input list="opskrifter-suggestions" type="text" class=" nameSearch search-opskrifter-input search-input input" placeholder="Søg opskrifter eller ingredienser" id="search-opskrifter-input" minlength="2">
        </div>
    </div>

    <div class="main__content__categories container my-4">
        <h1 class="mb-3">Kategorier</h1>
        <div class="row mb-3">
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/ur.svg" class="global__icon mb-2" alt="icon clock">
                <p>Hurtigt</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/gris.svg" class="global__icon mb-2" alt="icon pig">
                <p>Kød</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/gulerod.svg" class="global__icon mb-2" alt="icon carrot">
                <p>Grøntsager</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/fisk.svg" class="global__icon mb-2" alt="icon fish">
                <p>Fisk</p>
            </div>
        </div>

        <div class="row">
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/blad.svg" class="global__icon mb-2" alt="icon vegan">
                <p>Vegansk</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/glutenfri.svg" class="global__icon mb-2" alt="icon gluten free">
                <p>Glutenfri</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/ko.svg" class="global__icon mb-2" alt="icon lactose free">
                <p>Laktosefri</p>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center category-icon">
                <img src="img/sukkerfri.svg" class="global__icon mb-2" alt="icon sugar free">
                <p>Sukkerfri</p>
            </div>
        </div>
    </div>

    <div class="items__list container d-flex flex-wrap">
        <!-- Her vises opskrifterne -->
    </div>
</section>


<?php $page="opskrifter.php"?>

<?php include 'nav.php' ?>

<script src="js/main.js"></script>
<script type="module">
    import Opskrifter from "./js/opskrifter.js";
    const opskrifter = new Opskrifter();
</script>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
