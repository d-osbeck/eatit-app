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

    <div class="items__list d-flex flex-wrap">
        <!-- Her vises opskrifterne -->
    </div>
</section>
<?php $page="opskrifter.php"?>
<?php include 'nav.php' ?>
<script type="module">
    import Opskrifter from "./js/opskrifter.js";
    const opskrifter = new Opskrifter();
</script>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
