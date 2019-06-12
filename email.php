<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST['uname'];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uemail=$result[0]["uemail"];
if($uemail==null){
	$output["code"]=0;
}
else{
	$output["code"]=1;
	$output["uemail"]=$uemail;
}
echo json_encode($output);


?>