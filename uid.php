<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST['uname'];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
if($uid==null){
	$output["code"]=0;
}
else{
	$output["code"]=1;
	$output["uid"]=$uid;
}
echo json_encode($output);


?>