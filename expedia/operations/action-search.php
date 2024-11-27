<?php

$from = $_POST['from'];
$to = $_POST['to'];
$departs = $_POST['departs'];
$returning = $_POST['returning'];
$adults = $_POST['adults'];
$children = $_POST['children'];

$dataArray = [
    'from' => $from,
    'to' => $to,
    'departs' => $departs,
    'returning' => $returning,
    'adults' => $adults,
    'children' => $children,
];

foreach( $dataArray as $key => $value){
    echo $value . "<br>";
}
