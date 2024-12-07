<?php


$search_category = $_POST['search-category'];
$from = $_POST['from'];
$to = $_POST['to'];
$departs = $_POST['departs'];
$returning = $_POST['returning'];
$adults = $_POST['adults'];
$children = $_POST['children'];


$dataArray = [
    'category' => $search_category,
    'from' => $from,
    'to' => $to,
    'departs' => $departs,
    'returning' => $returning,
    'adults' => $adults,
    'children' => $children,
];

if($search_category === 'airplane'){
    echo 'running airplane';
}elseif($search_category === 'rooms'){
    echo 'running rooms';
}elseif($search_category === 'travels'){
    echo 'running travels';
}else{
    echo 'please coose a proper category';
}
