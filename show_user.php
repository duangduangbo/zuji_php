<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST["uname"];

$sql="select * from user where uname='$uname'";
$output=sql_execute($sql);

echo json_encode($output);


?>