<?php
session_start();
require('../configaration/config.php');
$email = $_POST['login-email'];
$pass = $_POST['pass'];
$checkEmail = "SELECT * FROM `client-signup` WHERE email_add = '$email' AND password = '$pass'";
$runQuery = mysqli_query($connection, $checkEmail);
if ($runQuery) {
    if (mysqli_num_rows($runQuery) == 1) {
        $userData = mysqli_fetch_assoc($runQuery);
        echo "Welcome! <span class='text-capitalize'>" . $userData['first_name'] . "</span> You are successfully logged in!";
        // After successful login
$_SESSION['fname'] = $userData['first_name'];  // Store the first name in session

    
    } else {
        echo "Invalid credintials.";
    }
} else {
    echo "Error: " . mysqli_error($connection);
}
