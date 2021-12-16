<nav class="nav__menu" id="nav-menu">
    <ul class="nav__list d-flex justify-content-between m-0">
        <li class="nav__item list-unstyled">
            <a href="ingredienser.php" class="nav__link <?php echo ($page == "ingredienser.php" ? "active" : "")?>">
                <img src="img/krydderi.svg" class="global__icon mb-2" alt="icon spice">
                <p class="nav__text">Ingredienser</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="opskrifter.php" class="nav__link <?php echo ($page == "opskrifter.php" ? "active" : "")?>">
                <img src="img/kokkehue.svg" class="global__icon mb-2" alt="icon chef hat">
                <p class="nav__text">Opskrifter</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="indkøbsliste.php" class="nav__link <?php echo ($page == "indkøbsliste.php" ? "active" : "")?>">
                <img src="img/indkøbskurv.svg" class="global__icon mb-2" alt="icon shopping list">
                <p class="nav__text">Indkøbsseddel</p>
            </a>
        </li>
        <li class="nav__item list-unstyled">
            <a href="vis-mere.php" class="nav__link <?php echo ($page == "vis-mere.php" ? "active" : "")?>">
                <img src="img/mere.svg" class="global__icon mb-2" alt="icon dots">
                <p class="nav__text">Mere</p>
            </a>
        </li>
    </ul>
</nav>
