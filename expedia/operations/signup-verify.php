<?php
require('../configaration/config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['signup-firstname'] && $_POST['signup-lastname'] && $_POST['signup-mob'] && $_POST['signup-email'] && $_POST['signup-pass'] && $_POST['signup-address'])) {

        $clientFirstname = htmlspecialchars(trim($_POST['signup-firstname']));
        $clientLastname =  htmlspecialchars(trim($_POST['signup-lastname']));
        $clientMobile =  htmlspecialchars(trim($_POST['signup-mob']));
        $clientEmail =  htmlspecialchars(trim($_POST['signup-email']));
        $clientPassword = password_hash($_POST['signup-pass'], PASSWORD_BCRYPT);
        $clientAddress =  htmlspecialchars(trim($_POST['signup-address']));

        $query = "INSERT INTO `client-signup` (`first_name`, `last_name`, `mob`, `email_add`, `password`, `address`) VALUES ('$clientFirstname', '$clientLastname', '$clientMobile', '$clientEmail', '$clientPassword', '$clientAddress ')";
        $success = mysqli_query($connection, $query);
    }
} else {
    echo "Request not authorised.";
}
