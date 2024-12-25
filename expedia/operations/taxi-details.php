<?php
session_start();
require('../configaration/config.php');
class taxi
{
    private $taxiCategory;
    private $taxipicture;
    private $taxiservicecompany;
    private $taxiexperience;
    private $taxiavlabledatefrom;
    private $taxiavlabledateto;
    private $taxidiscount;
    private $taxiactualprice;
    private $taxiprice;
    private $taxilocationfrom;
    private $taxilocationto;

    public function __construct($category, $pic, $serviceco, $ratings, $from, $to, $discount, $actualpr, $price, $locationfrom, $locationto)
    {
        $this->taxiCategory = $category;
        $this->taxipicture = $pic;
        $this->taxiservicecompany = $serviceco;
        $this->taxiexperience = $ratings;
        $this->taxiavlabledatefrom = $from;
        $this->taxiavlabledateto = $to;
        $this->taxidiscount = $discount;
        $this->taxiactualprice = $actualpr;
        $this->taxiprice = $price;
        $this->taxilocationfrom = $locationfrom;
        $this->taxilocationto = $locationto;
    }

    public function insertData()
    {
        global $connection;
        $insertQuery = "INSERT INTO `taxi_details`(`category`, `image`, `servicecompany`, `ratings`, `availfrom`, `availto`, `discount`, `actualprice`, `dprice`, `locationfrom`, `locationto`) 
        VALUES ('$this->taxiCategory','$this->taxipicture','$this->taxiservicecompany','$this->taxiexperience','$this->taxiavlabledatefrom','$this->taxiavlabledateto','$this->taxidiscount','$this->taxiactualprice','$this->taxiprice','$this->taxilocationfrom','$this->taxilocationto')";
        $runthisQuery = mysqli_query($connection, $insertQuery);
        if ($runthisQuery) {
            echo 'Data inserted successfully!';
        } else {
            echo 'Failed to insert!';
        }
    }
}

$taxiCategory = htmlspecialchars(trim($_POST['taxiCategory']));
$taxipicture = 1;
$taxiservicecompany = htmlspecialchars(trim($_POST['serviceCompanyname']));
$taxiexperience = htmlspecialchars(trim($_POST['taxiratings']));
$taxiavlabledatefrom = htmlspecialchars(trim($_POST['taxiavail-datefrom']));
$taxiavlabledateto = htmlspecialchars(trim($_POST['taxiavail-dateTo']));
$taxidiscount = htmlspecialchars(trim($_POST['taxidiscountrate']));
$taxiactualprice = htmlspecialchars(trim($_POST['taxiactualRupees']));
$taxiprice = htmlspecialchars(trim($_POST['taxirupees']));
$taxilocationfrom = htmlspecialchars(trim($_POST['taxilocation_from']));
$taxilocationto = htmlspecialchars(trim($_POST['taxilocation_to']));

$dataInsert = new taxi($taxiCategory, $taxipicture, $taxiservicecompany, $taxiexperience, $taxiavlabledatefrom, $taxiavlabledateto, $taxidiscount, $taxiactualprice, $taxiprice, $taxilocationfrom, $taxilocationto);
$dataInsert->insertData();
