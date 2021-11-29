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
    <link href="css/login.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<section class="header pb-0">
    <div class="header__bar d-flex justify-content-start p-3 pt-4 pb-2">
        <div class="header__arrow">
            <a href="index.php">
            <i class="fas fa-chevron-left fa-2x" style="color: #212529;"></i>
            </a>
        </div>
    </div>

    <div class="header__title d-flex justify-content-center">
        <h1>Log ind</h1>
    </div>
</section>

<section class="main">
    <div class="main__login container">
        <form action="" class="login-register" id="login">
            <label for="email-input" class="login__label">Email</label>
            <div class="login__field mb-3">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="me-1">
                    <circle cx="12" cy="12" r="3.25" stroke="#ADADAD" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                    <path stroke="#ADADAD" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25C7.99594 19.25 4.75 16.0041 4.75 12C4.75 7.99594 7.99594 4.75 12 4.75C18.8125 4.75 19.25 9.125 19.25 12V13.25C19.25 14.3546 18.3546 15.25 17.25 15.25V15.25C16.1454 15.25 15.25 14.3546 15.25 13.25V8.75"></path>
                </svg>
                <input type="email" class="login-input" placeholder="Email" id="email-input">
            </div>

            <label for="password-input" class="login__label">Kodeord</label>
            <div class="login__field">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="me-1">
                    <path stroke="#ADADAD" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 11.75C5.75 11.1977 6.19772 10.75 6.75 10.75H17.25C17.8023 10.75 18.25 11.1977 18.25 11.75V17.25C18.25 18.3546 17.3546 19.25 16.25 19.25H7.75C6.64543 19.25 5.75 18.3546 5.75 17.25V11.75Z"></path>
                    <path stroke="#ADADAD" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.75 10.5V10.3427C7.75 8.78147 7.65607 7.04125 8.74646 5.9239C9.36829 5.2867 10.3745 4.75 12 4.75C13.6255 4.75 14.6317 5.2867 15.2535 5.9239C16.3439 7.04125 16.25 8.78147 16.25 10.3427V10.5"></path>
                </svg>
                <input type="password" class="login-input" placeholder="Kodeord" id="password-input">
                <i class="far fa-eye login-hide" id="login-hide"></i>
            </div>

            <a href="#" class="login__forgot text-decoration-none">Glemt din adgangskode?</a>

            <a class="text-decoration-none" href="login.php">
                <div class="main-btn d-flex justify-content-center m-4">
                    <p class="main-btn__title">Log ind</p>
                </div>
            </a>
        </form>
    </div>

    <div class="main__account container">
        <div class="main__account__header d-flex justify-content-center">
            <h1 class="mb-3">Tilmeld dig</h1>
        </div>

        <div class="main__register">
            <a href="" class="register__btn text-decoration-none d-flex align-items-center mx-4">
                <img src="img/google.png" alt="Google logo">
                <div class="w-100 d-flex justify-content-center">Log ind via Google</div>
            </a>

            <a href="" class="register__btn text-decoration-none d-flex align-items-center mx-4">
                <img src="img/facebook.png" alt="Facebook logo">
                <div class="w-100 d-flex justify-content-center">Log ind via Facebook</div>
            </a>

            <a href="" class="register__btn text-decoration-none d-flex align-items-center mx-4">
                <img src="img/apple.png" alt="Apple logo">
                <div class="w-100 d-flex justify-content-center">Log ind via Apple</div>
            </a>

            <a href="" class="register__btn text-decoration-none d-flex align-items-center mx-4">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 6.5L12 12.25L18.5 6.5"></path>
                </svg>
                <div class="w-100 d-flex justify-content-center">Opret konto via email</div>
            </a>
        </div>

        <div class="main__tos d-flex justify-content-center text-center mt-2">
            <p>Når du tilmelder dig, accepterer du vores <a href="#">servicevilkår</a> og <a href="#">fortrolighedspolitik</a></p>
        </div>
    </div>
</section>


<script src="js/main.js"></script>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>