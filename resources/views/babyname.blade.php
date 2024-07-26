<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jubilee - Free Online Course HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="/icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="/css/vendor.css">
<link rel="stylesheet" type="text/css" href="/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
        <div class="container-fluid">
            <div class="main-logo d-lg-none">
                <a href="index.html">
                    <img src="/images/logo.png" alt="logo" class="img-fluid">
                </a>
            </div>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header mt-3">
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">
                    <div class="main-logo">
                        <a href="/">
                            <img src="/images/logo.png" alt="logo" class="img-fluid">
                        </a>
                    </div>

                    <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link mx-2 active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link mx-2">contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-flex align-items-center">
                        <ul class="d-flex  align-items-center list-unstyled m-0">
                            <li>
                                <a href="account.html" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#user-circle" />
                                    </svg> </a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#heart" />
                                    </svg> </a>
                                </a>
                            </li>

                            <li class="">
                                <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#shopping-bag" />
                                    </svg> </a>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                        <use href="#search" />
                                    </svg> </a>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="container-fluid d-lg-none">
            <div class="d-flex  align-items-end mt-3">
                <ul class="d-flex  align-items-center list-unstyled m-0">
                    <li>
                        <a href="account.html" class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                <use href="#user-circle" />
                            </svg> </a>
                    </li>
                    <li>
                        <a href="wishlist.html" class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                <use href="#heart" />
                            </svg> </a>
                        </a>
                    </li>

                    <li class="">
                        <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                <use href="#shopping-bag" />
                            </svg> </a>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                <use href="#search" />
                            </svg> </a>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" style="background-image:url(/images/billboard-bg.png); background-repeat: no-repeat; height:400px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pe-5 mt-5 mt-md-0">
                    <h2 class="display-1 text-uppercase">Find Your Baby Name</h2>
                    <p class="fs-4 my-4 pb-2">Search for the perfect boys and girls names</p>
                    <div>
                        <form id="form" class="d-flex position-relative ">
                            <input type="text" name="email" placeholder="Type name starting letters minimum 2 char" class="form-control bg-white border-0 rounded-4 shadow-none px-4 py-3 w-100">
                            <button class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                                    <use href="#search" />
                                </svg></button>
                        </form>
                    </div>
                    <div class="social-links mt-4">
                        <ul class="d-flex list-unstyled ">
                            <li class="me-4"><a href="babyname/A">A</a></li>
                            <li class=" me-4 list-group-item d-flex justify-content-between align-items-center  bg-white"><div class="d-flex align-items-center"><a href="">B</a></div></li>
                            <li class="me-4"><a href="#">C</a></li>
                            <li class="me-4"><a href="#">D</a></li>
                            <li class="me-4"><a href="#">E</a></li>
                            <li class="me-4"><a href="#">F</a></li>
                            <li class="me-4"><a href="#">G</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="category">
        <div class="container ">
            <div class="mt-4 d-md-flex justify-content-between align-items-center">
                <div>
                    <h3>A Starting Letter Boy Name List</h3>
                </div>
            </div>
            <div class="row g-md-3 mt-2">
                <div class="col-md-4">
                    <div class="primary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-primary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Tamil</p>
                                <p class="category-paragraph m-0">100+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#speakerphone" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Telugu</p>
                                <p class="category-paragraph m-0">200+ Names</p>
                            </div>
                        </div>
                    </div>
                    <div class="secondary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#handshake" class="svg-secondary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Kannada</p>
                                <p class="category-paragraph m-0">100+ Names</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gray rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#camera" class="svg-gray" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Kalaiarasu</p>
                                <p class="category-paragraph m-0">200+ Likes</p>
                            </div>
                        </div>
                    </div>
                    <div class="secondary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-secondary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Vedhikasri</p>
                                <p class="category-paragraph m-0">200+ likes</p>
                            </div>
                        </div>
                    </div>
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#fitness" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Health & Fitness</p>
                                <p class="category-paragraph m-0">24 courses</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#speakerphone" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">SEO & Marketing</p>
                                <p class="category-paragraph m-0">24 courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="primary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-primary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                                <p class="category-paragraph m-0">39 courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="gray rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#pencil-box" class="svg-gray" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                                <p class="category-paragraph m-0">39 courses</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <footer id="footer">
        <div class="container pt-5 ">
            <div class="row">
                <div class="col-sm-6 col-lg-4 my-3">
                    <div class="footer-menu">
                        <a href="index.html">
                            <img src="images/logo.png" alt="logo" class="img-fluid">
                        </a>
                        <div class="social-links mt-4">
                            <ul class="d-flex list-unstyled ">
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#youtube"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">Quick Links</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Home</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">About us</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">Contact Us</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">babynames@babyname.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="footer-bottom">
        <hr class="text-black-50">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 copyright">
                    <p>© 2024 babyname List. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                </div>
            </div>
        </div>
    </div>





    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>