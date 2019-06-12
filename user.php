<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");

$sql="select * from user ";
$output["data"]=sql_execute($sql);

echo json_encode($output);


?>