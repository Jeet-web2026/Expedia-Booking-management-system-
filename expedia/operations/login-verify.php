<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['frstname'] && $_POST['lstname'] && $_POST['mobileno'] && $_POST['email'] && $_POST['pass'])){
        $firstName = $_POST['frstname'];
        $lastName = $_POST['lstname'];
        $mobileNo = $_POST['mobileno'];
        $emailId = $_POST['email'];
        $password = $_POST['pass'];
    }
}
?>