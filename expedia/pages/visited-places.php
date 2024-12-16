<?php
session_start();
require('../components/header.php');
require('../configaration/config.php');
$bookingId = $_GET['id'];
function fetchBookingdata()
{
    global $connection;
    global $bookingId;
    $fetchDataview = "SELECT * FROM `hotels-details` WHERE id = '$bookingId'";
    $runDataQuery = mysqli_query($connection, $fetchDataview);
    return $runDataQuery;
}

$runDataQuery = fetchBookingdata();

if ($runDataQuery) {
    foreach ($runDataQuery as $fetchQuery) {
        $_SESSION['clientHotelnmae'] = htmlspecialchars(trim($fetchQuery['hotel_name']));
        $_SESSION['clientHotelRating'] = htmlspecialchars(trim($fetchQuery['hotels_rating']));
        $_SESSION['hotelAvailabilityFrom'] = htmlspecialchars(trim($fetchQuery['availabledate_from']));
        $_SESSION['hotelAvailabilityTo'] = htmlspecialchars(trim($fetchQuery['availabledate_to']));
        $_SESSION['clientHotelDiscountRate'] = htmlspecialchars(trim($fetchQuery['hotel_rate']));
        $_SESSION['clientHotelPrice'] = htmlspecialchars(trim($fetchQuery['hotel_price']));
        $_SESSION['clientHotelActualPrice'] = htmlspecialchars(trim($fetchQuery['hotels_actual_price']));

        $cust_id = $_SESSION['clientTableno'];
        $hotel_name = $_SESSION['clientHotelnmae'];
        $hotel_rating = $_SESSION['clientHotelRating'];
        $hotelavl_from = $_SESSION['hotelAvailabilityFrom'];
        $hotelavl_to = $_SESSION['hotelAvailabilityTo'];
        $hotel_discount = $_SESSION['clientHotelDiscountRate'];
        $hotel_price = $_SESSION['clientHotelPrice'];
        $hotel_actualprice = $_SESSION['clientHotelActualPrice'];
    }
} else {
    echo "No data found!";
}

$sqlQuery = "INSERT INTO `client_cart`(`Cust_id`, `hotel_name`, `hotel_rating`, `hotelavl_from`, `hotelavl_to`, `hotel_discount`, `hotel_price`, `hotel_actualprice`) VALUES ('$cust_id','$hotel_name','$hotel_rating','$hotelavl_from','$hotelavl_to','$hotel_discount','$hotel_price','$hotel_actualprice')";
$accessQuery = mysqli_query($connection, $sqlQuery);
if ($accessQuery) {
    echo "Data inserted successfully!";
} else {
    echo "Data not inserted";
}


require('../components/footer.php');
