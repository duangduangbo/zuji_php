<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST["uname"];
@$upass=$_REQUEST["upass"];
@$uemail=$_REQUEST["uemail"];
$sql="select * from user where uname='$uname'";
@$result = mysqli_query($conn,$sql);
@$row = mysqli_fetch_assoc($result);
if($row==null){
	$sql="insert into user(uname,upassword,uemail) values('$uname',md5('$upass'),'$uemail')";
	$output=sql_execute($sql);
	if($output==1)
	{	
	echo '{"code":"1"}';//成功
	}
	else{
		echo '{"code":"0"}';//失败
	}
}
else 
echo '{"code":"-1"}';//已存在
?>