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

        .web-font-2 {
            color: #ffc107 !important;
        }

        .display-none {
            display: none !important;
        }

        .transition {
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
            border-radius: 0px !important;
        }

        .web-btn {
            background-color: #ffc107 !important;
            color: #011634f0 !important;
        }

        .web-btn:hover {
            background-color: #011634f0 !important;
            color: #ffc107 !important;
            transition: 0.3s ease-in-out;
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

        .nav-pills .nav-link.active {
            background-color: #ffc107 !important;
            color: #fff !important;
        }

        .modal-body .accordion .accordion-button:not(.collapsed) {
            background-color: #ffc107 !important;
            color: #fff !important;
        }

        .modal-body .accordion .accordion-button:not(.collapsed) h2 {
            color: #fff !important;
        }

        .modal-body .accordion .accordion-button {
            background-color: #ffc10708 !important;
        }

        .modal-body .col-md-3 .card .card-img-top {
            height: 100px;
            width: 100px;
            border-radius: 50%;
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
        #hotel-demos .slick-prev {
            background-color: #011634f0;
            left: -33px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
        }

        #hotel-demos .slick-next {
            background-color: #011634f0;
            right: -33px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
        }

        #hotel-demos .slick-slide img {
            height: 200px !important;
        }

        /* hotel-demos end */

        /* email subcription start */
        #email-subscription .subscription-img {
            height: 200px;
        }

        /* email subcription end */

        /* footer start */
        #footer ul li {
            list-style: none;
        }

        /* footer end */

        /* account info start */
        #myAccount-info {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* account info end */

        /* admin start */
        #admin-view{
            height: 100vh;
            width: 100%;
        }

        #admin-view .admin-profile{
            height: 50px;
            border-radius: 50%;
        }
        /* admin end */
    </style>


</head>

<body>