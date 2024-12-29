<?php
session_start();
require('../components/essentials.php');
require('../components/header.php');
require('../configaration/config.php');

echo '<section id="order-details" class="p-5">';
echo '<div class="container-fluid p-5">';
echo '<div class="row">';

if (isset($_SESSION['clientTableno']) && !empty($_SESSION['clientTableno'])) {
    $fetch_customer_id = $_SESSION['clientTableno'];
    $fetch_customer_data_sqlQuery = "SELECT * FROM `client_cart` WHERE `login_id` = $fetch_customer_id";

    global $connection;
    $run_query = mysqli_query($connection, $fetch_customer_data_sqlQuery);

    if ($run_query && mysqli_num_rows($run_query) > 0) {
        while ($view_Dta = mysqli_fetch_assoc($run_query)) {
            echo '
            
            <div class="card mb-3 border-0 shadow rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://img.freepik.com/free-photo/umbrella-chair_74190-3726.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357&semt=ais_hybrid" class="img-fluid rounded-start" alt="' . htmlspecialchars(trim($view_Dta['companyname'])) . '">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title web-font text-capitalize yatra-one-regular">' . htmlspecialchars(trim($view_Dta['companyname'])) . '</h5>
                        <div class="d-flex aign-items-center">
                            <h6 class="badge bg-secondary">' . htmlspecialchars(trim($view_Dta['availablefrom'])) . '</h6>
                            <h6 class="badge bg-secondary">' . htmlspecialchars(trim($view_Dta['availableto'])) . '</h6>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            
            ';
        }
    }
} else {
    echo '
    <center>
        <h2 class="text-light fw-bold fs-2 mt-5 mb-4">You are now login right now!</h2>
        <a href="/expedia/pages/my-account.php" class="web-btn px-3 py-2 fs-5 fw-bold rounded-4">Login now</a>
    </center>
    ';
}

echo '</div>';
echo '</div>';
echo '</section>';

require('../components/footer.php');
