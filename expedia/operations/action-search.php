<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "expedia";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$search_category = htmlspecialchars(trim($_POST['search-category']));
$trip_category = htmlspecialchars(trim($_POST['querySearchtour-type']));
$trip_from = htmlspecialchars(trim($_POST['querysearchFrom']));
$trip_to = htmlspecialchars(trim($_POST['querysearchTo']));
$trip_departs = htmlspecialchars(trim($_POST['querysearchDeparts']));
$trip_returning = htmlspecialchars(trim($_POST['querysearchReturning']));
$trip_adults = htmlspecialchars(trim($_POST['querysearchAdultscount']));
$trip_children = htmlspecialchars(trim($_POST['querysearchChildrencount']));

class SearchData
{
    private $search_category;
    private $trip_category;
    private $trip_from;
    private $trip_to;
    private $trip_departs;
    private $trip_returning;
    private $trip_adults;
    private $trip_children;

    public function __construct($cat, $tcat, $from, $to, $departs, $return, $adults, $children)
    {
        $this->search_category = $cat;
        $this->trip_category = $tcat;
        $this->trip_from = $from;
        $this->trip_to = $to;
        $this->trip_departs = $departs;
        $this->trip_returning = $return;
        $this->trip_adults = $adults;
        $this->trip_children = $children;
    }

    public function searchData()
    {
        global $connection;
        $searchQueryforResult = "
        SELECT *, 'hotels-details' AS table_source FROM `hotels-details` 
        WHERE LOWER(`category`) LIKE LOWER('%" . $connection->real_escape_string($this->search_category) . "%') 
        AND LOWER(`place`) LIKE LOWER('%" . $connection->real_escape_string($this->trip_to) . "%') 
        UNION 
        SELECT *, 'aeroplanes_details' AS table_source FROM `aeroplanes_details` 
        WHERE LOWER(`category`) LIKE LOWER('%" . $connection->real_escape_string($this->search_category) . "%') 
        AND LOWER(`locationto`) LIKE LOWER('%" . $connection->real_escape_string($this->trip_to) . "%') 
        UNION 
        SELECT *, 'taxi_details' AS table_source FROM `taxi_details` 
        WHERE LOWER(`category`) LIKE LOWER('%" . $connection->real_escape_string($this->search_category) . "%') 
        AND LOWER(`locationto`) LIKE LOWER('%" . $connection->real_escape_string($this->trip_to) . "%');
        ";

        $runQueryforResult = mysqli_query($connection, $searchQueryforResult);

        if ($runQueryforResult && mysqli_num_rows($runQueryforResult) > 0) {
            $_SESSION['resultofQuerySearch'] = mysqli_fetch_all($runQueryforResult, MYSQLI_ASSOC);
        } else {
            $_SESSION['resultofQuerySearch'] = [];
        }
    }
}
