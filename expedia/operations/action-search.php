<?php

class searchData
{
    private $search_category;
    private $trip_category;
    private $from;
    private $to;
    private $departs;
    private $returning;
    private $adults;
    private $children;

    public function __construct($cat, $tcat, $from, $to, $departs, $return, $adults, $children)
    {
        $this->search_category = $cat;
        $this->trip_category = $tcat;
        $this->from = $from;
        $this->to = $to;
        $this->departs = $departs;
        $this->returning = $return;
        $this->adults = $adults;
        $this->children = $children;
    }

    public function searchData()
    {
        $searchData = "";
    }
}

$search_category = htmlspecialchars(trim($_POST['search-category']));
$trip_category = htmlspecialchars(trim($_POST['tour-type']));
$from = htmlspecialchars(trim($_POST['from']));
$to = htmlspecialchars(trim($_POST['to']));
$departs = htmlspecialchars(trim($_POST['departs']));
$returning = htmlspecialchars(trim($_POST['returning']));
$adults = htmlspecialchars(trim($_POST['adults']));
$children = htmlspecialchars(trim($_POST['children']));



$insertData = new searchData($search_category, $trip_category, $from, $to, $departs, $returning, $adults, $children);

$insertData->searchData();
