<?php
session_start();
require('./components/essentials.php');
require('./components/header.php');
require('./operations/action-search.php');

$insertDataForQuery = new SearchData($search_category, $trip_category, $trip_from, $trip_to, $trip_departs, $trip_returning, $trip_adults, $trip_children);
$insertDataForQuery->searchData();
if (isset($_SESSION['resultofQuerySearch']) && !empty($_SESSION['resultofQuerySearch'])) {
    foreach ($_SESSION['resultofQuerySearch'] as $viewQueryR) {
        if (!empty($viewQueryR['id']) && !empty($viewQueryR['table_source'])) {
            $fetchSearchIDQueryResulttoView = (int) $viewQueryR['id'];
            $tableSource = $connection->real_escape_string($viewQueryR['table_source']);

            $fetchSearchQueryResulttoView = "SELECT * FROM `$tableSource` WHERE `id` = $fetchSearchIDQueryResulttoView";
            $fetchResultQueryforResult = mysqli_query($connection, $fetchSearchQueryResulttoView);

            if ($fetchResultQueryforResult && mysqli_num_rows($fetchResultQueryforResult) > 0) {
                foreach ($fetchResultQueryforResult as $fetchResultQueryforView) {
                    if (!empty($fetchResultQueryforView['servicecompany'])) {
                        echo htmlspecialchars($fetchResultQueryforView['servicecompany']);
                    }
                    elseif (!empty($fetchResultQueryforView['hotel_name'])) {
                        echo htmlspecialchars($fetchResultQueryforView['hotel_name']);
                    }
                }
            } else {
                echo "Failed to fetch results from $tableSource.";
            }
        } else {
            echo "ID or table source not found.";
        }
    }
} else {
    echo "<p>No results found for your search criteria.</p>";
}


?>
<?php require('./components/essentials-bottom.php') ?>
<?php require('./components/footer.php'); ?>