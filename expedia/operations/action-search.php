<?php
require('../configaration/config.php');
require('../components/essentials.php');
require('../components/header.php');
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
        global $connection;
        $searchQuery = "
        SELECT * FROM `hotels-details` WHERE `category` LIKE '%$this->search_category%' AND `place` LIKE '%$this->to%'
        UNION
        SELECT * FROM `aeroplanes_details` WHERE `category` LIKE '%$this->search_category%' AND `locationto` LIKE '%$this->to%'
        UNION
        SELECT * FROM `taxi_details` WHERE `category` LIKE '%$this->search_category%' AND `locationto` LIKE '%$this->to%'
    ";
        $run = mysqli_query($connection, $searchQuery);
        if (mysqli_num_rows($run) > 0) {
            $FETCHDATA = mysqli_fetch_all($run, MYSQLI_ASSOC);
            foreach($FETCHDATA as $view){
                echo $view['id'];
            }

        } else {
            echo 'Not matched in either table';
        }
    }
}

$search_category = htmlspecialchars(trim($_POST['search-category']));
$trip_category = htmlspecialchars(trim($_POST['querySearchtour-type']));
$from = htmlspecialchars(trim($_POST['querysearchFrom']));
$to = htmlspecialchars(trim($_POST['querysearchTo']));
$departs = htmlspecialchars(trim($_POST['querysearchDeparts']));
$returning = htmlspecialchars(trim($_POST['querysearchReturning']));
$adults = htmlspecialchars(trim($_POST['querysearchAdultscount']));
$children = htmlspecialchars(trim($_POST['querysearchChildrencount']));

$insertData = new searchData($search_category, $trip_category, $from, $to, $departs, $returning, $adults, $children);
$insertData->searchData();
require('../components/footer.php');
?>

