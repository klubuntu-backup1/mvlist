<?php

include("../../../../db/sqlController.php");

$sqlController = new SqlController();
$result = $sqlController->fetch_servers("name", true);
echo $result;

?>