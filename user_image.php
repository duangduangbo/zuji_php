<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
$uname=$_REQUEST["uname"];
$uimage=$_REQUEST["uimage"];
$sql="update user set uimage='$uimage' where uname='$uname'";
$output=sql_execute($sql);
if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';
?>