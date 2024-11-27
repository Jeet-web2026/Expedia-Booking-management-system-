<?php require('./components/header.php'); ?>

<main id="main">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card w-75 shadow body-search" style="border-radius: 10px 10px 0px 0px;">
            <div class="card-body p-4">
                <form action="./operations/action-search.php" method="post">
                    <div class="row align-items-center">
                        <div class="col-md-6 pe-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body d-flex justify-content-between px-0">
                                    <a href="#" class="btn btn-warning px-4 py-2"><i class="bi bi-airplane fs-4" style="color: #011634f0;"></i></a>
                                    <a href="#" class="btn btn-light px-4 py-2"><i class="bi bi-building fs-4" style="color: #011634f0;"></i></a>
                                    <a href="#" class="btn btn-light px-4 py-2"><i class="bi bi-taxi-front fs-4" style="color: #011634f0;"></i></a>
                                    <button class="btn btn-light px-4 py-2 fs-5 font-500" style="color: #011634f0;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Roundtrip<i class="fa-solid fa-plus ms-5" style="font-size: 15px !important; color: #011634f0;"></i>
                                    </button>
                                    <ul class="dropdown-menu" style="width: 43% !important;">
                                        <li><a class="dropdown-item text-capitalize" href="#">domestic tour</a></li>
                                        <li><a class="dropdown-item text-capitalize" href="#">international tour</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-check text-light fs-2 fw-bold me-2"></i>
                            <div>
                                <h4 class="text-uppercase text-light">best price</h4>
                                <h5 class="text-uppercase text-light text-opacity-50">guarantee</h5>
                            </div>
                        </div>
                        <div class="col-md-6 pe-3">
                            <div class="mb-3">
                                <label for="from" class="form-label text-light">From</label>
                                <input type="text" class="form-control border-0 shadow-none py-2" id="from" name="from" placeholder="Your home address">
                            </div>
                        </div>
                        <div class="col-md-6 ps-3">
                            <div class="mb-3">
                                <label for="to" class="form-label text-light">To</label>
                                <input type="text" class="form-control border-0 shadow-none py-2" id="to" name="to" placeholder="e.g. Russia, Japan">
                            </div>
                        </div>
                        <div class="col-md-6 pe-3">
                            <div class="row">
                                <div class="col-md-6 pe-3">
                                    <div class="mb-3">
                                        <label for="departs" class="form-label text-light">Departs</label>
                                        <input type="date" class="form-control border-0 shadow-none py-2" id="departs" name="departs" placeholder="Your home address">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3">
                                    <div class="mb-3">
                                        <label for="returning" class="form-label text-light">Returning</label>
                                        <input type="date" class="form-control border-0 shadow-none py-2" id="returning" name="returning" placeholder="Your home address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-3">
                            <div class="row">
                                <div class="col-md-6 pe-3">
                                    <div class="mb-3">
                                        <label for="adults" class="form-label text-light">Adults(18+)</label>
                                        <select class="form-select shadow-none border-0 py-2" aria-label="Default select example" name="adults">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-3">
                                    <div class="mb-3">
                                        <label for="children" class="form-label text-light">Children(0-17)</label>
                                        <select class="form-select shadow-none border-0 py-2" aria-label="Default select example" name="children">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn px-5 bg-warning fw-bold text-uppercase py-2" style="color: #011634f0;">Search</button>
                                <div class="btn-group dropend">
                                    <button type="button" class="btn text-light dropdown-toggle border-0 shadow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        Advanced options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require('./components/footer.php'); ?>