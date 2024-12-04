    <?php require('essentials.php')?>
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