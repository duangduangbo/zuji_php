<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uid=$_REQUEST["uid"];
@$uemail=$_REQUEST["uemail"];
@$sex=$_REQUEST['sex'];
@$birth=$_REQUEST['birth'];
@$sign=$_REQUEST['sign'];
$sql="update user set uemail='$uemail',sex='$sex',birth='$birth',sign='$sign'  where uid=$uid";
$output=sql_execute($sql);

if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';



?>