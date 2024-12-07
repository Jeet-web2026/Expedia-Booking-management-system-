<?php
require('../configaration/config.php');
$email = $_POST['login-email'];
$checkEmail = "SELECT * FROM `client-signup` WHERE email_add = '$email'";
$runQuery = mysqli_query($connection, $checkEmail);
if ($runQuery) {
    if (mysqli_num_rows($runQuery) == 1) {
        echo "You are successfully logged in!";
    } else {
        echo "Invalid credintials.";
    }
} else {
    echo "Error: " . mysqli_error($connection);
}
