<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
$dtitle=$_REQUEST["dtitle"];
$drecord=$_REQUEST["drecord"];
$dtime=$_REQUEST["dtime"];
$detime=$_REQUEST["detime"];
$dminutes=$_REQUEST["dminutes"];
$dfood=$_REQUEST["dfood"];
$dhouse=$_REQUEST["dhouse"];
$dimage=$_REQUEST["dimage"];
$dplace=$_REQUEST["dplace"];
$dfriend=$_REQUEST["dfriend"];
$isSee=$_REQUEST["isSee"];
$uname=$_REQUEST["uname"];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
//插入足迹信息
$sql="insert into detail(user_id,dtitle,dtime,drecord,dfood,dhouse,dplace,dimage,dfriend,isSee,detime,dminutes) values('$uid','$dtitle','$dtime','$drecord','$dfood','$dhouse','$dplace','$dimage','$dfriend',$isSee,'$detime','$dminutes')";
$output=sql_execute($sql);
if($output==1)
{
	echo '{"code":"1"}';
	
} 
else{
	echo '{"code":"0"}';
} 
?>