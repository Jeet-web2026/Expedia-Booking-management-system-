<?php
session_start();
require('../configaration/config.php');

$hotelId = htmlspecialchars(trim($_POST['hotelId']));
$hotelName = htmlspecialchars(trim($_POST['hotelName']));
$hotelRValue = htmlspecialchars(trim($_POST['ratingsValue']));
$hotelDateFrom = htmlspecialchars(trim($_POST['availDateFrom']));
$hotelDateTo = htmlspecialchars(trim($_POST['availDateTo']));
$hotelRate = htmlspecialchars(trim($_POST['discountRate']));
$hotelRupees = htmlspecialchars(trim($_POST['rupees']));
$hotelActualRupees = htmlspecialchars(trim($_POST['actualRupees']));
$sessionId = htmlspecialchars(trim($_SESSION['adminTableno']));

$sqlQuery = "INSERT INTO `hotels-details`(`session_id`, `hotel_name`, `hotels_rating`, `availabledate_from`, `availabledate_to`, `hotel_rate`, `hotel_price`, `hotels_actual_price`, `hotel_img`) VALUES ('$sessionId','$hotelName','$hotelRValue','$hotelDateFrom','$hotelDateTo','$hotelRate','$hotelRupees','$hotelActualRupees','0')";
$runQuery = mysqli_query($connection, $sqlQuery);

if ($runQuery) {
    echo "Data inserted successfully!";
} else {
    echo "Failed to insert!";
}
