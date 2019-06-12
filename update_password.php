<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$upass=$_REQUEST["upass"];
$output=['code'=>0,'data'=>null];
$sql="update user set  upassword=md5('$upass')";
$output=sql_execute($sql);

if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';
?>