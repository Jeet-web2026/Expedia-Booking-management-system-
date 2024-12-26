<?php
require('../configaration/config.php');
$requestDbdetails = $_GET['db'];
$requestIddetails = $_GET['id'];
class fetchRequestData{
    private $reqDb;
    private $reqId;
    
    public function __construct($RequestId, $requestDatabase)
    {
        $this->reqDb = $RequestId;
        $this->reqId = $requestDatabase;
    }

}

?>