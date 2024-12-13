<?php
session_start();
require('../components/essentials.php');
?>
<section id="admin-view">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #011634f0;">
        <div class="container-fluid px-5 py-1">
            <a href="">
                <h2 class="text-light text-capitalize"><img src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg" alt="admin-profile" class="admin-profile me-3">Expedia</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link web-font-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link web-font-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle web-font-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu mt-4">
                            <li><a class="dropdown-item" href="#">Edit profile</a></li>
                            <li><a class="dropdown-item" href="#">Change password</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-0 h-100" style="margin-top: 11vh;">
        <div class="d-flex align-items-start h-100">
            <div class="nav flex-column nav-pills h-100 pt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #011634f0;">
                <button class="nav-link active no-radius px-5 text-light font-500" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                <button class="nav-link no-radius text-light font-500" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                <button class="nav-link no-radius text-light font-500" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link no-radius text-light font-500" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
            <div class="tab-content h-100 w-100" style="background-color: #edcece8c;" id="v-pills-tabContent">
                <div class="tab-pane fade show active h-100" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="row h-100 bg-light p-4">
                        <div class="col-md-6 pe-3">
                            <div class="card h-50 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <div id="piechart" style="width: 100%; height: 100%;"></div>
                                </div>
                            </div>
                            <div class="card h-50 border-0 shadow mt-3 rounded-5">
                                <div class="card-body">
                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
            </div>
        </div>
    </div>
</section>
<?php
require('../components/essentials-bottom.php');
?>