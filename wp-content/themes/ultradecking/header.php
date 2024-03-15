<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/all.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assests/css/responsive.css" rel="stylesheet">
</head>

<body>
    <header class="header sticky-top">
        <div class="header__top-section">
            <div class="container header__inner">
                <div class="row gx-0 header__topbar align-items-center">
                    <div class="col d-none d-lg-flex align-items-center gap-2 header_contact">
                        <span class="header__icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>
                        <span class="header__text">
                            1234565487
                        </span>
                    </div>
                    <div class="col-12 col-lg-4  header_promobar  text-white">
                        <p class="text-uppercase m-0  bg-danger   header_para"> FREE DELIVERY ON ALL BOARDS WITH CODE:
                            FREEFEB | ONLY
                            72 HOURS LEFT</p>
                    </div>
                    <div class="col-12 col-lg-4 header__join text-center">
                        <a href="#"
                            class="col-6 col-lg-12 d-flex gap-2 justify-content-center align-items-center rounded-0 btn btn-blue text-white header__join-btn">
                            <span class="header__icon">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="26" height="26" fill="url(#pattern0)" />
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                            height="1">
                                            <use xlink:href="#image0_777_1128" transform="scale(0.025)" />
                                        </pattern>
                                        <image id="image0_777_1128" width="40" height="40"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>

                            </span>
                            <span class="header__text text-uppercase  ">
                                Ultra Trade - Join Now
                            </span>
                        </a>
                        <a href="#"
                            class="col-6   d-flex d-lg-none gap-2 justify-content-center align-items-center rounded-0 btn btn-success  text-white header__join-btn">

                            <span class="header__text text-uppercase  ">
                                Order sample
                            </span>
                        </a>
                    </div>
                    <div class="col d-none d-lg-block header__cart-section">
                        <div class="d-flex align-items-center gap-3 justify-content-end">
                            <a href="#"> <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#" class="header__profile-icon">
                                <i class="fa-regular fa-user"></i>

                            </a>
                            <a href="#" class="position-relative header__basket-icon">
                                <i class="fa-solid fa-basket-shopping"></i>

                                <span
                                    class="d-inline-flex position-absolute bg-primary text-white header__basket-total">1</span>
                            </a>
                            <span class="header__basket-value fw-normal">£22.49</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header__navigation  bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg header__navbar">
                    <a class="navbar-brand header__logo" href="#">
                        <img src="https://ultradecking.co.uk/wp-content/themes/ultra-decking/assets/img/Logo-1.webp"
                            alt="logo">
                    </a>
                    <div class="d-flex d-lg-none align-items-center gap-3 text-white header__mobile-cart">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" class="header__profile-icon">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <a href="#" class="position-relative header__basket-icon">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <span
                                class="d-inline-flex position-absolute   bg-primary text-white header__basket-total">1</span>
                        </a>
                        <span class="header__basket-value fw-normal">£22.49</span>
                    </div>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end header__nav-main" id="navbarScroll">
                        <a class="d-lg-none navbar-brand header__logo" href="#">
                            <img src="https://ultradecking.co.uk/wp-content/themes/ultra-decking/assets/img/Logo-1.webp"
                                alt="logo"></a>
                        <ul class="navbar-nav header__lists">
                            <li class="nav-item header_navlist dropdown">
                                <a class="nav-link dropdown-toggle header__nav-link header__nav-link--active"
                                    aria-current="page" href="#">SHOP
                                    <span class="header__nav-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" fill="currentColor"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a href="#" class="header__dropdown-item">Decking</a></li>
                                    <li><a href="#" class="header__dropdown-item">Cladding</a></li>
                                    <li><a href="#" class="header__dropdown-item">Fencing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">SHOP TIMBER</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">ACCESSORIES</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">BE INSPIRED</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">GUIDE</a>
                            </li>
                            <li class="nav-item header_navlist">
                                <a class="nav-link header__nav-link" href="#">CONTACT</a>
                            </li>
                            <li class="nav-item header_navlist header_navlist--btn">
                                <a class="nav-link header__nav-link btn btn-outline-light" href="#">Free
                                    Sample</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Content sections -->
    <main class="page-body">
        <section class="position-relative banner">
            <div class="overlay"></div>
            <div class="container banner__inner">
                <div
                    class="col-10 d-flex align-items-center flex-column gap-4 text-center text-white mx-auto banner__content">
                    <h1 class="mb-0 banner_heading"> Composite Decking | Cladding | Fencing
                        By Ultra Decking®</h1>
                    <p class="banner__para"> The Number one in Quality and Price of Composite Materials </p>
                    <div class="col-5 d-flex align-items-center justify-content-center gap-3 text-center mx-auto">
                        <a href="#" class="btn btn-primary text-uppercase banner__btn"> Buy now <i
                                class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn-success text-uppercase banner__btn"> find out more <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <section class="padding-common intro">
            <div class="container intro__inner">
                <div class="row">
                    <div class="col-10 d-flex flex-column align-items-center justify-content-center gap-2 mb-2 mx-auto">
                        <h2 class="heading mb-2"> Quality <span class="heading--span"> Composite Materials  </span>For
                            Any
                            Budget or Design.
                        </h2>
                        <p class="para text-center col-10 mx-auto"> We understand no outdoor project is the same and
                            each homeowner requires different budgets and designs for different purposes and functions
                            within their exterior range. Here at Ultra Decking we offer a variety of composite materials
                            to suit any outdoor space, </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Content sections  end-->

</body>

</html>