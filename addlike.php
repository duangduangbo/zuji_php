<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
$did=$_REQUEST["did"];
$dlike=$_REQUEST["dlike"];
//更新点赞次数
$sql="update detail set dlike='$dlike' where did=$did";
$output=sql_execute($sql);

if($output==1)
{
	echo '{"code":"1"}';
	
} 
else echo '{"code":"0"}';



?>