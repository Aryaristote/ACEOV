<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg></span>
    <div class="aside-dropdown__item d-lg-none d-block">
        <ul class="aside-menu">
            <li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active">
                <a class="aside-menu__link" href="index.php"><span>HOME</span></a>
            </li>
            <li class="aside-menu__item aside-menu__item--has-child">
                <a class="aside-menu__link" href="about.php"><span>AABOUT US</span></a>
            </li>
            <li class="aside-menu__item aside-menu__item--has-child">
                <a class="aside-menu__link" href="stories.php"><span>ACHIEVEMENT</span></a>
            </li>
            <li class="aside-menu__item aside-menu__item--has-child">
                <a class="aside-menu__link" href="javascript:void(0);"><span>GALLERY</span></a>
            </li>
        </ul>
    </div>
    <div class="aside-dropdown__item">
        <!-- aside menu start-->
        <ul class="aside-menu">
            <li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li>
        </ul>
        <!-- aside menu end-->
        <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:aceovdrc@gmail.com">aceovdrc@gmail.com</a></div>
        <div class="aside-inner"><span class="aside-inner__title">Phone number</span><a class="aside-inner__link" href="tel:+243990156400">+ 243 990 156 400</a><a class="aside-inner__link" href="tel:+243998066046">+ 243 998 066 046</a></div>
        <ul class="aside-socials">
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="aside-dropdown__item"><a class="button button--squared" href="../don.php"><span>MAKE A DONATION</span></a></div>
    </div>
</div>
<header class="header header--front">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger d-none d-sm-block">
                    <div class="dropdown-trigger__item"></div>
                </div>
                <div class="header-logo"><a class="header-logo__link" href="index.php">
                    <img class="header-logo__img logo--light" src="img/logo2.png" alt="logo"/>
                    <b class="header-logo__img logo--dark">A.C.E.O.V</b></a>
                </div>
            </div>
            <div class="col-auto">
                <nav>
                    <ul class="main-menu">
                        <li class="<?php if($nav === 'index'): ?> main-menu__item--active<?php endif ?> main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="index.php"><span>HOME</span></a>
                        </li>
                        <li class="<?php if($nav === 'about'): ?> main-menu__item--active<?php endif ?> main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="about.php"><span>ABOUT</span></a>
                        </li>
                        <li class="<?php if($nav === 'stories'): ?> main-menu__item--active<?php endif ?> main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="stories.php"><span>ACHIEVEMENT</span></a>
                        </li>
                        <li class="<?php if($nav === 'gallery'): ?> main-menu__item--active<?php endif ?> main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="gallery.php"><span>GALLERY</span></a>
                        </li>
                        <li class="<?php if($nav === 'contact'): ?> main-menu__item--active<?php endif ?> main-menu__item">
                            <a class="main-menu__link" href="contacts.php"><span>Contacts</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger d-block d-sm-none">
                    <div class="dropdown-trigger__item"></div>
                </div><a href="don.php" class="button button--squared" href="#"><span>MAKE A DONATION</span></a>
            </div>
        </div>
    </div>
</header>