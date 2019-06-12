<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST["uname"];
@$rid=$_REQUEST["rid"];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
$sql="SELECT * FROM routes where rid=$rid and user_id='$uid'";
$output=sql_execute($sql);

echo json_encode($output);


?>