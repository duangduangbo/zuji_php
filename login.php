<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST["uname"];
@$upass=$_REQUEST["upass"];
$output=['code'=>0,'data'=>null];
$sql="select * from user where uname='$uname' and upassword=md5('$upass')";
@$result = mysqli_query($conn,$sql);
@$row = mysqli_fetch_assoc($result);
$result=sql_execute($sql);
if($row==null){
	$output['code']=0;//失败
}
else {
	$output['code']=1;
	$output['data']=$result;
};//成功
echo json_encode($output);
?>