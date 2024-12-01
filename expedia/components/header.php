<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedia</title>

    <!-- favicons -->
    <link rel="shortcut icon" href="/expedia/images/logo.png" type="image/x-icon">

    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- google fonts cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- fontawesome css cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- botstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- slick css cdn 1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick css cdn 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* universal css */
        * {
            font-family: "Figtree", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        body {
            height: 100%;
            width: 100%;
            box-sizing: border-box;
        }

        .row {
            --bs-gutter-x: 0rem;
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 0 !important;
        }

        .font-500 {
            font-weight: 500;
        }

        .web-font {
            color: #011634f0 !important;
        }

        .web-font-2{
            color: #ffc107 !important;
        }

        .display-none{
            display: none !important;
        }

        .transition{
            transition: 0.3s ease-in-out;
        }

        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }

        .no-radius {
            border-radius: 0px;
        }

        /* universal css */
        /* navbar start */
        .navbar .web-name {
            margin-left: 34%;
            align-items: center;
            display: flex;
        }

        .navbar .logo {
            font-size: 15px;
        }

        .navbar .dropdown-menu {
            background-color: #fff;
            border-radius: 0px !important;
        }

        /* navbar end */

        /* main start */
        main {
            background-image: url('https://img.freepik.com/free-photo/airplane-miniature-notepad-world-map-laptop-wooden-table_169016-49894.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            opacity: 0.9;
        }

        #main .body-search {
            position: absolute;
            bottom: 0;
            background-color: #011634f0;
            width: 90.5%;
        }

        #main .dropdown-menu {
            background-color: #ffc107 !important;
            border-radius: 0px !important;
        }

        #main .dropdown-menu .dropdown-item {
            color: #011634f0 !important;
        }

        .region-india {
            background-image: url('/expedia/images/india.jpg');
            height: 20px;
        }

        /* main end */

        /* hotel-demos start */
        #hotel-demos .slick-prev{
            background-color: #011634f0;
            left: -33px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
        }
        #hotel-demos .slick-next{
            background-color: #011634f0;
            right: -33px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
        }
        #hotel-demos .slick-slide img{
            height: 200px !important;
        }
        /* hotel-demos end */

        /* email subcription start */
        #email-subscription .subscription-img{
            height: 200px;
        }
        /* emai subcription end */

        /* footer start */
        #footer ul li{
            list-style: none;
        }
        /* footer end */
    </style>


</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-5">
            <button type="button" class="btn shadow-none border-0" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                <i class="fa-solid fa-bars fs-5 border p-3 border-warning rounded-circle text-light"></i>
            </button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close border-0 shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-plus fs-5 border p-3 border-warning rounded-circle text-light"></i>
            </button>
            <div class="web-name">
                <i class="fa-solid fa-plane-departure p-2 rounded-circle text-dark bg-warning logo me-2"></i>
                <h2 class="text-light">Expedia</h2>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Support
                        </a>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="tel:9007947875">Call us</a></li>
                            <li><a class="dropdown-item" href="mailto:expedia2407@gmail.com">Mail us</a></li>
                            <li><a class="dropdown-item" href="https://wa.me/9007947875">Contact on whatsapp</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Scratchpad
                        </a>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="/expedia/pages/available-coupons.php">Available coupons</a></li>
                            <li><a class="dropdown-item" href="/expedia/pages/visited-places.php">Visited places</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="/expedia/pages/my-account.php">My account</a></li>
                            <li><a class="dropdown-item" href="/expedia/pages/admin-login.php">Admin login</a></li>
                        </ul>
                    </li>
                    <button type="button" class="btn shadow-none border-0 text-light" data-bs-toggle="modal" data-bs-target="#region-modal">
                        <span class="region-text text-capitalize">Region</span><i class="fa-solid fa-earth-asia fa-spin ms-2"></i>
                    </button>
                    <div class="modal fade" id="region-modal" tabindex="-1" aria-labelledby="region-modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="region-modalLabel">Change your region</h1>
                                    <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center align-items-center">
                                    <input type="text" id="choosen-text" class="form-control w-100 shadow-none" placeholder="Your region name">
                                    <button type="button" id="submit-region" class="btn shadow-none border-0" style="background-color: #ffc107; color: #011634f0;" data-bs-dismiss="modal" aria-label="Close">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar start -->