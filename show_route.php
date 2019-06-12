<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-Type:application/json;charset=UTF-8");

require_once("./init.php");
@$uname=$_REQUEST["uname"];
$sql1="select * from user where uname='$uname'";
$result=sql_execute($sql1);
$uid=$result[0]["uid"];
$sql="SELECT * FROM routes where user_id='$uid' order by rid desc";
$output=sql_execute($sql);

echo json_encode($output);


?>