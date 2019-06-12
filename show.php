<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
$did=$_REQUEST["did"];
$sql="SELECT * FROM detail where did=$did ";
$output=sql_execute($sql);
if($output[0]["user_id"]!=null){
	$sql="select * from user where uid=".$output[0]['user_id'];
	$uname=sql_execute($sql);
$output[0]['uname']=$uname[0]["uname"];
}


echo json_encode($output);


?>