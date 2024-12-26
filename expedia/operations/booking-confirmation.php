<?php
require('../configaration/config.php');
class fetchRequestData
{
    private $reqDb;
    private $reqId;

    public function __construct($RequestId, $requestDatabase)
    {
        $this->reqDb = $RequestId;
        $this->reqId = $requestDatabase;
    }

    public function insertData()
    {
        if (!empty($this->reqDb) && !empty($this->reqId)) {
            global $connection;
            $fetchData = "SELECT * FROM `{$this->reqDb}` WHERE `id` = {$this->reqId}";
            $runfetchData = mysqli_query($connection, $fetchData);
            if ($runfetchData) {
                foreach ($runfetchData as $dataView) {
                    if (
                        (!empty($dataView['servicecompany']) || !empty($dataView['hotel_name']))
                        &&
                        (!empty($dataView['availfrom']) || !empty($dataView['availabledate_from']))
                        &&
                        (!empty($dataView['availto']) || !empty($dataView['availabledate_to']))
                        &&
                        (!empty($dataView['dprice']) || !empty($dataView['hotels_actual_price']))
                    ) {

                        $name =  ($dataView['servicecompany'] ?? $dataView['hotel_name']);
                        $dateF = ($dataView['availfrom'] ?? $dataView['availabledate_from']);
                        $dateT = ($dataView['availto'] ?? $dataView['availabledate_to']);
                        $price = ($dataView['dprice'] ?? $dataView['hotels_actual_price']);
                        if (!empty($name) && !empty($dateF) && !empty($dateT) && !empty($price)) {
                            $insertQ = "INSERT INTO `client_cart`(`fetch_cart_id`, `db_name`, `companyname`, `availablefrom`, `availableto`, `price`) VALUES ('$this->reqId','$this->reqDb','$name','$dateF','$dateT','$price')";
                            $runinsertQ = mysqli_query($connection, $insertQ);
                            if($runinsertQ){
                                echo "Data inserted successfully";
                            }else{
                                echo "Something went wrong";
                            }
                        }
                    }
                }
            }
        }
    }
}
$requestDbdetails = $_GET['db'];
$requestIddetails = $_GET['id'];
$callClass = new fetchRequestData($requestDbdetails, $requestIddetails);
$callClass->insertData();
