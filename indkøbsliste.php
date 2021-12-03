<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Sigende titel</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="css/indkøbsliste.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Indtaste et navn til listen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form onsubmit="callme()">
                    <p>Enter your name</p>
                    <input id="tbName" type="text" value="Liste">
                    <button type="button" class="btn btn-danger rounded-3 border-black" data-bs-dismiss="modal">Luk</button>
                    <button type="submit" value="submit" class="rounded-3 border-black btn btn-primary comfirm" data-bs-dismiss="modal">Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vil du slette vare?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__delete" class="btn btn-primary" data-bs-dismiss="modal">Ja</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vil du slette vare?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nej</button>
                <button type="button" id="btn__removeall" class="btn btn-primary" data-bs-dismiss="modal">Ja</button>
            </div>
        </div>
    </div>
</div>

<div class="container bg-white">
    <div class="">
            <h1 class="text-center mb-4">Indkøbsliste</h1>
            <div class="d-flex justify-content-between mt-5 mb-5">
                <input class="rounded-3 border-light me-3 vw-100" name="text" id="text" placeholder="tilføj vare fx 6 æg">
                <input type="hidden" id="saveIndex">
                <button class="rounded-3 btn btn-success flex-shrink-0" id="btn__add"><img class="icon__size" src="img/001-shopping-basket-sort.png" alt=""></button>
                <button class="rounded-3 btn btn-success" style="display: none" id="btn__save"><img class="icon__size" src="img/001-shopping-basket-sort.png" alt=""></button>
            </div>

        <div class="d-flex">
            <h1 id="welcome"> </h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">#</button>
        </div>

        <div id="listBox"></div>
    </div>

    <div class="d-flex justify-content-center mt-5">
    <button type="button" class="btn btn-primary me-3">Gem liste</button>
    <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Ryd liste</button>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/indkøbsliste.js"></script>
</body>
</html>