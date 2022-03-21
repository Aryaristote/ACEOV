
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="footer-logo"><a class="footer-logo__link" href="index.php"><img class="footer-logo__img" src="img/logo2.png" alt="logo"/></a></div>
            <!-- footer socials start-->
            <ul class="footer-socials">
                <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            <!-- footer socials end-->
        </div>
        <div class="col-sm-6 col-lg-3">
            <h4 class="footer__title">Contacts</h4>
            <div class="footer-contacts">
                <p class="footer-contacts__phone">Phone: <a href="tel:+31859644725">+243 990 413 132</a></p>
                <p class="footer-contacts__phone">Phone: <a href="tel:+31859644725">+243 855 964 471</a></p>
                <p class="footer-contacts__mail">Email: <a href="mailto:support@helpo.org">aceov@gmail.org</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <h4 class="footer__title">Menu & Liens</h4>
            <!-- footer nav start-->
            <nav>
                <ul class="footer-menu">
                    <li class="footer-menu__item <?php if($footer === 'index'): ?> footer-menu__item--active<?php endif ?>">
                        <a class="footer-menu__link" href="index.php">Home</a>
                    </li>
                    <li class="footer-menu__item <?php if($nav === 'about'): ?> footer-menu__item--active<?php endif ?>">
                        <a class="footer-menu__link" href="about.php">About us</a>
                    </li>
                    <li class="footer-menu__item <?php if($nav === 'stories'): ?> footer-menu__item--active<?php endif ?>">
                        <a class="footer-menu__link" href="stories.php">Achievement</a>
                    </li>
                    <li class="footer-menu__item <?php if($nav === 'gallery'): ?> footer-menu__item--active<?php endif ?>">
                        <a class="footer-menu__link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="footer-menu__item <?php if($nav === 'contact'): ?> footer-menu__item--active<?php endif ?>">
                        <a class="footer-menu__link" href="contacts.php">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- footer nav end-->
        </div>
        <div class="col-sm-6 col-lg-3">
            <h4 class="footer__title">Donation</h4>
            <p>Help us put a smile on children's faces</p><a class="button footer__button button--filled" href="#">MAKE A DONATION</a>
        </div>
    </div>
    <div class="row align-items-baseline">
        <div class="col-md-6">
            <p class="footer-copyright">© 2022 ACEOV 
                <b><a href="https://celebrons.org/" style="text-decoration: none;">Celebrons Events</a></b>
            </p>
        </div>
    </div>
</div>
