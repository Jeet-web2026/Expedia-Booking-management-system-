<?php require('./components/header.php'); ?>

<main id="main">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card w-75 shadow body-search" style="border-radius: 10px 10px 0px 0px;">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card border-0 bg-transparent">
                            <div class="card-body d-flex justify-content-between">
                                <button type="button" class="btn btn-warning px-4 py-2"><i class="fa-solid fa-plane-up text-light fs-4"></i></button>
                                <button type="button" class="btn btn-light px-4 py-2"><i class="fa-regular fa-building fs-4" style="color: #011634f0;"></i></button>
                                <button type="button" class="btn btn-light px-4 py-2"><i class="fa-solid fa-car fs-4" style="color: #011634f0;"></i></button>
                                <button class="btn btn-light px-4 py-2 fs-5 font-500" style="color: #011634f0;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Roundtrip<i class="fa-solid fa-plus ms-5" style="font-size: 15px !important; color: #011634f0;"></i>
                                    </button>
                                    <ul class="dropdown-menu" style="width: 37% !important;">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require('./components/footer.php'); ?>