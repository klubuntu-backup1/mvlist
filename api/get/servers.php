<?php

include("../../db/sqlController.php");

$sqlController = new SqlController();
$result = $sqlController->fetch_servers();
echo $result;

?>