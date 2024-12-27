<?php
session_start();
require('../components/essentials.php');
require('../components/header.php');
require('manage-cart.php');
$fetchRID = $_GET['id'];
$fetchRDB = $_GET['db'];
$fetch = new fetchOperation($fetchRID, $fetchRDB);
$fetch->fetchData();
echo '<section id="order-details" class="p-5">';
echo '<div class="container-fluid p-5">';
echo '<div class="row">';
if (isset($_SESSION['CustomerOrder_details']) && !empty($_SESSION['CustomerOrder_details'])) {
    foreach ($_SESSION['CustomerOrder_details'] as $viewOrderDetails) {
        if ($_SESSION['clientTableno'] = $viewOrderDetails['login_id']) {
            echo '
                <div class ="col-md-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            ';
        }
    }
}
echo '</div>';
echo '</div>';
echo '</section>';
?>
<?php
require('../components/footer.php');
?>