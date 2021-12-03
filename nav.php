<div class="nav__menu" id="nav-menu">
    <ul class="nav__list d-flex justify-content-between m-0">
        <li class="nav__item list-unstyled">
            <a href="ingredienser.php" class="nav__link <?php echo ($page == "ingredienser.php" ? "active" : "")?>">
                <i class="fas fa-utensils mb-2"></i>
                <p class="nav__text">Ingredienser</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="opskrifter.php" class="nav__link <?php echo ($page == "opskrifter.php" ? "active" : "")?>">
                <i class="fas fa-utensils mb-2"></i>
                <p class="nav__text">Opskrifter</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="favoritter.php" class="nav__link <?php echo ($page == "favoritter.php" ? "active" : "")?>">
                <i class="far fa-bookmark mb-2"></i>
                <p class="nav__text">Favoritter</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="vis-mere.php" class="nav__link <?php echo ($page == "vis-mere.php" ? "active" : "")?>">
                <i class="fas fa-ellipsis-h mb-2"></i>
                <p class="nav__text">Mere</p>
            </a>
        </li>
    </ul>
</div>
