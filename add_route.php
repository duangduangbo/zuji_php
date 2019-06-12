<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
//接收客户端发过来的参数
$rstart_time=$_REQUEST["st"];
$rend_time=$_REQUEST["endt"];
$rtime=$_REQUEST["dtime"];
$rdistance=$_REQUEST["calt"];
$rstart=$_REQUEST["rstart"];
$rend=$_REQUEST["rend"];
$rpoints=$_REQUEST["points"];
$uname=$_REQUEST["uname"];
$rspeed=$_REQUEST["avgs"];
//查找传过来的用户的id编号
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
//添加轨迹到数据库中
$sql="insert into routes(user_id,rstart_time,rend_time,rdistance,rstart,rend,rpoints,rtime,rspeed) values('$uid','$rstart_time','$rend_time','$rdistance','$rstart','$rend','$rpoints','$rtime','$rspeed')";
$output=sql_execute($sql);
//返回插入结果信息给客户端，成功返回1，失败返回0
if($output==1)
{
	echo '{"code":"1"}';
	
} 
else{
	echo '{"code":"0"}';
} 
?>