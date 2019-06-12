<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");
require_once("./init.php");
$did=$_REQUEST["did"];
$sql="delete from detail where did=$did";
$output=sql_execute($sql);

if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';

?>